<?php

require_once "bootstrap.php";

$theReporterId = $argv[1];
$theDefaultEngineerId = $argv[1];
$productIds = explode(",", $argv[3]);

$reporter = $em->find("User", $theReporterId);
$engineer = $em->find("User", $theDefaultEngineerId);
if (!$reporter || !$engineer) {
    echo "No reporter and/or engineer found for the input.\n";
    exit(1);
}

$bug = new Bug();
$bug->setDescription("Something does not work!");
$bug->setCreated(new DateTime("now"));
$bug->setStatus("OPEN");

foreach ($productIds AS $productId) {
    $product = $em->find("Product", $productId);
    $bug->assignToProduct($product);
}

$bug->setReporter($reporter);
$bug->setEngineer($engineer);

$em->persist($bug);
$em->flush();

echo "Your new Bug Id: " . $bug->getId() . "\n";