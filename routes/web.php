<?php
use App\Core\Routing\Route;
use App\Middleware\BlockFirefox;
use App\Middleware\BlockIE;


Route::get('/', 'HomeController@index');


Route::get('/todo/list', 'TodoController@list',[BlockFirefox::class, BlockIE::class]);
Route::get('/todo/add', 'TodoController@add');
Route::get('/todo/remove', 'TodoController@remove');


Route::get('/archive', 'ArchiveController@index');
Route::get('/archive/articles', 'ArchiveController@articles');
Route::get('/archive/products', 'ArchiveController@products');


Route::add(['get','post'],'/a',function(){
    echo "welcome";
});

Route::get('/b',function(){
    echo "save ok";
});

Route::put('/c',['Controller','Method']);

Route::get('/d','Controller@Method');

Route::get('/post/{slug}', 'PostController@single');
