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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/list" , function (){
	return view("list/index");
});
Route::get('/', function () {
    return view('table');
});

Route::get('/covid19', 'Covid19Controller@index');
Route::get('/covid19/{id}', 'Covid19Controller@show');
Route::get("/covid19/create", "Covid19Controller@create");
Route::get("/covid19/{id}/edit", "Covid19Controller@edit");