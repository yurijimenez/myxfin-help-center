<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '', 
    'production' => false,
    'siteName' => 'MyxFin Help Center',
    'siteDescription' => 'Beautiful docs powered by Jigsaw',
    'collections' => [
        'docs' => [
            'path' => 'docs/{collection_path}', //keeps the folder structure (en/ or ph/)
            'sort' => 'title',
        ],
    ],
        
    // Algolia DocSearch credentials
    'docsearchAppId' => env('DOCSEARCH_APP_ID'),
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },

    'isActiveParent' => function ($page, $menuItem) {
        $currentPath = trimPath($page->getPath());

        if (is_string($menuItem)) {
            return trimPath($menuItem) === $currentPath;
        }

        if (is_array($menuItem) || is_object($menuItem)) {
            $children = is_array($menuItem) ? ($menuItem['children'] ?? []) : ($menuItem->children ?? []);
            
            foreach ($children as $child) {
                if ($page->isActiveParent($child)) {
                    return true;
                }
            }
            
            $url = is_array($menuItem) ? ($menuItem['url'] ?? null) : ($menuItem->url ?? null);
            if ($url && trimPath($url) === $currentPath) {
                return true;
            }
        }

        return false;
    },

    'url' => function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }

        $cleanedPath = trimPath($path);
        
        // Detect if we are in the ph folder
        $isPh = Str::contains($page->getPath(), 'docs/ph');

        // If in PH mode, redirect the docs path to the ph subfolder
        if ($isPh && Str::startsWith($cleanedPath, 'docs/') && !Str::contains($cleanedPath, 'docs/ph/')) {
            $cleanedPath = str_replace('docs/', 'docs/ph/', $cleanedPath);
        }

        return '/' . $cleanedPath;
    },
];