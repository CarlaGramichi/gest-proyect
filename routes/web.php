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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });

    Route::get('/home', function () {
        return view('dashboard.index');
    })->name('home');

    Route::resource('proyect', 'ProyectoController');
    Route::resource('responsable', 'ResponsableController');
    Route::resource('task', 'TareaController');
    Route::get('task/create/{proyect}', 'TareaController@create')->name('task.proyect');
    Route::get('task/{task}/edit/{proyect}', 'TareaController@edit')->name('task.edit');
//    Route::get('task/{task}/destroy/{proyect}', 'TareaController@destroy')->name('task.destroy');
    Route::get('myproyect', 'ProyectoController@myproyect')->name('proyect.myproyect');

});



Auth::routes();


