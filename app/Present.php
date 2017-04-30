<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Present extends Model
{
    protected $table = 'present';

    public function detail_course()
    {
    	return $this->belongsTo('App\DetailCourse');
    }

    public function detail_present()
    {
    	return $this->hasMany('App\DetailPresent');
    }
}
