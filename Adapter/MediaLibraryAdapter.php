<?php

namespace Adapter;

class MediaLibraryAdapter implements MediaLibraryInterface
{
    private $adapterObj;

    public function __construct()
    {
        $this->adapterObj = new MediaLibraryNew();
    }

    public function upload($pathToFile): string
    {
        return $this->adapterObj->addMedia($pathToFile);
    }

    public function get($fileCode): string
    {
        return $this->adapterObj->getMedia($fileCode);
    }

    public function __call($name, $arguments)
    {
        if (!method_exists($this->adapterObj, $name)) {
            throw new \Exception("Method `$name` not found");
        }

        return call_user_func_array([$this->adapterObj, $name], $arguments);
    }
}