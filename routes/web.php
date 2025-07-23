<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
//pour les routes metieres
Route::get('/inscrire' , [AuthController::class , 'inscriptionUser']);
Route::post('/inscrire',[AuthController::class,'inscriptionPage']);
Route::get('/login',[AuthController::class,'connecterPage']);
Route::get('/forget',[AuthController::class,'forgetPage']);
Route::get('/reset',[AuthController::class,'reinitialisationPage']);
Route::get('/accueil',[AuthController::class,'accueilPage']);
