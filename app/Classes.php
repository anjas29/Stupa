<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';

    public function students(){
    	return $this->hasMany('App\Student');
    }

    public function courses(){
    	return $this->hasMany('App\DetailCourse');
    }
}
