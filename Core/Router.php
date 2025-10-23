<?php

namespace Core;

class Router
{

    protected $_routes = [];

    public function get($path, $controller)
    {

        $this->_routes[] = [
            "path" => $path,
            "controller" => $controller,
            "method" => "GET"
        ];
    }
    public function POST($path, $controller)
    {

        $this->_routes = [
            "path" => $path,
            "controller" => $controller,
            "method" => "POST"
        ];
    }
    public function update($path, $controller)
    {

        $this->_routes = [
            "path" => $path,
            "controller" => $controller,
            "method" => "UPDATE"
        ];
    }
    public function delete($path, $controller)
    {

        $this->_routes = [
            "path" => $path,
            "controller" => $controller,
            "method" => "DELETE"
        ];
    }

    public function route($path, $method) {
        foreach($this->_routes as $route) {
            if($route['path'] === $path && $route['method'] === $method) {
                return require base_path($route['controller']);
            }
        }
        dd("no such file 404");
    }


    // get routes

    // 

}
