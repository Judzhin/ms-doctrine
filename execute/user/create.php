<?php

require_once "bootstrap.php";

$user = new User();
$user->setName($argv[1]);

$em->persist($user);
$em->flush();

echo "Created User with ID " . $user->getId() . " && name " . $user->getName() . "\n";