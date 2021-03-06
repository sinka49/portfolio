<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('/projects', 'App\Http\Controllers\Api\ProjectsController@index');
    $api->post('/contact',  'App\Http\Controllers\Api\ContactFormController@sendForm');
});


Route::get('/{vue_capture?}', function () {
    return view('index');

})->where('vue_capture', '[\/\w\.-]*');