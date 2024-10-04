<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MunicipioController;
/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/user', function (Request $request) {
    return response()->json('prueba');
});*/



Route::apiResource('users', UserController::class);
Route::get('/municipios', [MunicipioController::class, 'index']);
Route::post('/insert-data', [MunicipioController::class, 'store']);
Route::get('/zonas', [MunicipioController::class, 'zonas']);
Route::get('/categorias', [MunicipioController::class, 'categorias']);
Route::get('/regiones', [MunicipioController::class, 'regiones']);
Route::get('/carpetas', [MunicipioController::class, 'carpetas']);
Route::get('/audiencias', [MunicipioController::class, 'audiencias']);
Route::get('/delitos', [MunicipioController::class, 'delitos']);
Route::get('/conclusionA', [MunicipioController::class, 'conclusion']);