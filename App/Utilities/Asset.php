<?php

namespace App\Utilities;

class Asset{
    public static function get(string $route){
        return $_ENV['HOST'] . 'assets/' . $route;
    }

    public static function css(string $route){
        return $_ENV['HOST'] . 'assets/css/' . $route;
    }

    public static function js(string $route){
        return $_ENV['HOST'] . 'assets/js/' . $route;
    }

    public static function image(string $route){
        return $_ENV['HOST'] . 'assets/img/' . $route;
    }


    /*
    * 
    */
    // public static function __callStatic(string $method, $arguments): string{
    //     $site = $_ENV['HOST']; 
    //     $file = $method . "/" . $arguments[0]; // Add DIR from $_ENV
    //     return (file_exists($site . $file)) ? $site . $file : null; // Replace $site with SITE_URL from $_ENV
    //     }

}