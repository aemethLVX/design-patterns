<?php

require_once ('../vendor/autoload.php');

use Prototype\{Page, Author};

$author = new Author('John Smith');
$page = new Page("Tip of the day", "Keep calm and carry on.", $author);

$page->addComment("Nice tip, thanks!");

$draft = clone $page;

echo '<pre>'.print_r($draft, true).'</pre>';