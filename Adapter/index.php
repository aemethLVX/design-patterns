<?php

require_once ('../vendor/autoload.php');

use Adapter\{MediaLibrarySelfWritten, MediaLibraryAdapter};

$mediaLibrary = new MediaLibrarySelfWritten();
$mediaLibrary->upload('test.txt');
$mediaLibrary->get('test.txt');

echo '<br>';

$mediaLibrary = new MediaLibraryAdapter();
$mediaLibrary->upload('test.txt');
$mediaLibrary->get('test.txt');
