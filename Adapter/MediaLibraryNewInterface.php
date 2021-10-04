<?php

namespace Adapter;

interface MediaLibraryNewInterface
{
    public function addMedia($pathToFile): string;

    public function getMedia($fileCode): string;
}