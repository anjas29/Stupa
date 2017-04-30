<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $table = 'students';

    protected $hidden = array('password', 'remember_token', 'api_token');

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
