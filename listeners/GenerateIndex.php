<?php

namespace listeners; 

use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
    public function handle(Jigsaw $jigsaw)
    {
        // if its working
        echo "\n\n🚀 SEARCH INDEXER RUNNING...\n";

        $docs = $jigsaw->getCollection('docs');

        $data = $docs->map(function ($page) {
            return [
                'title' => $page->title ?? 'Untitled',
                'link' => '/' . trim($page->getPath(), '/'),
                'snippet' => substr(strip_tags($page->getContent()), 0, 150) . '...',
            ];
        })->values();

        file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($data));
        
        echo "✅ SUCCESS: INDEXED " . count($data) . " PAGES\n\n";
    }
}