<?php

namespace App\Http\Controllers\BedAssign;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Assign;
use Illuminate\Http\Request;

class Assignbed extends Controller
{
    public function index(): View
    {
        return view('bedassign.assign', [
            'assigns' => Assign::all() 
        ]);
    }

    
    public function create(): View
    {
        $assigns = Assign::all();
        return view('bedassign.addassign', compact('assigns'));
    }

    
}

