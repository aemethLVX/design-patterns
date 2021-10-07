<?php

namespace Bridge;

interface Renderer
{
    public function renderHeader(): string;

    public function renderTitle(string $title): string;

    public function renderBody(string $title): string;

    public function renderFooter(): string;

    public function renderParts(array $parts): string;
}