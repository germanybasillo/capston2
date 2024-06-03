<?php

namespace App\Http\Controllers\Usertype;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
  public function landlord(){
  return view("dashboard.landlord");
  }
  public function tenant(){
    return view("dashboard.tenant");
    }
}
