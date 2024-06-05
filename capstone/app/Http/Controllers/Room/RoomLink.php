<?php

namespace App\Http\Controllers\Room;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomLink extends Controller
{
    public function index(): View
    {
        return view('roomlink.room', [
            'rooms' => Room::all()
        ]);
    }

    public function create(): View
    {
        return view('roomlink.addroom');
    }

    public function show(string $id): View
    {
        return view('roomlink.editroom', [
            'room' => Room::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
    $request->validate([
        'number' => 'required|string|unique:rooms,number',
        'description' => 'required|string',
        'roompic' => 'required',
    ], [
        'number.unique' => 'The number has already been taken.',
    ]);

    $room = new Room($request->all());
    
    $room->save();
    return redirect('/rooms')->with('status', "Room Data Has Been inserted");
    }

    public function update(Request $request, $id){
    
        $request->validate(
            [
                'number' => 'required|string|unique:rooms,number,'.$id,
                'description' => 'required|string',
                'roompic' => 'required'
            ],
            [
                'number.unique' => 'The number has already been taken.',
            ]);
        
        $room = Room::find($id);
        $room->update($request->all());
        return redirect("/rooms")->with('status', 'Room '.$request['email'].' was updated successfully.');
    }

    public function destroy($id)
    {
      $room = Room::find($id);
      $room->delete();
      return redirect("/rooms")
        ->with('success', 'Room '.$id.'info deleted successfully');
    }
}
