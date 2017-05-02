<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->delete();

        $data = [
        	[
        		'course_code'   => '0001',
        		'name'    		=> 'MATHEMATICS',
        		'description'   => 'MATHEMATICS',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0002',
        		'name'    		=> 'NATURAL SCIENCES',
        		'description'   => 'NATURAL SCIENCES',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0003',
        		'name'    		=> 'SOCIAL SCIENCES',
        		'description'   => 'SOCIAL SCIENCES',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0004',
        		'name'    		=> 'ENGLISH',
        		'description'   => 'ENGLISH',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0005',
        		'name'    		=> 'INDONESIAN',
        		'description'   => 'INDONESIAN',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0006',
        		'name'    		=> 'JAVANESE',
        		'description'   => 'JAVANESE',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0007',
        		'name'    		=> 'ART',
        		'description'   => 'ART',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0008',
        		'name'    		=> 'SPORTS',
        		'description'   => 'SPORTS',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0009',
        		'name'    		=> 'ISLAMIC STUDIES',
        		'description'   => 'ISLAMIC STUDIES',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0010',
        		'name'    		=> 'CITIZENSHIP EDUCATION',
        		'description'   => 'CITIZENSHIP EDUCATION',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0011',
        		'name'    		=> 'GUIDANCE COUNSELING',
        		'description'   => 'GUIDANCE COUNSELING',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	],
        	[
        		'course_code'   => '0012',
        		'name'    		=> 'INFORMATION TECHNOLOGY',
        		'description'   => 'INFORMATION TECHNOLOGY',
        		'created_at'  	=> Carbon::now(),
        		'updated_at'  	=> Carbon::now()
        	]
        ];

        DB::table('course')->insert($data);
    }
}
