<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();

        $data = [
        	//Class 7A
        	[	
        		'student_number'	=> '7487',
        		'username'			=> '7487',
        		'password'    		=> Hash::make('7487'),
        		'class_id'			=> 1,
        		'name'        		=> 'ADILLA HAFIZH AFIFAH',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7488',
        		'username'			=> '7488',
        		'password'    		=> Hash::make('7488'),
        		'class_id'			=> 1,
        		'name'        		=> 'AFIFFULLAH',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7489',
        		'username'			=> '7489',
        		'password'    		=> Hash::make('7489'),
        		'class_id'			=> 1,
        		'name'        		=> 'AFINA NAURATUL HASNA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7490',
        		'username'			=> '7490',
        		'password'    		=> Hash::make('7490'),
        		'class_id'			=> 1,
        		'name'        		=> 'ALFIONITA NURFADHILA RAMADHANI',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7491',
        		'username'			=> '7491',
        		'password'    		=> Hash::make('7491'),
        		'class_id'			=> 1,
        		'name'        		=> 'ALIF VIVIAN ADYATMA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7492',
        		'username'			=> '7492',
        		'password'    		=> Hash::make('7492'),
        		'class_id'			=> 1,
        		'name'        		=> 'ARCINDY ERSA PUTRILIA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7493',
        		'username'			=> '7493',
        		'password'    		=> Hash::make('7493'),
        		'class_id'			=> 1,
        		'name'        		=> 'BAGUS ACHMAD ADIDANA NUGRAHA',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7494',
        		'username'			=> '7494',
        		'password'    		=> Hash::make('7494'),
        		'class_id'			=> 1,
        		'name'        		=> 'EMANDEN STEFY ALYANISA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7495',
        		'username'			=> '7495',
        		'password'    		=> Hash::make('7495'),
        		'class_id'			=> 1,
        		'name'        		=> 'ESA OCTAVIA BINTANG AZZAHRA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7496',
        		'username'			=> '7496',
        		'password'    		=> Hash::make('7496'),
        		'class_id'			=> 1,
        		'name'        		=> 'FAATIKAH SALMAA AL HUSNA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],

        	[	
        		'student_number'	=> '7497',
        		'username'			=> '7497',
        		'password'    		=> Hash::make('7497'),
        		'class_id'			=> 1,
        		'name'        		=> 'HASNA QONITAH',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],

        	[	
        		'student_number'	=> '7498',
        		'username'			=> '7498',
        		'password'    		=> Hash::make('7498'),
        		'class_id'			=> 1,
        		'name'        		=> 'MUHAMMAD FANDANY MAHENDRATAMA',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7499',
        		'username'			=> '7499',
        		'password'    		=> Hash::make('7499'),
        		'class_id'			=> 1,
        		'name'        		=> 'MUHAMMAD RAIHAN',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7500',
        		'username'			=> '7500',
        		'password'    		=> Hash::make('7500'),
        		'class_id'			=> 1,
        		'name'        		=> 'NABIL YASIR ILMI',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7501',
        		'username'			=> '7501',
        		'password'    		=> Hash::make('7501'),
        		'class_id'			=> 1,
        		'name'        		=> 'NAJMA ALYA JASMINE',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7502',
        		'username'			=> '7502',
        		'password'    		=> Hash::make('7502'),
        		'class_id'			=> 1,
        		'name'        		=> 'NALA AGHNIYA AHSAN',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7503',
        		'username'			=> '7503',
        		'password'    		=> Hash::make('7503'),
        		'class_id'			=> 1,
        		'name'        		=> 'NIKEN SEPTIANA KHUZAIMAH',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7504',
        		'username'			=> '7504',
        		'password'    		=> Hash::make('7504'),
        		'class_id'			=> 1,
        		'name'        		=> 'NOVELLIA ARDHYA DEWANTI',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7505',
        		'username'			=> '7505',
        		'password'    		=> Hash::make('7505'),
        		'class_id'			=> 1,
        		'name'        		=> 'PRADITA SEPTIANI SIREGAR',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7506',
        		'username'			=> '7506',
        		'password'    		=> Hash::make('7506'),
        		'class_id'			=> 1,
        		'name'        		=> 'QANITA ALCIENAMORA PERWIRA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],

        	//Class 7B
        	[	
        		'student_number'	=> '7514',
        		'username'			=> '7514',
        		'password'    		=> Hash::make('7514'),
        		'class_id'			=> 2,
        		'name'        		=> 'AJENG DHIYAA PUTRI QONITA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7515',
        		'username'			=> '7515',
        		'password'    		=> Hash::make('7515'),
        		'class_id'			=> 2,
        		'name'        		=> 'ARVIN BRAVEANTO',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7516',
        		'username'			=> '7516',
        		'password'    		=> Hash::make('7516'),
        		'class_id'			=> 2,
        		'name'        		=> 'ASA PENANTIAN',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7517',
        		'username'			=> '7517',
        		'password'    		=> Hash::make('7517'),
        		'class_id'			=> 2,
        		'name'        		=> 'DIKA NOER CANDRA WINDRA RENNY',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],

        	[	
        		'student_number'	=> '7518',
        		'username'			=> '7518',
        		'password'    		=> Hash::make('7518'),
        		'class_id'			=> 2,
        		'name'        		=> 'ELSA SILFIANA SHOLIHAH',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7519',
        		'username'			=> '7519',
        		'password'    		=> Hash::make('7519'),
        		'class_id'			=> 2,
        		'name'        		=> 'EMMYLIA ESTU PUTRI',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],

        	[	
        		'student_number'	=> '7520',
        		'username'			=> '7520',
        		'password'    		=> Hash::make('7520'),
        		'class_id'			=> 2,
        		'name'        		=> 'FITRA RIZKY HENDRAWAN',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7521',
        		'username'			=> '7521',
        		'password'    		=> Hash::make('7521'),
        		'class_id'			=> 2,
        		'name'        		=> 'HERLINA SULISTYA PUTRI',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7522',
        		'username'			=> '7522',
        		'password'    		=> Hash::make('7522'),
        		'class_id'			=> 2,
        		'name'        		=> 'HUSNA SABILA ASYA HIDA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7523',
        		'username'			=> '7523',
        		'password'    		=> Hash::make('7523'),
        		'class_id'			=> 2,
        		'name'        		=> 'INTAN MUNDZIROH',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],

        	[	
        		'student_number'	=> '7524',
        		'username'			=> '7524',
        		'password'    		=> Hash::make('7524'),
        		'class_id'			=> 2,
        		'name'        		=> 'KAFITA HERDANIA',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],

        	[	
        		'student_number'	=> '7525',
        		'username'			=> '7525',
        		'password'    		=> Hash::make('7525'),
        		'class_id'			=> 2,
        		'name'        		=> 'KAMALIA PUTRI NURUL AINI',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7526',
        		'username'			=> '7526',
        		'password'    		=> Hash::make('7526'),
        		'class_id'			=> 2,
        		'name'        		=> 'LAELA ANJASARI PUTRI',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7527',
        		'username'			=> '7527',
        		'password'    		=> Hash::make('7527'),
        		'class_id'			=> 2,
        		'name'        		=> 'LINTANG RISANG AYU ARDITA GUNAWAN',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7528',
        		'username'			=> '7528',
        		'password'    		=> Hash::make('7528'),
        		'class_id'			=> 2,
        		'name'        		=> 'LUKMANSYAH',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7529',
        		'username'			=> '7529',
        		'password'    		=> Hash::make('7529'),
        		'class_id'			=> 2,
        		'name'        		=> 'LURU LARASATI',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7530',
        		'username'			=> '7530',
        		'password'    		=> Hash::make('7530'),
        		'class_id'			=> 2,
        		'name'        		=> 'LUTHFIAH PUTRI HASNA ALIMARWANSYAH',
        		'gender'			=> 'Female',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7531',
        		'username'			=> '7531',
        		'password'    		=> Hash::make('7531'),
        		'class_id'			=> 2,
        		'name'        		=> 'MUHAMMAD DAFFAAUSHAF RAFSANJANI',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7532',
        		'username'			=> '7532',
        		'password'    		=> Hash::make('7532'),
        		'class_id'			=> 2,
        		'name'        		=> 'MUHAMMAD HUSNI ALWI',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	],
        	[	
        		'student_number'	=> '7533',
        		'username'			=> '7533',
        		'password'    		=> Hash::make('7533'),
        		'class_id'			=> 2,
        		'name'        		=> 'MUHAMMAD IQBAL KHATAMI',
        		'gender'			=> 'Male',
        		'address'			=> '-',
                'api_token'   		=> str_random(60),
        		'created_at'  		=> Carbon::now(),
        		'updated_at'  		=> Carbon::now()
        	]
        ];

        DB::table('students')->insert($data);
    }
}
