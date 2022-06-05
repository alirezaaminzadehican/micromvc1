<?php
namespace App\Core\Routing;

use App\Core\Request;

class Router{
    private $routes;
    private $request;
    private $current_route;
    const BASE_CONTROLLER = 'App\Controllers\\';

    public function __construct(){
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;
        // var_dump($this->current_route);

    }

    public function findRoute(Request $request){
        // echo $request->method() . " " . $request->uri();
        foreach($this->routes as $route){
            if (in_array ($request->method(), $route['methods']) && $request->uri() == $route['uri']){
                return $route;
            }
        }
        return null;
    }

    public function dispatch404(){
        header("HTTP/1.0 404 NOT Found");
        view('errors.404');
        die();
    }

    public function run(){
        # 405 : indivual request method
        # if ($this->invalidRequest($this->request)){
        #    $this->dispatch405();
        #}

        # 404 : uri not file_exists
        if(is_null ($this->current_route)){
            $this->dispatch404();
        }
        $this->dispatch($this->current_route);
    }
    private function dispatch($route){
        $action = $route['action'];
        # action :    null
        if(is_null($action) || empty($action)){
            return;
        }

        # action :  closure
        if(is_callable($action)){
            $action();
            // call_user_func();
        }

        # action :  Controller@method
        if(is_string($action)){
            $action = explode('@', $action);
        }

        # action : ['Controller','method']
        if(is_array($action)){
            $class_name = self::BASE_CONTROLLER . $action[0];
            $method = $action[1];
            if(!class_exists($class_name)){
                throw new \Exception("Class $class_name Not Exists!");
            }
            $controller = new $class_name;
            
            if(!method_exists($controller, $method)){
                throw new \Exception("method $method Not Exists in class $class_name!");
            }
            $controller->{$method}();
        }
        

    }
}