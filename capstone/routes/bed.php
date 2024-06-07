
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bed\BedLink;

Route::resource('/beds', BedLink::class);
Route::post('/bed-store', [BedLink::class, 'store'])->name('bed-store');
