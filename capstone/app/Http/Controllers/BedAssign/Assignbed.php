<?php

namespace App\Http\Controllers\BedAssign;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Assign;
use App\Models\Tenant;
use App\Models\Room;
use App\Models\Bed;
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
        $tenants = Tenant::all();
        $rooms = Room::all();
        $beds = Bed::all();
        return view('bedassign.addassign', compact('assigns', 'tenants','rooms','beds'));
    }
    
    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|string',
                'room_no' => 'required|string',
                'bed_no' => 'required|string',
                'date_start' => 'required|string',
                'due_date' => 'required|string'
            ]
        );
        $assign= new Assign($request->all());
        $assign->save();
        return redirect('/assigns')->with('status',"Bed-Management Data Has Been inserted");
    }


}

