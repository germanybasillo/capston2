
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BedAssign\Assignbed;

Route::resource('/assigns', Assignbed::class);
Route::post('/assign-store', [Assignbed::class, 'store'])->name('assign-store');