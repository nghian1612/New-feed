<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class companiesController extends Controller
{
    public function show(){
        $companies = User::where('type_user','2')->get();
        return view('client.companies',['companies'=>$companies]);
    }
}
