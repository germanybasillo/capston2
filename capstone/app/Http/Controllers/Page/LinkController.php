<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Assign;
use App\Models\Payment;
class LinkController extends Controller
{
    public function index()
     {
        return view("page.index");
    }

    public function invoice()
    {
        $tenants = Tenant::all();
        $assigns = Assign::all();
       return view("page.invoice", compact('tenants','assigns'));
   }

   public function notice()
   {
    $tenants = Tenant::all();
      return view("page.notice", compact('tenants'));
  }

  public function sms()
  {
    $tenants = Tenant::all();
     return view("page.sms", compact('tenants'));
 }

 public function income()
  {
   
     return view("page.incomereport");
 }
 
 
 public function history()
 {
     $payments = Payment::all();
     return view('page.payment-history',compact('payments'));
 }

 public function collect()
  {
   
     return view("page.collectibles");
 }

}
