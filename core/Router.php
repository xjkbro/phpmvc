<?php

/**
 * Class Router
 * @author Jason-Kyle De Lara
 * @package app\core
 */

namespace app\core;

class Router
{
    public Request $request;
    protected array $routes = [];
    public function __construct(\app\core\Request $request)
    {
        $this->request = $request;
    }
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            echo "notfound";
        }
        echo call_user_func($callback);
    }
}
