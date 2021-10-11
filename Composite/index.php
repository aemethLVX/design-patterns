<?php

require_once ('../vendor/autoload.php');

use Composite\{Branch, Leaf};

$root = new Branch("root");

$root->add(new Leaf("Leaf A"));
$root->add(new Leaf("Leaf B"));

$comp = new Branch("Branch X");

$comp->add(new Leaf("Leaf XA"));
$comp->add(new Leaf("Leaf XB"));
$root->add($comp);
$root->add(new Leaf("Leaf C"));

$leaf = new Leaf("Leaf D");
$root->add($leaf);
$root->remove($leaf);

$root->display();
