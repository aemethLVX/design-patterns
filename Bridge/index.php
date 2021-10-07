<?php

require_once ('../vendor/autoload.php');

use Bridge\{SimplePage, FullPage, HTMLRenderer, JSONRenderer};

$HTMLRenderer = new HTMLRenderer();
$JSONRenderer = new JsonRenderer();

$page = new SimplePage($HTMLRenderer, "Simple page");
echo $page->view();
$page->changeRenderer($JSONRenderer);
echo $page->view();

$page = new FullPage($HTMLRenderer, "Full page", "Body text");
echo $page->view();
$page->changeRenderer($JSONRenderer);
echo $page->view();

