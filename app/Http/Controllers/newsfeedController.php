<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Feeds;
use App\User;
use App\Follows;
use App\Feedskills;
use App\Comments;
use Illuminate\Support\Arr;


class newsfeedController extends Controller
{
    public function show($id){
        if(Auth::id() == $id){
            $profile = User::where('id',$id)->get();
            $follows = Follows::where('id_mid',$id)->get();
            $countFollowing = Follows::where('id_user',$id)->get()->count();
            $countFollowed = $follows->count();
            $userFollowing = Follows::where('id_user',$id)->select('id_mid')->get();
            $allfeed = Feeds::orderBy('updated_at','desc')->get();
            $feedskill = Feedskills::all();
            $comments = Comments::all();
            
            return view('client.newsfeed',[
                'profile'=>$profile,
                'follows'=>$follows,
                'countFollowing' => $countFollowing,
                'countFollowed'=> $countFollowed,
                'allfeed' =>$allfeed,
                'userFollowing'=>$userFollowing,
                'feedskill' => $feedskill,
                'comments' => $comments
            ]);
        }
        else{
            $id = Auth::id();
            return redirect()->route('newsfeed',['id'=> $id]);
        }
    }

}
