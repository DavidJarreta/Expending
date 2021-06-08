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

//Route::get('/createUser', [Controllers\UserController::class, 'create'] )->name('createUser');


Route::get('/listaAlbaranes', [Controllers\AlbaranesController::class, 'index'])->name('listaAlbaranes');

Route::get('/formularioCreateAlbaran', [Controllers\AlbaranesController::class, 'create'] )->name('formularioCreateAlbaran');

Route::post('/createAlbaran', [Controllers\AlbaranesController::class, 'store'] )->name('createAlbaran');

Route::delete('/deleteAlbaran/{albaran}', [Controllers\AlbaranesController::class, 'destroy'] )->name('deleteAlbaran');



Route::get('/editAlbaran/{id}', [Controllers\AlbaranesController::class, 'edit'] )->name('editAlbaran');

Route::put('/formularioEditAlbaran{id}', [Controllers\AlbaranesController::class, 'update'] )->name('formularioEditAlbaran');



Route::get('/formularioAñadir', [Controllers\MaquinasController::class, 'create'] )->name('formularioAñadir');

Route::post('/añadirMaquina', [Controllers\MaquinasController::class, 'store'])->name('añadirMaquina');

Route::get('/formularioAñadirAlimento', [Controllers\AlimentosController::class, 'create'] )->name('formularioAñadirAlimento');

Route::post('/añadirAlimento', [Controllers\AlimentosController::class, 'store'])->name('añadirAlimento');


Route::get('/formularioMeterAlimento/{id}', [Controllers\AlbaranAlimentoController::class, 'create'] )->name('formularioMeterAlimento');

Route::post('/MeterAlimento', [Controllers\AlbaranAlimentoController::class, 'store'])->name('MeterAlimento');


Route::get('/formularioCreateIncidencia', [Controllers\IncidenciasController::class, 'create'])->name('formularioCreateIncidencia');

Route::post('/createIncidencia', [Controllers\IncidenciasController::class, 'store'])->name('createIncidencia');


Auth::routes();



Route::get('/home', [App\Http\Controllers\AlbaranesController::class, 'index'])->name('home');
