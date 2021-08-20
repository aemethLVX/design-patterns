<?php

require ('BlogPost.php');

$blogPost = new BlogPost();
$blogPost->setTitle('Laravel Barcode generation tutorial');

$blogPost->addProperty('desc', 'Some text');
$blogPost->addProperty('category', 'IT');
$blogPost->addProperty('date', '01.01.2000');
$blogPost->deleteProperty('date');

$allProperties = $blogPost->getAllProperties();
var_dump($allProperties);