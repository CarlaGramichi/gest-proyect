<?php

use App\Http\Controllers\ProyectoController;
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
    return view('dashboard.index');
});
//Route::get('proyect/{proyect}/edit', 'Admin\DashboardController@edit');
Route::resource('proyect', 'ProyectoController');
Route::resource('responsable', 'ResponsableController');
//Route::resource('login', 'LoginController');
Route::resource('task', 'TareaController');
Route::get('task/create/{proyect} ', 'TareaController@create')->name('task.proyect');
Route::get('task/{task}/edit/{proyect} ', 'TareaController@edit')->name('task.edit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
