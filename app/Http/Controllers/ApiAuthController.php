<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
   	public function postLogin(Request $request)
   	{
   		$auth = auth('student');
   		$username = $request->input('username');
        $password = $request->input('password');

        if($auth->attempt(array('username' => $username, 'password' => $password))){
            $data = $auth->user();
            return array(
                'success'=>true,
                'data'=>$data,
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
