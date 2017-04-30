<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailPresent;

class ApiPresenceController extends Controller
{
    public function getPresence()
    {	
    	$id = auth('api')->user()->id;
    	$data = DetailPresent::where('student_id', $id)
    					->with('student')
    					->orderBy('created_at', 'desc')
    					->get();

    	return array(
                'success'=>true,
                'data'=>$data,
            );
    }
}
