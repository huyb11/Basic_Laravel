<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function Dashboard(){

        $countCategory = DB::table("categories")->count();
        $countProduct= DB::table("products")->count();
        $countUser = DB::table("users")->count();

        
        return view('admin.dashboard',compact('countCategory','countProduct','countUser'));

    }
}
