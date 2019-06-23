<?php
const FULLPATHFILE = __DIR__ . '/images';

function readFileImages()
{
    $file = [];
    foreach (scandir(FULLPATHFILE) as $images) {
        if($images == '.' || $images == '..') {
            continue;
        } else {
            $file[] = $images;
        }
    }
    return $file;
}

function inMimeType($mimeType)
{
    $mediaTypes= ['image/gif', 'image/svg+xml', 'image/jpeg', 'image/png'];
    return in_array($mimeType, $mediaTypes);
}

