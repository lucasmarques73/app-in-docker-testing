<?php

require_once 'doctrine.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;

$entityManager = getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);