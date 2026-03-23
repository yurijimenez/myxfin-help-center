<?php

namespace listeners; 

use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
    public function handle(Jigsaw $jigsaw)
    {
        // if its working
        echo "\n\n🚀 SEARCH INDEXER RUNNING...\n";

        $base = realpath($jigsaw->getDestinationPath() . '/../');
        $sourceDocs = $base . DIRECTORY_SEPARATOR . 'source' . DIRECTORY_SEPARATOR . 'docs';

        if (!is_dir($sourceDocs)) {
            echo "❌ ERROR: Source docs directory not found at $sourceDocs\n";
            return;
        }

        $directory = new \RecursiveDirectoryIterator($sourceDocs);
        $iterator = new \RecursiveIteratorIterator($directory);
        $mdFiles = new \RegexIterator($iterator, '/^.+\.md$/i', \RecursiveRegexIterator::GET_MATCH);

        $data = [];
        foreach ($mdFiles as $file) {
            $filePath = $file[0];

            // Skip 'ph' folder as per previous logic if needed, 
            // but the user might want it. Let's index ALL for now unless specified.
            // If we want to skip PH, we can.
            
            $content = file_get_contents($filePath);
            
            // Extract title
            preg_match('/title:\s*(.*)/', $content, $titleMatch);
            $title = isset($titleMatch[1]) ? trim($titleMatch[1], "\"' \r\n") : basename($filePath, '.md');

            // Strip frontmatter
            $parts = explode('---', $content);
            $body = isset($parts[2]) ? strip_tags($parts[2]) : $content;
            $body = trim(preg_replace('/\s+/', ' ', str_replace(["\r", "\n"], ' ', $body)));

            // Generate link
            $cleanPath = str_replace([$base . DIRECTORY_SEPARATOR . 'source', '.md'], '', $filePath);
            $link = '/' . ltrim(str_replace('\\', '/', $cleanPath), '/');

            // Detect language
            $lang = (strpos($link, '/ph/') !== false || strpos($link, '/docs/ph/') !== false) ? 'ph' : 'en';

            $data[] = [
                'title' => $title,
                'link' => $link,
                'snippet' => mb_substr($body, 0, 150) . '...',
                'lang' => $lang,
            ];
        }

        file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($data));


        file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($data));
        
        echo "✅ SUCCESS: INDEXED " . count($data) . " PAGES\n\n";
    }
}