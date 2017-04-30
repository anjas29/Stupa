<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
   	protected $table = 'period';

   	public function detail_course()
   	{
   		return $this->hasMany('App\DetailCourse');
   	}
}
