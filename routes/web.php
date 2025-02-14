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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('agenda',  ['uses' => 'AgendaController@show']);
    $router->get('agenda/{id}', ['uses' => 'AgendaController@show']);
    $router->post('agenda', ['uses' => 'AgendaController@add']);
    $router->delete('agenda/{id}', ['uses' => 'AgendaController@delete']);
    $router->put('agenda/{id}', ['uses' => 'AgendaController@edit']);
});
