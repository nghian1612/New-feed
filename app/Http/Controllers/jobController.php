<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills;
use App\Feeds;
use App\Feedskills;
use App\Comments;
use App\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class jobController extends Controller
{
    public function show(){
        $alljob = Feeds::where('type_feed','1')->orderBy('updated_at','desc')->get();
        $feedskill = Feedskills::all();
        return view('client.job',[
            'alljob'=>$alljob,
            'feedskill' => $feedskill,
            ]);
    }
    public function searchJob(Request $request){
        $search = $request->search;
        $skill = $request->grpskill;
        $type_job = $request->type_job;
        $feedskill = Feedskills::all();
        // $datasearch = Feeds::where('type_feed','1')->get();
        $datasearch = Feeds::where('type_feed','1')
                            // ->where('type_job', $type_job)
                            ->where('title', 'LIKE', '%'.$search.'%')
                            // ->orwhere('description', 'LIKE', "%{$search}%")
                            
                            // ->orwhereBetween('salary',[$bf,$af])
                            // ->orWhere('description', 'LIKE', "%{$search}%")
                            ->get();
                            return view('client.job',[
                                'alljob'=>$datasearch,
                                'feedskill' => $feedskill,
                                ]);
    }

    public function showjob($id){
        $feedskill = Feedskills::all();
        $thisJob = Feeds::where('id',$id)->get();
        $comments = Comments::all();
        return view('client.detailjob',[
            'thisJob'=> $thisJob,
            'feedskill' => $feedskill,
            'comments' => $comments
        ]);
    }
    public function showpost($id){
        return view('client.detailpost',[
            
        ]);
    }
    
}
