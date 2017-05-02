<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->delete();

        $data = [
        	[
        		'teacher_number'	=> '19690417 199412 2 003', 
        		'username'			=> '196904171994122003',
        		'password'    		=> Hash::make('196904171994122003'),
        		'name'        		=> 'DWI RITA SUWANDARI, S. PD.',
        		'gender'			=> 'Female',
        		'level'				=> 'Mathematics Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'	=> '19651018 199702 2 002', 
        		'username'			=> '196510181997022002',
        		'password'    		=> Hash::make('196510181997022002'),
        		'name'        		=> 'RETNO TITISARI, S. PD.',
        		'gender'			=> 'Female',
        		'level'				=> 'Natural Sciences Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19690728 199412 2 001', 
        		'username'			=> '196907281994122001',
        		'password'    		=> Hash::make('196907281994122001'),
        		'name'        		=> 'SULISTIYANI, S. PD.',
        		'gender'			=> 'Female',
        		'level'				=> 'Social Sciences Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19600817 199412 1 001', 
        		'username'			=> '196008171994121001',
        		'password'    		=> Hash::make('196008171994121001'),
        		'name'        		=> 'DRS. AGUS RIWARSA',
        		'gender'			=> 'Male',
        		'level'				=> 'English Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19590622 198103 1 011', 
        		'username'			=> '195906221981031011',
        		'password'    		=> Hash::make('195906221981031011'),
        		'name'        		=> 'DRS. HERI SUMANTO, S.  PD.',
        		'gender'			=> 'Male',
        		'level'				=> 'Indonesian Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19670222 199203 2 013', 
        		'username'			=> '196702221992032013',
        		'password'    		=> Hash::make('196702221992032013'),
        		'name'        		=> 'DRA. TITIK PURWANINGSIH',
        		'gender'			=> 'Female',
        		'level'				=> 'Javanese Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19671216 199412 2 002', 
        		'username'			=> '196712161994122002',
        		'password'    		=> Hash::make('196712161994122002'),
        		'name'        		=> 'DRA. FRANSISCHA WIDIYATI',
        		'gender'			=> 'Female',
        		'level'				=> 'Art Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19630319 199412 1 001', 
        		'username'			=> '196303191994121001',
        		'password'    		=> Hash::make('196303191994121001'),
        		'name'        		=> 'DRS. JAKA PUJI UTAMA',
        		'gender'			=> 'Male',
        		'level'				=> 'Sposrts Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19670218 199303 2 003', 
        		'username'			=> '196702181993032003',
        		'password'    		=> Hash::make('196702181993032003'),
        		'name'        		=> 'DRA. ISTINGANAH',
        		'gender'			=> 'Female',
        		'level'				=> 'Islamic Studies Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19590107 198803 1 004', 
        		'username'			=> '195901071988031004',
        		'password'    		=> Hash::make('195901071988031004'),
        		'name'        		=> 'DRS. SARINDI',
        		'gender'			=> 'Female',
        		'level'				=> 'Citizen Education Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19610616 198602 2 003', 
        		'username'			=> '196106161986022003',
        		'password'    		=> Hash::make('196106161986022003'),
        		'name'        		=> 'SITI AMINAH, S. PD.',
        		'gender'			=> 'Female',
        		'level'				=> 'Guidance Conseling Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[
        		'teacher_number'=> '19670813 199412 1 002', 
        		'username'			=> '196708131994121002',
        		'password'    		=> Hash::make('196708131994121002'),
        		'name'        		=> 'DRS. RADEN TOTO WIDHI DARMANTO',
        		'gender'			=> 'Male',
        		'level'				=> 'Inforation Technology Teacher',
        		'phone'				=> '-',
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],

        ];

        DB::table('teachers')->insert($data);
    }
}
