<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alta-clientes', [ClienteController::class, 'create']);
Route::get('/listar-clientes', [ClienteController::class, 'index']);
Route::post('/guardar-clientes', [ClienteController::class, 'store']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
