<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    protected $table = 'teachers';

    protected $hidden = array('password', 'remember_token');

    public function detail_course()
    {
    	return $this->hasMany('App\DetailCourse');
    }

}
