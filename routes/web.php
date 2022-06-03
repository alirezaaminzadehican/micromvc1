<?php
use App\Core\Routing\Route;



Route::get('/null');

Route::add(['get','post'],'/a',function(){
    echo "welcome";
});

Route::post('/b',function(){
    echo "save ok";
});

Route::put('/c',['Controller','Method']);

Route::get('/d','Controller@Method');