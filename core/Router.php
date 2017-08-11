<?php

namespace App\Core;

class Router
{

	public $routes = [
     
     'GET' => [],
     'POST' => [],
     'PATCH' => [],
     'DELETE' => []

	];

	public static function load($file)
	{

		$router = new static;
		require $file;
		return $router;
	}

	public function get($uri,$controller)
	{

		$this->routes['GET'][$uri] = $controller;

	}

	public function post($uri,$controller)
	{

		$this->routes['POST'][$uri] = $controller;
		
	}

	public function patch($uri,$controller)
	{

		$this->routes['PATCH'][$uri] = $controller;
	}

	public function delete($uri,$controller)
	{

		$this->routes['DELETE'][$uri] = $controller;
	}

	public function parseUri($uri){

		return preg_replace("|([0-9]+)(?=[^\/]*)|", "{id}", $uri);

	}

	public function direct($uri,$requestType)
	{

        $id = explode('/', $uri);
        $uri = $this->parseUri($uri);

		if(! array_key_exists($uri, $this->routes[$requestType]))
		{

        throw new \Exception("No Routes Define for this URI");

		}

		$params = explode('@', $this->routes[$requestType][$uri]);

		if(isset($id[1]))
		{
			$params[] = $id[1];
		}
		

		$this->callAction(
               
               ...$params
			);
	}

	protected function callAction($controller,$action, $param = [])
	{
		
		$controller = "App\\Controllers\\{$controller}";
		$controller = new $controller;

		if(! method_exists($controller,$action))
		{

            throw new \Exception("{$controller} Method not Exists {$action} action");
            
		}

		if($param)
		{

			return $controller->$action($param);
		}

		return $controller->$action();

	}

}