<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AuthController extends Controller
{
	public function getLogin(){

		return view('login');
	}

    public function postLogin(Request $request){
    	$authTeachers = auth('teachers');
    	$authAdmin = auth('users');

        $credential = array(
            'username' => $request->input('username'),
            'password' => $request->input('password')
        );

        if($authTeachers->attempt($credential)){
            Session::flash('loginSuccess', 'Login berhasil');
            return redirect(route('user_teacher.index'));
        }else if($authAdmin->attempt($credential)){
        	Session::flash('loginSuccess', 'Login berhasil');
            return redirect(route('admin.index'));
        }else{
            Session::flash('loginFailed', 'Email atau password salah');
            return redirect(route('login'));
        }
        return redirect(route('login'));
    }

    public function getLogout(){
    	auth('teachers')->logout();
    	auth('users')->logout();
    	return redirect(route('login'));
    }
}
