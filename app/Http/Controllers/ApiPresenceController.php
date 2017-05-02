<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailPresent;
use App\Student;
use DB;
class ApiPresenceController extends Controller
{
    public function getPresence()
    {	
    	$id = auth('api')->user()->id;
    	$data = DetailPresent::where('student_id', $id)
                        ->with('presence.detail_course.course')
    					->with('student')
    					->orderBy('created_at', 'desc')
    					->get();

    	return array(
                'success'=>true,
                'data'=>$data,
            );
    }

    public function getProfil(){
        $id = auth('api')->user()->id;
        $data = DetailPresent::select('present',DB::raw('COUNT(id) as count'))->where('student_id', $id)
                        ->groupBy('present')
                        ->get();
        $profil = Student::where('id', $id)->with('classes')->first();
        return array(
                'success'=>true,
                'profil'=> $profil,
                'data'=>$data
            );   
    }
}
