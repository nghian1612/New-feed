<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Experiences;
use App\Educations;
use App\Externallinks;
use App\Follows;
use App\Mdfollows;
use App\Skills;
use App\Userskills;
use App\Feeds;
use App\Types;
use App\Catalogs;
use App\Feedskills;


class profileController extends Controller
{
    public function show($id){
        $extarnallink = Externallinks::where('id_user',$id)->get();
        $educations = Educations::where('id_user',$id)->get();
        $experiences = Experiences::where('id_user',$id)->get();
        $profile = User::where('id',$id)->get();
        $userskill = Userskills::where('id_user',$id)->get();
        $feedskill = Feedskills::all();
        $follows = Follows::where('id_mid',$id)->get();
        $myfeeds = Feeds::where('id_user',$id)->orderBy('updated_at','desc')->get();
        $countFollowing = Follows::where('id_user',$id)->get()->count();
        $countFollowed = $follows->count();
        $checkFollow = Follows::where('id_mid',$id)->where('id_user',Auth::id())->get()->toArray(); 
        return view('client.profile',
        [
            'profile'=>$profile,
            'experiences'=>$experiences,
            'educations' =>$educations,
            'userskill' =>$userskill,
            'externallink' =>$extarnallink,
            'follows'=>$follows,
            'countFollowing' => $countFollowing,
            'countFollowed'=> $countFollowed,
            'myfeeds' => $myfeeds,
            'checkFollow' => $checkFollow,
            'feedskill' => $feedskill
        ]);
      
    }

// About yourseft profile action------------------------------------------------------------------------------------------------------------------
//
//

    public function updateabout(Request $request){
        $id = $request->id;
        $about = $request->about;
        User::where('id',$id)->update(['about_yourself'=>$about]);
        return redirect()->route('profile',['id'=> $id]);
    }

/*-------------------------------------------------------------------------------------------------------------------------------------------*/


// About yourseft profile action------------------------------------------------------------------------------------------------------------------
//
//

    public function updatelocation(Request $request){
        $id = $request->id;
        $location = $request->location;
        User::where('id',$id)->update(['location'=>$location]);
        return redirect()->route('profile',['id'=> $id]);
    }

/*-------------------------------------------------------------------------------------------------------------------------------------------*/


// About yourseft profile action------------------------------------------------------------------------------------------------------------------
//
//

public function updatestalish(Request $request){
    $id = $request->id;
    $estalish = date_format(date_create($request->estalish),'Y-m-d');
    var_dump($estalish) ;
    User::where('id',$id)->update(['estalish'=>$estalish]);
    return redirect()->route('profile',['id'=> $id]);
}

/*-------------------------------------------------------------------------------------------------------------------------------------------*/

/*Follows profile action---------------------------------------------------------------------------------------------------------------------*/

    public function followon($id){
        $id_user = Auth::id();
        $id_mid = $id;
        $add = new Follows;
        $add -> id_user = $id_user;
        $add -> id_mid = $id_mid;
        $add -> save();
        return redirect()->route('profile',['id'=> $id]);
    }


/*-------------------------------------------------------------------------------------------------------------------------------------------*/


// Experiences profile action-----------------------------------------------------------------------------------------------------------------*/
//
//
    public function followoff($id){
        Follows::where('id_mid',$id)->where('id_user',Auth::id())->delete();
        return redirect()->route('profile',['id'=> $id]);
    }

/*-------------------------------------------------------------------------------------------------------------------------------------------*/
    

/* Experiences profile action---------------------------------------------------------------------------------------------------------------*/
//
//

    public function getexp($idExp){
        $oneexp = Experiences::where('id',$idExp)->get();
        foreach($oneexp as $oexp){
            echo"
            <div class='overview-edit'>
				<h3>KINH NGHIỆM</h3>
                <form action='".url('/client/updateexp')."' method='post'>
                    <input type='hidden' value='".csrf_token()."' name='_token'>
                    <input type='hidden' value='".$oexp->id."' name='idexp'>
					<input type='text' name='subject' placeholder='Subject' value='".$oexp->subject."'>
					<textarea name='detail' id='editor-exp-update'>".$oexp->detail."</textarea>
					<button type='submit' class='save'>Save</button>
					<button type='button'class='cancel'>Cancel</button>
				</form>
				<a  title='' class='close-box'><i class='la la-close'></i></a>
			</div>";
        }
    }

    public function addExp(Request $request){
        $subject = $request->subject;
        $detail = $request->detail;
        $id_user = Auth::id();
        $add = new Experiences;
        $add -> id_user = $id_user;
        $add -> detail = $detail;
        $add -> subject = $subject;
        $add ->save();
        return redirect()->route('profile',['id'=> $id_user]);
    }

    public function updateExp(Request $request){
        $subject = $request->subject;
        $detail = $request->detail;
        $id_user = Auth::id();
        $idexp = $request->idexp;
        Experiences::where('id',$idexp)->update(['subject'=>$subject,'detail'=>$detail,'id_user'=>$id_user]);
        return redirect()->route('profile',['id'=> $id_user]);
    }

    public function deleteExp($id){
        Experiences::where('id',$id)->delete();
        return redirect()->route('profile',['id'=> Auth::id()]);
    }


//
//
/*-------------------------------------------------------------------------------------------------------------------------------------------*/

//
//
/*-------------------------------------------------------------------------------------------------------------------------------------------*/

    public function addEdu(Request $request){
        $school = $request->school;
        $career = $request->career;
        $description = $request->description;
        if(isset($request->graduated)){
            $graduated = $request->graduated;
        }else{
            $graduated = 0;
        }
        $id_user = Auth::id();
        $add = new Educations;
        $add -> id_user = $id_user;
        $add -> description = $description;
        $add -> name_school = $school;
        $add -> career = $career;
        $add -> graduated = $graduated;
        $add ->save();
        return redirect()->route('profile',['id'=> $id_user]);
    }

    public function getedu($idEdu){
        $oneedu = Educations::where('id',$idEdu)->get();
        foreach($oneedu as $oedu){
            if($oedu->graduated == 1)
                echo"
                <div class='overview-edit'>
                    <h3>Education</h3>
                    <form action='".url('/client/updateedu')."' method='post'>
                        <input type='hidden' value='".csrf_token()."' name='_token'>
                        <input type='hidden' value='".$oedu->id."' name='idedu'>
                        <input type='text' name='school' placeholder='School / University' value='".$oedu->name_school."'>
                        <input type='text' name='career' placeholder='chuyen nganh'  value='".$oedu->career."'>
                        <textarea name='description' placeholder='Description' id='editor-edu-update'>".$oedu->description."</textarea>
                        <input type='checkbox' name='graduated' value='1' checked><span>Đã tốt nghiệp</span>
                        <button type='submit' class='save'>Save</button>
                        <button type='button' class='cancel'>Cancel</button>
                    </form>
                    <a  title='' class='close-box'><i class='la la-close'></i></a>
                </div>
                ";
            else{
                echo"
                <div class='overview-edit'>
                    <h3>Education</h3>
                    <form action='".url('/client/updateedu')."' method='post'>
                        <input type='hidden' value='".csrf_token()."' name='_token'>
                        <input type='hidden' value='".$oedu->id."' name='idedu'>
                        <input type='text' name='school' placeholder='School / University' value='".$oedu->name_school."'>
                        <input type='text' name='career' placeholder='chuyen nganh'  value='".$oedu->career."'>
                        <textarea name='description' placeholder='Description' id='editor-edu-update'>".$oedu->description."</textarea>
                        <input type='checkbox' name='graduated' value='1'><span>Đã tốt nghiệp</span>
                        <button type='submit' class='save'>Save</button>
                        <button type='button' class='cancel'>Cancel</button>
                    </form>
                    <a  title='' class='close-box'><i class='la la-close'></i></a>
                </div>
                ";
            }
        }
    }

    public function updateEdu(Request $request){
        $idedu = $request->idedu;
        $school = $request->school;
        $career = $request->career;
        $description = $request->description;
        if(isset($request->graduated)){
            $graduated = $request->graduated;
        }else{
            $graduated = 0;
        }
        $id_user = Auth::id();
        Educations::where('id',$idedu)->update(['name_school'=>$school,'career'=>$career,'id_user'=>$id_user,'description'=>$description]);
        return redirect()->route('profile',['id'=> $id_user]);
    }


    public function deleteEdu($id){
        Educations::where('id',$id)->delete();
        return redirect()->route('profile',['id'=> Auth::id()]);
    }


    public function addSki(Request $request){
        $skill = $request->skills;
        $check = false;
        $idskill;
        $checkskill = Skills::all();
        foreach($checkskill as $checkskill){
            $same = levenshtein($skill,$checkskill->name); //$same bằng 0 nếu skill input giống với skill trong bảng skills
            if($same == 0){ // giống
                $check = true;
                $idskill = $checkskill->id;
                break;
            }else{// không giống
                $check = false;
            } 
        }
        if($check == true){
            $checkuserskill = Userskills::where('id_user',Auth::id())->where('id_skill',$idskill)->get()->toArray();
            if(empty($checkuserskill)){
                $add = new Userskills;
                $add -> id_user = Auth::id();
                $add -> id_skill =$checkskill->id;
                $add ->save();
            }else{}
        }
        if($check == false){
            $add = new Skills;
            $add -> name = $skill;
            $add -> save();
            $skilladded = Skills::where('name',$skill)->get();
            foreach($skilladded as $skilladded){
                    $add = new Userskills;
                    $add -> id_user = Auth::id();
                    $add -> id_skill =$skilladded->id;
                    $add ->save();
            }
        }
        return redirect()->route('profile',['id'=> Auth::id()]); 
    }

    public function deleteSki($id){
        Userskills::where('id',$id)->delete();
        return redirect()->route('profile',['id'=> Auth::id()]);
    }



    function searchskillAjax(Request $request){
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('skills')
            ->where('name', 'LIKE', "%{$query}%")
            ->get();
            $output = '<ul class="dropdown-menu listski" style="display:block; position:relative">';
            foreach($data as $row)
            {
               $output .= '
               <li class="w-skill"><a>'.$row->name.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
        //    href="data/'. $row->id .'"
        // <li class="w-skill listski"><a>'.$query.'</a></li>
       }
    }

    public function addFeed(Request $request){
        if($request->type_feed == 1){
            $id_user = Auth::id();
            $level_exp = $request->level;
            $type_feed = $request->type_feed;
            $title = $request->title;
            $location = $request->location;
            $skills= $request->grpskill;
            $salary= $request->salary;
            $type_job= $request->typejob;
            $description= $request->description;
            $add = new Feeds;
            $add -> id_user = $id_user;
            $add -> type_feed = $type_feed;
            $add -> title = $title;
            $add -> salary = $salary;
            $add -> location = $location;
            $add -> type_job = $type_job;
            $add -> level_exp = $level_exp;
            $add -> description = $description;
            $add -> save();
            $id_feed = $add->id;
            $all_skill = Skills::all();
            foreach($all_skill as $s){
                if(in_array($s->name, $skills)){
                    $add = new Feedskills;
                    $add -> id_feed = $id_feed;
                    $add -> id_skill = $s->id; 
                    $add -> save();
                }
            }
            return redirect()->route('profile',['id'=> Auth::id()]);
        }else if($request->type_feed == 2){
            if($request->hasFile('hinh')){
                $now = date("Ymd-His");
                $file = $request->file('hinh');
                $namehinh = "feed".$now.".jpg";
                $file -> move('images/feedimage',$namehinh);

                $hinh = $namehinh;
                $id_user = Auth::id();
                $type_feed = $request->type_feed;
                $title = $request->title;
                $skills= $request->grpskill;
                $description= $request->description;
                $add = new Feeds;
                $add -> id_user = $id_user;
                $add -> type_feed = $type_feed;
                $add -> title = $title;
                $add -> image = $hinh;
                $add -> description = $description;
                $add -> save();
                $id_feed = $add->id;
                $all_skill = Skills::all();
                foreach($all_skill as $s){
                    if(in_array($s->name, $skills)){
                        $add = new Feedskills;
                        $add -> id_feed = $id_feed;
                        $add -> id_skill = $s->id; 
                        $add -> save();
                    }
                }
                return redirect()->route('profile',['id'=> Auth::id()]);
            }else{
                echo"chua co hinh";
            }
        }else{
            echo 'Phát hiện bug rồi ông Giáo ạ !';
        }
    }

    public function deleteFeed($id){
        Feedskills::where('id_feed',$id)->delete();
        Feeds::where('id',$id)->delete();
        return redirect()->route('profile',['id'=> Auth::id()]);
    }
}