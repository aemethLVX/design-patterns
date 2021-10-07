<?php

namespace Bridge;

class JSONRenderer implements Renderer
{
    public function renderHeader(): string
    {
        return '';
    }

    public function renderTitle(string $title): string
    {
        return '"title": "' . $title . '"';
    }

    public function renderBody(string $body): string
    {
        return '"body": "' . $body . '"';
    }

    public function renderFooter(): string
    {
        return '';
    }

    public function renderParts(array $parts): string
    {
        return implode("\n", $parts);
    }
}