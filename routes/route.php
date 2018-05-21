<?php 

$routes = [];

$routes['home'] = 'HomeController@Index';

$routes['user'] = 'UserController@Index';
$routes['user/new'] = 'UserController@New';
$routes['user/create'] = 'UserController@Create';
$routes['user/edit/{id}'] = 'UserController@Edit';
$routes['user/update'] = 'UserController@Update';
$routes['user/delete'] = 'UserController@Delete';

$routes['post'] = 'PostController@Index';
$routes['post/new'] = 'PostController@New';
$routes['post/create'] = 'PostController@Create';
$routes['post/edit/{id}'] = 'PostController@Edit';
$routes['post/update'] = 'PostController@Update';
$routes['post/delete'] = 'PostController@Delete';

$routes['login'] = 'LoginController@index';
$routes['login/login'] = 'LoginController@login';
$routes['logout'] = 'LoginController@logout';

// return $routes;