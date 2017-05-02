<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPresent extends Model
{
    protected $table = 'detail_present';

    public function present()
    {
    	return $this->belongsTo('App\Present');
    }

    public function presence()
    {
    	return $this->belongsTo('App\Present', 'present_id');
    }

    public function student()
    {
    	return $this->belongsTo('App\Student');
    }
}
