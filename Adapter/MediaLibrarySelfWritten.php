<?php

namespace Adapter;

class MediaLibrarySelfWritten implements MediaLibraryInterface
{
    public function upload($pathToFile): string
    {
        echo __METHOD__, '<br>';
        return md5(__METHOD__ . $pathToFile);
    }

    public function get($fileCode): string
    {
        echo __METHOD__, '<br>';
        return '';
    }
}