<?php
namespace App\Middleware;

// use hisorange\BrowserDetect\src\Parser as Browser;
use hisorange\BrowserDetect\Parser as Browser;

use App\Middleware\Contract\MiddlewareInterface;

class BlockFirefox implements MiddlewareInterface{
    public function handle(){
        global $request;
        echo "BlockFirefox";
        if (Browser::isFirefox()){
            die('Firefox Blocked!');
        }
    }
}