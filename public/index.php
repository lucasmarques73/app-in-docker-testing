<?php 

require '../vendor/autoload.php';

require '../config/bootstrap.php';

require '../routes/route.php';

session_start();

var_dump(Lib\Db\Connection::getInstance());
die();

use Lib\FrontController\FrontController;

$app = new FrontController();

$app->setRoutes($routes);
$app->run();
