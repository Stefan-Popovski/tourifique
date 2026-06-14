<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, "form"]);
Route::post('/register', [AuthController::class, "store"])->name("register");

Route::get("quiz", [AuthController::class, "quiz"])->name("quiz");

Route::get('/suppliers', [AuthController::class, "suppliersForm"])->name("supppliers");


