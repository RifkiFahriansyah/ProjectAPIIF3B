<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/fakultas',[FakultasController::class, 'index']);
Route::post('/fakultas',[FakultasController::class, 'store']);
Route::patch('/fakultas/{id}',[FakultasController::class, 'update']);
Route::delete('/fakultas/{fakultas}', [FakultasController::class, 'destroy']);

Route::post('/prodi',[ProdiController::class, 'store']);
Route::patch('/prodi/{prodi}',[ProdiController::class, 'update']);
Route::get('/prodi',[ProdiController::class, 'index']);

Route::get('/mahasiswa',[MahasiswaController::class, 'index']);
Route::post('/mahasiswa',[MahasiswaController::class, 'store']);


