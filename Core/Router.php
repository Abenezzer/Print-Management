<?php

namespace Core;

class Router
{

    protected $_routes = [];

    public function add($path, $controller, $method)
    {
        $this->_routes[] = [
            "path" => $path,
            "controller" => $controller,
            "method" => $method,
            "middlewares" => []
        ];
    }

    public function get($path, $controller)
    {

        $this->add($path, $controller, "GET");
        return $this;
    }
    public function post($path, $controller)
    {

        $this->add($path, $controller, "POST");
        return $this;
    }
    public function update($path, $controller)
    {

        $this->add($path, $controller, "PATCH");
        return $this;
    }
    public function delete($path, $controller)
    {

        $this->add($path, $controller, "DELETE");
        return $this;
    }

    public function only(array $middlewares)
    {
        $this->_routes[count($this->_routes) - 1]['middlewares'] = $middlewares;
    }

    public function route($path, $method)
    {
        foreach ($this->_routes as $route) {
            if ($route['path'] === $path && $route['method'] === $method) {
                Authorize::route($route['middlewares']);
               
                return require base_path($route['controller']);
            }
        }
        dd("no such file 404");
    }

}
