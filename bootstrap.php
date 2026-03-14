<?php

echo "\n--- MyxFin Search Indexer Loaded ---\n";

register_shutdown_function(function () {
    $base = realpath(__DIR__);
    $sourceDocs = $base . DIRECTORY_SEPARATOR . 'source' . DIRECTORY_SEPARATOR . 'docs';
    $buildPath = $base . DIRECTORY_SEPARATOR . 'build_local';

    if (is_dir($sourceDocs)) {
        $directory = new RecursiveDirectoryIterator($sourceDocs);
        $iterator = new RecursiveIteratorIterator($directory);
        $mdFiles = new RegexIterator($iterator, '/^.+\.md$/i', RecursiveRegexIterator::GET_MATCH);

        $data = []; 
        foreach ($mdFiles as $file) {
            $filePath = $file[0];

            // --- THE NEW SKIP RULE ---
            // If the file path contains '/ph/' or '\ph\', skip it!
            if (str_contains($filePath, DIRECTORY_SEPARATOR . 'ph' . DIRECTORY_SEPARATOR)) {
                continue; 
            }
            // -------------------------

            $content = file_get_contents($filePath);
            
            preg_match('/title:\s*(.*)/', $content, $titleMatch);
            $title = isset($titleMatch[1]) ? trim($titleMatch[1], "\"' ") : basename($filePath, '.md');

            $parts = explode('---', $content);
            $body = isset($parts[2]) ? strip_tags($parts[2]) : $content;
            $body = trim(preg_replace('/\s+/', ' ', $body));

            $cleanPath = str_replace([$base . DIRECTORY_SEPARATOR . 'source', '.md'], '', $filePath);
            $link = '/' . ltrim(str_replace('\\', '/', $cleanPath), '/');

            $data[] = [
                'title' => $title,
                'link' => $link,
                'snippet' => mb_substr($body, 0, 150) . '...',
            ];
        }

        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        
        usleep(500000); 

        if (is_dir($buildPath)) {
            file_put_contents($buildPath . DIRECTORY_SEPARATOR . 'index.json', $json);
            // Count the items so you can see if it worked
            $count = count($data);
            echo "\n🔥 SHUTDOWN SUCCESS: $count items forced into build_local/index.json 🔥\n";
        }
    }
});