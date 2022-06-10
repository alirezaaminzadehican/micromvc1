<?php


include "bootstrap/init.php";


// $router = new App\Core\Routing\Router();
// $router->run();



$route = '/post/{slug}';

$route_pattern = '/^\/post\/(?<slug>[-%\w]+)$/';

$uri1 = '/post/what-is-php';
$uri2 = '/post/why-achoia-asdasjjdl';
$uri3 = '/product/course-1';

$result = preg_match($route_pattern, $uri1, $matches);
var_dump($matches);

