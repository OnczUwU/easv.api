<?php

use APP\Http\Controllers\DepartamentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/departamentos',[DepartaentoController::class,'obtenerDepartamentos']);
Route::get('/deptoporzona(id_zona)',[DepartaentoController::class,'obtenerDepartamentosporzona']);
Route::get('/depto/{id_zona}',[DepartaentoController::class,'obtenerDepartamento']);
Route::post('/crearDepto',[DepartaentoController::class,'/nuevoDepto']);