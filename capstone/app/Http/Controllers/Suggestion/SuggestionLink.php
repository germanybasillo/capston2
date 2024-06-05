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

    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|string',
                'suggestion' => 'required|string',
                'date' => 'required|string',
                'reply' => 'required|string',
                'status' => 'required|string'
            ]
        );
        $suggestion= new Suggestion($request->all());
        $suggestion->save();
        return redirect('/suggestions')->with('status',"Suggestion Data Has Been inserted");
    }
}
