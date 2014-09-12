<?php

require_once "bootstrap.php";

$bug = $em->find("Bug", (int) $argv[1]);

echo "Bug: " . $bug->getDescription() . "\n";

// Accessing our special public $name property here on purpose:
echo "Engineer: " . $bug->getEngineer()->getName() . "\n";