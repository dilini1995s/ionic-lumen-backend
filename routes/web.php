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
$router->post('/login', 'LoginController@login');
$router->post('/register', 'FarmerController@register');
$router->post('/finn', 'CheckController@fin');
$router->post('/policy', 'LandController@add');
$router->get('/user', [ 'uses' => 'FarmerController@get_user']);
$router->get('/detail/{va}', [ 'uses' => 'PolicyController@showPolicy']);
$router->get('/de/{va1}/{va2}', [ 'uses' => 'PolicyfarmerController@showfarmersPolicy']);
$router->get('/us', [ 'uses' => 'CompanyController@get_us']);
