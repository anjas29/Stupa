<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('period')->delete();

        $data = [
        	[
        		'year'    => '2015/2016',
        		'semester'    => 1,
        		'status'    => 0,
        		'created_at'  => Carbon::now(),
        		'updated_at'  => Carbon::now()
        	],
        	[
        		'year'    => '2015/2016',
        		'semester'    => 2,
        		'status'    => 0,
        		'created_at'  => Carbon::now(),
        		'updated_at'  => Carbon::now()
        	],
        	[
        		'year'    => '2016/2017',
        		'semester'    => 1,
        		'status'    => 0,
        		'created_at'  => Carbon::now(),
        		'updated_at'  => Carbon::now()
        	],
        	[
        		'year'    => '2016/2017',
        		'semester'    => 2,
        		'status'    => 1,
        		'created_at'  => Carbon::now(),
        		'updated_at'  => Carbon::now()
        	]
        ];

        DB::table('period')->insert($data);
    }
}
