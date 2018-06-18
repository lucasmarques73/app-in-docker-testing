<?php 

require_once '../config/bootstrap.php';

require_once '../config/doctrine.php';

require_once '../routes/route.php';

session_start();

use Lib\FrontController\FrontController;

$app = new FrontController();

$app->setRoutes($routes);
$app->run();
