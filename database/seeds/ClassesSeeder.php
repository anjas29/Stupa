<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->delete();

        $data = [
        	[
        		'name'    => 'A', 
        		'grade'    => 7,
        		'created_at'  => Carbon::now(),
        		'updated_at'  => Carbon::now()
        	],
        	[
        		'name'    => 'B', 
        		'grade'    => 7,
        		'created_at'  => Carbon::now(),
        		'updated_at'  => Carbon::now()
        	]
        ];

        DB::table('classes')->insert($data);
    }
}
