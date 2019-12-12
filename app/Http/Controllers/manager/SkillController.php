<?php

namespace App\Http\Controllers\manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skill;

class SkillController extends Controller
{
    public function addSkillView()
    {
        
        $getskill = Skill::get();
    	return view('manager.skils.addskil',compact('getskill'));
    }

    public function addNewskill(Request $request)
    {
        $skillID = request('skill_id');
        $skills_name = request('skill_name');
        $skill = new Skill();
        if($skillID == '') {
            $skill->skills_name = $skills_name;
            $skill->save();
        }
        else {
            Skill::where('skills_id', $skillID)->update(['skills_name' => $skills_name]);
        }
    	
    	$getskill = Skill::get();
        return view('manager.skils.addskil',compact('getskill'));
    }

    public function getSkill(Request $request)
    {
        $skill_id = request('skillID'); 
        $getskill = Skill::where('skills_id',$skill_id)->first();
        return response(['success'=>true,'skill_id'=>$getskill->skills_id, 'skill_name' => $getskill->skills_name]);
    }


    public function deleteskill(Request $request)
    {
        $skill_id = request('skillID'); 
        $getskill = Skill::where('skills_id',$skill_id)->delete();
        return response(['success'=>true]);
    } 

    public function skillStatus(Request $request)
    {
        $status = request('status'); 
        $id = request('id');
        $getskill = Skill::where('skills_id',$id)->update(['status' => $status]);
        return response(['success'=>true]);
    }   

   
}
