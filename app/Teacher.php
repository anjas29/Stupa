<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    public function detail_course()
    {
    	return $this->hasMany('App\DetailCourse');
    }

}
