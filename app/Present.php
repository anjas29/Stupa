<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function getDateAttribute(){
    	if($this->created_at != null){
    		if($this->created_at->diffInDays(Carbon::now()) == 0)
	    		return $this->created_at->diffForHumans();
    		else
    			return $this->created_at->format('j F Y\\, h:i A');	
    	}else{
    		return 'Null';
    	}
			
    }
}
