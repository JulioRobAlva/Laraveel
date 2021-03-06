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
    return view('auth/login');
});
Route::resource('alumno', 'AlumnoController');
Route::resource('tipomateria', 'TipoMateriaController');
Route::resource('materia', 'MateriaController');

Auth::routes();
Route::auth();
Route::get('/home', 'HomeController@index')->name('home');
