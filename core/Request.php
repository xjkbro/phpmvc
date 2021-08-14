<?php

/**
 * Class Router
 * @author Jason-Kyle De Lara
 * @package app\core
 */

namespace app\core;

class Request
{
    protected array $routes = [];
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false)
            return $path;

        return substr($path, 0, $position);
    }
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
