<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Feeds;
use App\User;

class newsfeedController extends Controller
{
    public function show($id){
        if(Auth::id() == $id){
            $profile = User::where('id',$id)->get();
            return view('client.newsfeed',['profile'=>$profile]);
        }else{
            $id = Auth::id();
            return redirect()->route('newsfeed',['id'=> $id]);
        }
    }
}
