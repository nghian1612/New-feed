<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class allprofileController extends Controller
{
    public function show(){
        $users = User::where('type_user','1')->get();
        return view('client.allprofile',['users'=>$users]);
    }
}
