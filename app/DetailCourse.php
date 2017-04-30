<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailCourse extends Model
{
    protected $table = 'detail_course';

    public function classes(){
    	return $this->belongsTo('App\Classes', 'class_id');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function period(){
    	return $this->belongsTo('App\Period');
    }

    public function teacher(){
    	return $this->belongsTo('App\Teacher');
    }
}
