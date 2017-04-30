<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function classes()
    {
    	return $this->belongsTo('App\Classes', 'class_id');
    }

    public function detail_course()
    {
    	return $this->hasMany('App\DetailCourse');
    }

    public function detail_present()
    {
    	return $this->hasMany('App\DetailPresent');
    }
}
