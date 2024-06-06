<?php

namespace App\Http\Controllers\Usertype;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Room;
use App\Models\Bed;

class Dashboard extends Controller
{
  public function landlord(){

    $tenants = Tenant::count();
    $rooms = Room::count();
    $beds = Bed::count();
    
    return view("dashboard.landlord", compact('tenants', 'rooms', 'beds'));
}
  public function tenant(){
    return view("dashboard.tenant");
    
    }
}