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

class adminSkillController extends Controller
{
    public function getSkillManager(){
        $skills = Skills::orderBy('updated_at','desc')->get();
        return view('admin.skillmanager',['skills'=>$skills]);
    }
    public function getSkillManagerAdd(Request $request){
        $name = $request->name;
        $add = new Skills;
        $add -> name = $name;
        $add -> save();
        return redirect('admin/skillmanager');
    }
    public function getSkillManagerDelete($id){
        Skills::where('id',$id)->delete();
        return redirect('admin/skillmanager');
    }
    public function getSkillManagerEdit($id){
        $skilledit = Skills::where('id',$id)->get();
        $skills = Skills::orderBy('updated_at','desc')->get();
        return view('admin.skillmanager',['skills'=>$skills, 'skilledit'=>$skilledit]);
    }
    public function getSkillManagerUpdate(Request $request){
        $id = $request->idskill;
        $name = $request->name;
        Skills::where('id',$id)->update(['name'=>$name]);
        return redirect('admin/skillmanager');
    }
}
