<?php
namespace App\Middleware;

use App\Middleware\Contract\MiddlewareInterface;
use hisorange\BrowserDetect\Parser as Browser;

class BlockIE implements MiddlewareInterface{
    public function handle(){
        global $request;
        if (Browser::isIE()) {
            die('IE Blocked!');
        }
    }
}