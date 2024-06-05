<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
class LinkController extends Controller
{
    public function index()
     {
        return view("page.index");
    }

    public function invoice()
    {
        $tenants = Tenant::all();
       return view("invoice.invoice", compact('tenants'));
   }
}
