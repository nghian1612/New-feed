<?php


namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class loginController extends Controller
{
    public function getloginClient(){
        if (Auth::check()) {
            $id = Auth::id();
            return redirect()->route('newsfeed',['id'=> $id]);
        }else{
            return view('client.login');
        }
    }

    public function postloginClient(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32'
            ],
            [
            'email.required' =>'Bạn chưa nhập Email',
            'password.required'  =>'Bạn chưa nhập Pasword',
            'password.min' =>'Email hoặc Password không hợp lệ',
            'password.max' =>'Email hoặc Password không hợp lệ'
            ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $id = Auth::id();
            return redirect()->route('newsfeed',['id'=> $id]);
        }else{
            return redirect('/')->with('notification','Email hoặc Password không hợp lệ');
        }

    }

    public function getlogoutClient(){
        Auth::logout();
        return redirect('/');
    }


    public function register(Request $request){
        $this->validate($request,[
            'username'=>'required | max:70',
            'email'=>'required | email',
            'password'=>'required|min:3|max:32',
            'repassword'=>'required|same:password',
            'typeuser'=> 'required|in:1,2'
        ],[
            'username.required' => 'Bạn chưa nhập tên',
            'username.max' => 'Tên không hợp lệ',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu không hợp lệ',
            'password.max' => 'Mật khẩu không hợp lệ',
            'repassword.required'=>'Bạn chưa xác nhận lại mật khẩu',
            'repassword.same'=>'Mật khẩu không trùng khớp',
            'typeuser.required'=>'Bạn chưa chọn loại tài khoản'
        ]);
            $arr_user = User::select('email')->get();
            $a = 0;
            foreach($arr_user as $arr){
                global $a;
                $a= levenshtein($request->email,$arr->email);
                if($a == 0){
                    break;
                }
            }
            if($a == 0){
                return redirect('/register')->with('notification','Email đã được sử dụng');
            }else{
                $user = new User;
                $user -> name = $request->username;
                $user -> email = $request->email;
                $user -> password = bcrypt($request->password);
                $user -> type_user = $request->typeuser;


                if($request->typeuser ==  1 ){
                    $user -> avatar = 'user-defaut.png';
                }else{
                    $user -> avatar = 'company-defaut.png';
                }
                $user -> save();

                Auth::attempt(['email'=>$request->email, 'password'=>$request->password]);
                $id = Auth::id();
                return redirect()->route('newsfeed',['id'=> $id]);
                
            }
                    
        }

        
}
