<?php

namespace Adapter;

class MediaLibraryNew implements MediaLibraryNewInterface
{
    public function addMedia($pathToFile): string
    {
        echo __METHOD__, '<br>';
        return '';
    }

    public function getMedia($fileCode): string
    {
        echo __METHOD__, '<br>';
        return '';
    }

    public function newMethod()
    {
        echo __METHOD__;
    }
}