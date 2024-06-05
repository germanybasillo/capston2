<?php

namespace App\Http\Controllers\Bed;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bed;
use App\Models\Room;

class BedLink extends Controller
{
    public function index(): View
    {
        return view('bedlink.bed', [
            'beds' => Bed::all()
        ]);
    }

    public function create(): View
    {
        $rooms = Room::all();
        return view('bedlink.addbed', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'room_no' => 'required|string',
                'bed_no' => 'required|string',
                'daily_rate' => 'required|string',
                'monthly_rate' => 'required|string',
                'bed_status' => 'required|string',
            ]
        );
        $bed= new Bed($request->all());
        $bed->save();
        return redirect('/beds')->with('status',"Bed-Management Data Has Been inserted");
    }
}
