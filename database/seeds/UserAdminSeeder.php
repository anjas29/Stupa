<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
        	[
        		'username'    => 'admin', 
        		'password'    => Hash::make('admin'),
        		'name'        => 'Administrator',
                'api_token'   => str_random(60),
        		'created_at'  => Carbon::now(),
        		'updated_at'  => Carbon::now()
        	]
        ];

        DB::table('users')->insert($users);
    }
}
