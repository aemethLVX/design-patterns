<?php

namespace Bridge;

class SimplePage extends Page
{
    protected $title;

    public function __construct(Renderer $renderer, string $title)
    {
        parent::__construct($renderer);
        $this->title = $title;
    }

    public function view(): string
    {
        return $this->renderer->renderTitle($this->title);
    }
}