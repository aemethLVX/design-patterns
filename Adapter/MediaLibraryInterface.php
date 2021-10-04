<?php

namespace Adapter;

interface MediaLibraryInterface
{
    public function upload($pathToFile): string;

    public function get($fileCode): string;
}