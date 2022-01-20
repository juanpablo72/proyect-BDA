<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('image', App\Http\Controllers\DocumentosController::class);
Auth::routes();
//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registrar', function () {
    return view('registro');
});
Route::get('/registro_fotografico', function () {
    return view('registro_fotografico');
});
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'getuser'])->middleware('can:admin.index')->name('admin');

Route::get('/lista', [App\Http\Controllers\HomeController::class, 'index1'])->middleware('can:admin.index')->name('lista');

Route::get('/eliminar/{id}', [App\Http\Controllers\HomeController::class, 'eliminar'])->middleware('can:admin.index')->name('eliminar');

Route::post('/agregaruser', [App\Http\Controllers\HomeController::class, 'agregar'])->middleware('can:admin.index')->name('agregaruser');
Route::get('/nuevo', [App\Http\Controllers\HomeController::class, 'nuevo'])->middleware('can:admin.index')->name('nuevo');

Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');

Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
