<?php
namespace App\Core;

use App\Utilities\Url;

class StupidRouter{
    private $routes;
    public function __construct(){
        $this->routes = [
            '/' => '/home/index.php',
            '/hasan/blue' => 'colors/blue.php',
            '/hasan/red' => 'colors/red.php',
        ];
    }

    public function run(){
        $current_route = Url::current_route();
        foreach ($this->routes as $route => $view) {
            if($current_route == $route){
                include BASE_PATH . "views/$view";
            }
        }
    }
}