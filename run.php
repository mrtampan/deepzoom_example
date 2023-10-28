<?php
require __DIR__ . '/vendor/autoload.php';

// Setup Deepzoom
$deepzoom = Jeremytubbs\Deepzoom\DeepzoomFactory::create([
    'path' => 'images', // Export path for tiles
    'driver' => 'gd', // Choose between gd and imagick support.
    'format' => 'jpg',
]);
// folder, file are optional and will default to filename
$response = $deepzoom->makeTiles('mountain.jpg', 'file', 'result');
