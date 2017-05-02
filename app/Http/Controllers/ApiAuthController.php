<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class ApiAuthController extends Controller
{
   	public function postLogin(Request $request)
   	{
   		$auth = auth('student');
   		$username = $request->input('username');
        $password = $request->input('password');

        if($auth->attempt(array('username' => $username, 'password' => $password))){
            $data = $auth->user();
            $user = Student::where('id', $data->id)->with('classes')->first();
            return array(
                'success'=>true,
                'data'=>$user,
                'api_token'=>$data->api_token
            );
        }else{
            return array(
                'success'=>false,
                'description'=>'Failed'
            );
        }
   	}
}
