<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'ProjectsController@create');
Route::get('/lists', 'ProjectsController@lists');
Route::get('/attribute_and_class_name_binding', 'ProjectsController@attribute');
Route::get('/components', 'ProjectsController@components');
Route::get('/components1', 'ProjectsController@components1');
Route::get('/practicalcomponents', 'ProjectsController@practicalcomponents');


// CODECHIEF
Route::get('vuejs/form', 'VueJSController@index');
Route::post('vuejs/form', 'VueJSController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
