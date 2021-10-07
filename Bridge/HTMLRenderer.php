<?php

namespace Bridge;

class HTMLRenderer implements Renderer
{
    public function renderHeader(): string
    {
        return "<html><body>";
    }

    public function renderTitle(string $title): string
    {
        return "<h1>$title</h1>";
    }

    public function renderBody(string $body): string
    {
        return "<section>$body</section>";
    }

    public function renderFooter(): string
    {
        return "</body></html>";
    }

    public function renderParts(array $parts): string
    {
        return implode("\n", $parts);
    }
}