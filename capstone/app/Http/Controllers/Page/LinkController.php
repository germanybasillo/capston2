<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Assign;
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
       return view("invoice.invoice", compact('tenants','assigns'));
   }
}
