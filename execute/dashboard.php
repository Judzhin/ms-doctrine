<?php

require_once "bootstrap.php";

$dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r " .
        "WHERE b.status = 'OPEN' AND (e.id = ?1 OR r.id = ?1) ORDER BY b.created DESC";

$bugs = $em->createQuery($dql)
        ->setParameter(1, $argv[1])
        ->setMaxResults(15)
        ->getResult();

echo "You have created or assigned to " . count($bugs) . " open bugs:\n\n";

foreach ($bugs AS $bug) {
    echo $bug->getId() . " - " . $bug->getDescription() . "\n";
}