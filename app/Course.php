<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    public function detail_courses(){
    	return $this->hasMany('App\DetailCourse');
    }
}
