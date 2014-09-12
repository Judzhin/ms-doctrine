<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$paths = array('entities/');
$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

$dbParams = array(
    'dbname' => 'doctrine',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
    // 'driver' => 'pdo_sqlite',
    // 'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($dbParams, $config);