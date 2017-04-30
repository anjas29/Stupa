<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $hidden = array('password');

    public function detail_course()
    {
    	return $this->hasMany('App\DetailCourse');
    }

}
