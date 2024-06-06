<?php

namespace App\Http\Controllers\Bill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Bill;
class Billlink extends Controller
{
    public function index(): View
    {
        return view('billlink.utilitybill', [
            'bills' => Bill::all() 
        ]);
    }

    public function create(): View
    {

        return view('billlink.addbill');
    }
    
    public function store(Request $request)
    {
        $request->validate(
            [
                'bill' => 'required|string',
                'payable' => 'required|string'
            ]
        );
        $bill= new Bill($request->all());
        $bill->save();
        return redirect('/bills')->with('status',"Bills Data Has Been inserted");
    }

    public function destroy($id)
  {
    $bill = Bill::find($id);
    $bill->delete();
    return redirect("/bills")
      ->with('success', 'Bill '.$id.'info deleted successfully');
  }


}
