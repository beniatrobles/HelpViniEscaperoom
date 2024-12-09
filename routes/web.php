<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/prueba', [AdminController::class, 'index'])->name('admin.prueba');

Route::get('/{any}', function () {
    return view('welcome'); // Vue se monta aquí
})->where('any', '.*');

