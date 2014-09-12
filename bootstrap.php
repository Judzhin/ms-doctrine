<?php

$argv = $_SERVER['argv'];

if (!class_exists("Doctrine\Common\Version", false)) {
    require_once "doctrine.php";
}

require_once "entities/Bug.php";
require_once "entities/Product.php";
require_once "entities/User.php";

require_once "repositories/BugRepository.php";