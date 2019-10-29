<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Experiences;
use App\Educations;
use Illuminate\Support\Arr;

use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function show($id){
        
        $educations = Educations::where('id_user',$id)->get();
        $experiences = Experiences::where('id_user',$id)->get();
        $profile = User::where('id',$id)->get();
        $check = User::where('id',$id)->select('type_user')->get()->toArray();
        //kiểm tra id tồn tại


        //kiểm tra trùng khớp id đăng nhập
        if(Auth::id() == $id){ //là người đăng nhập
           if(Auth::user()->type_user == 1){  //là cá nhân
            echo "p";
                return view('client.profile',
                [
                    'profile'=>$profile,
                    'experiences'=>$experiences,
                    'educations' =>$educations
                ]);
           }
           if(Auth::user()->type_user == 2){  //là công ty
            echo "pc";
            return view('client.profilecompany',
            [
                'profile'=>$profile,
                'experiences'=>$experiences,
                'educations' =>$educations
            ]);
           }
        }else{
                                //là người xem    
                    
            $c =  array_values($check[0])==(int)array($id);
            if(Arr::has($check, 'type_user.1')){  //là cá nhân
                echo "vp";
               
                var_dump ($c);
                var_dump ($check);
                return view('client.viewprofile',
                [
                    'profile'=>$profile,
                    'experiences'=>$experiences,
                    'educations' =>$educations
                ]);
            }else{
                // var_dump (Auth::user());
                // var_dump ($c);
                // var_dump ($check);
                // echo ($check->type_user);
                echo "vpc";
                return view('client.viewprofilecompany',
                    [
                        'profile'=>$profile,
                        'experiences'=>$experiences,
                        'educations' =>$educations
                    ]);
            }
            
            // if(!in_array("2",$check)){  //là công ty
                
            // }else{
                
            // }
        }
        
        
    }

    public function updateabout(Request $request){
        $id = $request->id;
        $about = $request->about;
       
       User::where('id',$id)->update(['about_yourself'=>$about]);
        
        return redirect()->route('profile',['id'=> $id]);
    }

}
