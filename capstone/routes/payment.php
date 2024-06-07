<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payment\Paymentlink;


Route::resource('/payments', Paymentlink::class);
Route::post('/payment-store', [Paymentlink::class, 'store'])->name('payment-store');