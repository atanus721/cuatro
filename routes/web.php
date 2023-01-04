<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;

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
    return redirect()->action([TiendaController::class, 'index']);
});

Auth::routes();

Route::resource('tiendas', App\Http\Controllers\TiendaController::class)->middleware('auth');
Route::resource('administrador', App\Http\Controllers\AdminController::class)->middleware('auth');

Route::get('administrador/{id}/dam',[App\Http\Controllers\AdminController::class,'dam'])->name('administrdor.dam')->middleware('auth');

Route::get('administrador/{admin}/tiendasid',[App\Http\Controllers\AdminController::class,'tiendasid'])->name('administrador.tiendasid')->middleware('auth');
Route::get('administrador/{admin}/tiendasdamid',[App\Http\Controllers\AdminController::class,'tiendasdamid'])->name('administrador.tiendasdamid')->middleware('auth');
Route::get('administrador/{admin}/diferenciasid',[App\Http\Controllers\AdminController::class,'diferenciasid'])->name('administrador.diferenciasid')->middleware('auth');
Route::get('administrador/{admin}/diferencias',[App\Http\Controllers\AdminController::class,'diferencias'])->name('administrador.diferencias')->middleware('auth');
Route::get('administrador/{admin}',[App\Http\Controllers\AdminController::class,'show'])->name('administrador.show')->middleware('auth');

Route::get('administrador/{admin}/dam',[App\Http\Controllers\AdminController::class,'dam'])->name('administrador.dam')->middleware('auth');
Route::get('tiendas/{id}/cruceprecios',[App\Http\Controllers\TiendaController::class,'cruceprecios'])->name('tiendas.cruceprecios')->middleware('auth');;
Route::get('tiendas/{id}/detalle',[App\Http\Controllers\TiendaController::class,'detalle'])->name('tiendas.detalle')->middleware('auth');

Route::get('tiendas/{id}/actualizar',[App\Http\Controllers\TiendaController::class,'actualizar'])->name('tiendas.actualizar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
