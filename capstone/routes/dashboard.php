<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usertype\Dashboard;

Route::get('/landlord', [Dashboard::class, 'landlord'])->name('landlord');
Route::get('/tenant', [Dashboard::class, 'tenant'])->name('tenant');