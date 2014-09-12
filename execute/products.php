<?php

require_once "bootstrap.php";

$dql = "SELECT p.id, p.name, count(b.id) AS openBugs FROM Bug b " .
        "JOIN b.products p WHERE b.status = 'OPEN' GROUP BY p.id";
$bugs = $em->createQuery($dql)->getScalarResult();

foreach ($bugs as $bug) {
    echo $bug['name'] . " has " . $bug['openBugs'] . " open bugs!\n";
}