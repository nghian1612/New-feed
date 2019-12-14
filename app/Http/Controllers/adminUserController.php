<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Experiences;
use App\Educations;
use App\Externallinks;
use App\Follows;
use App\Skills;
use App\Userskills;
use App\Feeds;
use App\Types;
use App\Catalogs;
use App\Feedskills;
use App\Comments;

class adminUserController extends Controller
{
    public function getUserManager(){
        $profiles = User::where('type_user','1')->get();
        return view('admin.usermanager',['profiles'=>$profiles]);
    }
    public function getCompanyManager(){
        $profiles = User::where('type_user','2')->get();
        return view('admin.companymanager',['profiles'=>$profiles]);
    }
    public function getJobManager(){
        $feeds = Feeds::where('type_feed','1')->get();
        return view('admin.jobmanager',['feeds'=>$feeds]);
    }
    public function getNormalManager(){
        $feeds = Feeds::where('type_feed','2')->get();
        return view('admin.normalmanager',['feeds'=>$feeds]);
    }
    


    public function getDetailUser(){
        return view('admin.information');
    }
    public function getDetailUserInfo(){
        return view('admin.information');
    }
    public function getDetailUserPost(){
        return view ('admin.post');
    }
    public function getDetailUserExtanallink(){
        return view ('admin.extanallink');
    }
}
