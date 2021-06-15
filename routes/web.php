<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/user/{id}', [UserController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
