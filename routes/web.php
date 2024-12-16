<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/usuarios', [AdminController::class, 'index'])->name('admin.usuarios');
Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');
Route::get('/admin/{id}/confirmarEliminacion', [AdminController::class, 'confirmarEliminacion'])->name('admin.confirmarEliminacion');
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

Route::post('/register', [AuthController::class, 'registro']);
Route::get('/{any}', function () {
    return view('welcome'); // Vue se monta aquí
})->where('any', '.*');

