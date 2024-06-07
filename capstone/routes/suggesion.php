
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Suggestion\SuggestionLink;


Route::resource('/suggestions', SuggestionLink::class);
Route::post('/suggestion-store', [SuggestionLink::class, 'store'])->name('suggestion-store');