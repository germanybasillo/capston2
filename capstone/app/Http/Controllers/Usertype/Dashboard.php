<?php

namespace App\Http\Controllers\Usertype;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Room;

class Dashboard extends Controller
{
  public function landlord(){
    
  return view("dashboard.landlord",[
    'tenants' => Tenant::count(),
    'rooms' => Room::count(),

  ]);
  
  }
  public function tenant(){
    
    }
}