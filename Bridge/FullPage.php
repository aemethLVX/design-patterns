<?php

namespace Bridge;

class FullPage extends Page
{
    protected $title;
    protected $body;

    public function __construct(Renderer $renderer, string $title, string $body)
    {
        parent::__construct($renderer);
        $this->title = $title;
        $this->body = $body;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->title),
            $this->renderer->renderBody($this->body),
            $this->renderer->renderFooter()
        ]);
    }
}