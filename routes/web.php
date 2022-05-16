<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RubricaController;

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

Route::group(['middleware' => 'auth'], function () {
    // RUBRICAS ROUTES
    Route::get('rubrica/{rubrica}',[RubricaController::class,'create'])->name('rubrica.create');
    Route::post('rubrica/{rubrica}',[RubricaController::class,'store'])->name('rubrica.store');

    Route::get('/dashboard',function(){return view('dashboard');})->name('dashboard');
});

require __DIR__.'/auth.php';
