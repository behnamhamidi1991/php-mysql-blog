<?php

$router->get('/', 'HomeController@index');
$router->get('/blog', 'BlogController@index');
$router->get('/blog/create', 'BlogController@create');
$router->get('/post', 'BlogController@show');

