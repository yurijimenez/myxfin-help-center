<?php

/** @var \TightenCo\Jigsaw\Events\EventBus $events */

echo "\n--- MyxFin Search Indexer Loaded via Listeners ---\n";

$events->afterBuild(listeners\GenerateIndex::class);
$events->afterBuild(listeners\GenerateSitemap::class);