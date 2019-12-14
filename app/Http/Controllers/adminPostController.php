<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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


class adminPostController extends Controller
{
    public function getNormalManager(){
        $feeds = Feeds::where('type_feed','2')->get();
        return view('admin.normalmanager',['feeds'=>$feeds]);
    }
    public function getNormalManagerHide($id){
        Feeds::where('id',$id)->update(['status'=>'0']);
        return redirect('admin/normalmanager');
    }
    public function getNormalManagerShow($id){
        Feeds::where('id',$id)->update(['status'=>'1']);
        return redirect('admin/normalmanager');
    }
    public function getNormalManagerDelete($id){
        Feeds::where('id',$id)->delete();
        return redirect('admin/normalmanager');
    }

    public function getJobManager(){
        $feeds = Feeds::where('type_feed','1')->get();
        return view ('admin.jobmanager',['feeds'=>$feeds]);
    }
    public function getJobManagerHide($id){
        Feeds::where('id',$id)->update(['status'=>'0']);
        return redirect('admin/jobmanager');
    }
    public function getJobManagerShow($id){
        Feeds::where('id',$id)->update(['status'=>'1']);
        return redirect('admin/jobmanager');
    }
    public function getJobManagerDelete($id){
        Feeds::where('id',$id)->delete();
        return redirect('admin/jobmanager');
    }
}
