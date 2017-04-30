<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'Course';

    public function detail_courses(){
    	return $this->hasMany('App\DetailCourse');
    }
}
