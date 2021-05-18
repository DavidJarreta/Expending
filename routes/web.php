<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/createUser', [Controllers\UserController::class, 'create'] )->name('createUser');

Route::get('/listaAlbaranes', [Controllers\AlbaranesController::class, 'index'])->name('listaAlbaranes');

Route::get('/createAlbaran', [Controllers\AlbaranesController::class, 'create'] )->name('createAlbaran');;

Route::get('/editAlbaran', [Controllers\AlbaranesController::class, 'edit'] )->name('editAlbaran');;

Route::get('/añadirMaquina', [Controllers\MaquinasController::class, 'create'])->name('añadirMaquina');;

Route::get('/createIncidencia', [Controllers\IncidenciasController::class, 'create'])->name('createIncidencia');;


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
