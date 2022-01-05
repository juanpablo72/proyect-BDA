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

Auth::routes();
//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registrar', function () {
    return view('registro');
});
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'getuser'])->middleware('can:admin.index')->name('admin');

Route::get('/buscar', function () {
    return view('buscar');
});
Route::get('/filtrar', function () {
    return view('filtrar');
});
Route::get('/lista', [App\Http\Controllers\HomeController::class, 'index1'])->middleware('can:admin.index')->name('lista');

Route::post('/buscarest', [App\Http\Controllers\datos::class, 'buscarest'])->name('buscarest');

Route::get('/eliminar/{id}', [App\Http\Controllers\HomeController::class, 'eliminar'])->middleware('can:admin.index')->name('eliminar');

Route::post('/agregaruser', [App\Http\Controllers\HomeController::class, 'agregar'])->middleware('can:admin.index')->name('agregaruser');
Route::get('/nuevo', [App\Http\Controllers\HomeController::class, 'nuevo'])->middleware('can:admin.index')->name('nuevo');

Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');

Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::post('/registroestudent', [App\Http\Controllers\datos::class, 'registro'])->name('registrodatos');
Route::post('/viewall', [App\Http\Controllers\datos::class, 'mostrar'])->name('viewall');

Route::get('/eliminarestudiante/{ciest}', [App\Http\Controllers\HomeController::class, 'eliminarestudiante'])->name('eliminarestudiante');
Route::get('/vermas/{ciest}', [App\Http\Controllers\HomeController::class, 'vermas'])->name('vermas');
Route::get('/modificar/{ciest}', [App\Http\Controllers\HomeController::class, 'modificar'])->name('modificar');
Route::post('/cambiodatos/{id}', [App\Http\Controllers\HomeController::class, 'cambiodatos'])->name('cambiodatos');
Route::get('/todoAS', [App\Http\Controllers\HomeController::class, 'todoAS'])->name('todoAS');
