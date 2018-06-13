<?php

require_once "bootstrap.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$paths = [
    __DIR__ . '/Entity'
];

$isDevMode = true;

$dbParams = [
    'driver' => 'pdo_'.getenv('DBDRIVER'),
    'user' => getenv('DBUSER'),
    'password' => getenv('DBPASS'),
    'dbname' => getenv('DBNAME')
];

$config = Setup::createAnnotationMetadataConfiguration($paths,$isDevMode);
$entityManager = EntityManager::create($dbParams,$config);

return ConsoleRunner::createHelperSet($entityManager);