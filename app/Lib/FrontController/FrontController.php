<?php 

namespace Lib\FrontController;

class FrontController
{
	private $routes;
	private $routeDefault = 'home';

	public function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}

	public function setRouteDefault(string $route)
	{
		$this->routeDefault = $route;
	}

	public function run()
	{
		$r = $_GET['r'] ?? $this->routeDefault;

		$this->validateRoute($r);
	}

	private function validateRoute(string $r)
	{
		$r = explode('/', $r);
		$id = null;

		// $r = user/edit/10 - user/edit/{id}
		// $id = 10
		if (isset($r[2]) && is_numeric($r[2])) {
			$id = $r[2];
			$r = $r[0] . '/' . $r[1] . '/{id}';
		} else {
			$r = implode('/', $r);
		}
		
		if (array_key_exists($r, $this->routes)) {
			$route = $this->routes[$r];
			$this->callController($route,$id);
		} else{
			die('Invalid Route');
		}
	}

	private function callController(string $route,int $id = null)
	{
		$route = explode('@', $route);

		$controller = $route[0] ?? 'home';

		$action = $route[1] ?? 'index';

		$controller = 'Controller\\' . ucfirst($controller);

		$objController = new $controller();

		$objController->$action($id);
	}
}