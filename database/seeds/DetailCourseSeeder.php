<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DetailCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_course')->delete();

        $data = [
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 1,
        		'teacher_id'    => 1,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 2,
        		'teacher_id'    => 2,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 3,
        		'teacher_id'    => 3,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 4,
        		'teacher_id'    => 4,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 5,
        		'teacher_id'    => 5,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 6,
        		'teacher_id'    => 6,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 7,
        		'teacher_id'    => 7,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 8,
        		'teacher_id'    => 8,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 9,
        		'teacher_id'    => 9,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 10,
        		'teacher_id'    => 10,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 11,
        		'teacher_id'    => 11,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 1, 
        		'course_id'    	=> 12,
        		'teacher_id'    => 12,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],

        	//Class B
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 1,
        		'teacher_id'    => 1,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 2,
        		'teacher_id'    => 2,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 3,
        		'teacher_id'    => 3,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 4,
        		'teacher_id'    => 4,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 5,
        		'teacher_id'    => 5,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 6,
        		'teacher_id'    => 6,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 7,
        		'teacher_id'    => 7,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 8,
        		'teacher_id'    => 8,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 9,
        		'teacher_id'    => 9,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 10,
        		'teacher_id'    => 10,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2, 
        		'course_id'    	=> 11,
        		'teacher_id'    => 11,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'class_id'    	=> 2,
        		'course_id'    	=> 12,
        		'teacher_id'    => 12,
        		'period_id'		=> 4,
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	]
        ];

        DB::table('detail_course')->insert($data);
    }
}
