<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RubricaController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FechasController;

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

Route::resource('formulario',FormularioController::class);
Route::resource('fechas',FechasController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard',function(){return view('dashboard');})->name('dashboard');
    // RUBRICAS ROUTES
    Route::get('rubricas',[RubricaController::class,'index'])->name('rubrica.index');
    Route::get('rubrica/{model}/show',[RubricaController::class,'show'])->name('rubrica.show');
    Route::get('rubrica/{model}/edit',[RubricaController::class,'edit'])->name('rubrica.edit');
    Route::get('rubrica/{rubrica}',[RubricaController::class,'create'])->name('rubrica.create');
    Route::put('rubrica/{rubrica}',[RubricaController::class,'update'])->name('rubrica.update');
    //adaptar a autorizar en users
    Route::get('users/{user}/autorizar',[UserController::class,'autorizar'])->name('users.autorizar');
    Route::get('users/{user}/denegar',[UserController::class,'denegar'])->name('users.denegar');

    //

    Route::post('rubrica/{rubrica}',[RubricaController::class,'store'])->name('rubrica.store');
    Route::delete('rubrica/{rubrica}',[RubricaController::class,'destroy'])->name('rubrica.destroy');


    Route::resource('users',UserController::class);
});

require __DIR__.'/auth.php';
