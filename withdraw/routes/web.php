<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/withdraw','UserController@index'); //get all users

$router->get('/guser/{id}', 'UserController@show'); // get user by id

$router->post('/auser', 'UserController@add'); // create new user record

$router->put('/uuser/{id}', 'UserController@up'); // update user record

$router->delete('/duser/{id}', 'UserController@del'); // delete record
