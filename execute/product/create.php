<?php
require_once "bootstrap.php";

$product = new Product();
$product->setName($argv[1]);

$em->persist($product);
$em->flush();

echo "Created Product with ID " . $product->getId() . "\n";