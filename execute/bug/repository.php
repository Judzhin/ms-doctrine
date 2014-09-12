<?php

require_once "bootstrap.php";

$bugs = $em->getRepository('Bug')->getRecentBugs();

foreach ($bugs AS $bug) {
    echo $bug->getDescription() . " - " . $bug->getCreated()->format('d.m.Y') . "\n";
    echo " Reported by: " . $bug->getReporter()->getName() . "\n";
    echo " Assigned to: " . $bug->getEngineer()->getName() . "\n";
    
    foreach ($bug->getProducts() AS $product) {
        echo " Platform: " . $product->getName() . "\n";
    }
    
    echo "\n";
}