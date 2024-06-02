<?php

use App\Http\Controllers\Auth\LoginRegister;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginRegister::class, 'login'])->name('login');
Route::post('/validate_login', [LoginRegister::class, 'validate_login'])->name('validate_login');
Route::get('/register', [LoginRegister::class, 'register'])->name('register');
Route::post('/validate_register', [LoginRegister::class, 'validate_register'])->name('validate_register');