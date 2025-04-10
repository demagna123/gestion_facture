<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ArticleController;
use App\http\Controllers\FactureController;
use App\http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/factures',FactureController::class);
Route::resource('/clients',ClientController::class);
Route::resource('/articles',ArticleController::class);
Route::resource('/categories',CategorieController::class);