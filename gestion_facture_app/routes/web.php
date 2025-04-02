<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\ArticleController;
use app\http\Controllers\FactureController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/factures',FactureController::class);
Route::resource('/clients',ClientController::class);
Route::resource('/articles',ArticleController::class);
Route::resource('/categories',CategorieController::class);