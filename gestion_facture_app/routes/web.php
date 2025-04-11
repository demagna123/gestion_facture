<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/factures',FactureController::class);
Route::resource('/clients',ClientController::class);
Route::resource('/articles',ArticleController::class);
Route::resource('/categories',CategorieController::class);