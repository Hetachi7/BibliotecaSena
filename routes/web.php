<?php

use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\estudianteController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
use App\Models\estudianteModel;
use App\Models\User;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('barcode/{codigo}', [BarcodeController::class, 'generar'])->name('barcode.generar');
Route::get('codigoBarras',[userController::class,'buscarForm'])->name('buscar.estudiante');
Route::get('buscar-estudiante',[ userController::class,'buscarCodigo'])->name('estudiante-listado');
Route::get('/listado', [userController::class,'listarEstudiantes'])->name('listar.estudiantes');
Route::get('/lista_agro',[userController::class,'listaAgro'])->name('entradaAgro');
Route::get('/listaCtpi',[userController::class,'listaCtpi'])->name('EntradaCtpi');
Route::get('prueba1',[userController::class,'prueba'])->name('prueba1');
Route::get('login',[loginController::class,'Inicio'])->name('login');
Route::post('login', [loginController::class,'login']);
