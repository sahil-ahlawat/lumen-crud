<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/posts', 'PostController@index'); 
$router->get('/post/{id}', 'PostController@read_post'); 
$router->get('/post/create', 'PostController@create_post'); 
$router->get('/post/edit/{id}', 'PostController@edit_post'); 
$router->get('/post/delete/{id}', 'PostController@delete_post'); 
