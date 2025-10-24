<?php

namespace Core;

class Router
{

    protected $_routes = [];

    public function add($path,$controller,$method) {
        $this->_routes[] = [
            "path" => $path,
            "controller" => $controller,
            "method" => $method
        ];
    }

    public function get($path, $controller)
    {

        $this->add($path,$controller, "GET");
    }
    public function post($path, $controller)
    {

        $this->add($path,$controller, "POST");
    }
    public function update($path, $controller)
    {

       $this->add($path,$controller, "UPDATE");
    }
    public function delete($path, $controller)
    {

        $this->add($path,$controller, "DELETE");
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
