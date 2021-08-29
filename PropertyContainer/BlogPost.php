<?php

require('PropertyContainer.php');

class BlogPost extends PropertyContainer
{
    private $title;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($value)
    {
        $this->title = $value;
    }
}
