<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Tenant;
class Paymentlink extends Controller
{
    public function index(): View
    {
        return view('paymentlink.payment', [
            'payments' => Payment::all() 
        ]);
    }

    public function create(): View
    {
        $tenants = Tenant::all();
        return view('paymentlink.addpayment',compact('tenants'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|string',
                'amount' => 'required|string',
                'date' => 'required|string',
                'proof' => 'required|string',
                'remark' => 'required|string',
                'status' => 'required|string'
            ]
        );
        $payment= new Payment($request->all());
        $payment->save();
        return redirect('/payments')->with('status',"Payment Data Has Been inserted");
    }

    public function show(): View
    {
        $payments = Payment::all();
        return view('paymentlink.payment-history',compact('payments'));
    }

}
