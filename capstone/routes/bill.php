
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bill\Billlink;

Route::resource('/bills', Billlink::class);
Route::post('/bill-store', [Billlink::class, 'store'])->name('bill-store');
