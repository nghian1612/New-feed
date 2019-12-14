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

    public function getJobManager(){
        $feeds = Feeds::where('type_feed','1')->get();
        return view ('admin.jobmanager',['feeds'=>$feeds]);
    }
}
