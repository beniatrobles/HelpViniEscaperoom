<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/usuarios', [AdminController::class, 'index'])->name('admin.usuarios');
Route::get('/admin/usuarios/create', [AdminController::class, 'create'])->name('admin.create');  
Route::post('/admin/usuarios', [AdminController::class, 'store'])->name('admin.store');


Route::get('admin/usuarios/{id}/editar', [AdminController::class, 'edit'])->name('admin.usuarios.edit');
Route::put('admin/usuarios/{id}', [AdminController::class, 'update'])->name('admin.usuarios.update');


Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');
Route::get('/admin/{id}/confirmarEliminacion', [AdminController::class, 'confirmarEliminacion'])->name('admin.confirmarEliminacion');
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

// Otras rutas relacionadas con autenticación
Route::post('/register', [AuthController::class, 'registro']);

Route::get('/{any}', function () {
    return view('welcome'); // Vue se monta aquí
})->where('any', '.*');


