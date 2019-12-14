<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class adminLoginController extends Controller
{
    public function getloginAdmin(){
        if (Auth::check()) {
            $id = Auth::id();
            return redirect()->route('usermanager');
        }else{
            return view('admin.login');
        }
    }

    public function postloginAdmin(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'password'=>'required|min:3|max:32',
            ],
            [
            'name.required' =>'Bạn chưa nhập tên tài khoản',
            'password.required'  =>'Bạn chưa nhập Pasword',
            'password.min' =>'Email hoặc Password không hợp lệ',
            'password.max' =>'Email hoặc Password không hợp lệ'
            ]);
        if(Auth::attempt(['name'=>$request->name, 'password'=>$request->password, 'type_user' => '3'])){
            $user = Auth::user();
           
            return redirect()->route('usermanager');
        }else{
            return redirect('/back')->with('notification','Email hoặc Password không hợp lệ');
        }
    }
    public function getlogoutAdmin(){
        Auth::logout();
        return redirect('/back');
    }
}
