<?php

namespace App\Http\Controllers\Suggestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Suggestion;
use App\Models\Tenant;

class SuggestionLink extends Controller
{
    public function index(): View
    {
        return view('suggestionlink.suggestion', [
            'suggestions' => Suggestion::all()
        ]);
    }

    public function create(): View
    {
        $tenants = Tenant::all();
        return view('suggestionlink.addsuggestion', compact('tenants'));
    }

}
