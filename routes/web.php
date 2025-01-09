<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BinaryController;
use App\Http\Controllers\CesarController;
use App\Http\Controllers\PartidasController;
use App\Http\Controllers\AutentificacionController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas para el Login
Route::get('/login', [AutentificacionController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AutentificacionController::class, 'login'])->name('login');
Route::post('/logout', [AutentificacionController::class, 'logout'])->name('logout');

//Rutas CRUD
//Crear Usuarios
Route::middleware(['auth'])->group(function () {
    
    Route::get('/admin/usuarios', [AdminController::class, 'index'])->name('admin.usuarios');
    Route::get('/admin/usuarios/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/usuarios', [AdminController::class, 'store'])->name('admin.store');

    // Rutas para editar un usuario
    Route::get('admin/usuarios/{id}/editar', [AdminController::class, 'edit'])->name('admin.usuarios.edit');
    Route::put('admin/usuarios/{id}', [AdminController::class, 'update'])->name('admin.usuarios.update');

    // Rutas para ver y eliminar usuarios
    Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/admin/{id}/confirmarEliminacion', [AdminController::class, 'confirmarEliminacion'])->name('admin.confirmarEliminacion');
    Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

// Otras rutas relacionadas con autenticación
Route::post('/register', [AuthController::class, 'registro']);
//PARTIDAS
Route::post('/crear-partida', [PartidasController::class, 'crearPartida']);
Route::put('/actualizar-partida/{id}', [PartidasController::class, 'actualizarPartida']);
Route::get('/partida-activa/{idUsuario}', [PartidasController::class, 'obtenerPartidaActiva']);
//CIFRADO CESAR
Route::post('/cesar', [CesarController::class, 'translate']);
//cifrado binario
Route::post('/binary', [BinaryController::class, 'translate']);


Route::get('/{any}', function () {
    return view('welcome'); // Vue se monta aquí
})->where('any', '.*');


