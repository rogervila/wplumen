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


// prevent overwriting Wordpress routes
$app->wp_routes;

$app->get('/', 'BlogController@index');

$app->get('/{slug}', 'BlogController@show');