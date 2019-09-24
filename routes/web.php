<?php
# @Date:   2019-09-17T15:43:03+01:00
# @Last modified time: 2019-09-24T14:20:27+01:00




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

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', function () {
    return "<p> Hello World <p>";
});

Route::get('/test', function () {
    return view('oisin');
});

Route::get('/hello', 'helloController@hello');
