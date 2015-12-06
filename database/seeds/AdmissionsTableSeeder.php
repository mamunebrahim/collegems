<?php

use Illuminate\Database\Seeder;

class AdmissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('admissions')->delete();
		
		$admissions = array(
			[
		    	'name'				=> "Abdullh Al Mamun",
		    	'father_name'		=> "Md.Afzalur Rahman",
		    	'mother_name'		=> "Rina Begum",
		    	'gender'		    => "Male",
		    	'date_of_birth'		=> new DateTime,
		    	'phone'				=> +8801989503938,
		    	'email'				=> "book1@gmail.com",
			],
			[
		    	'name'				=> "Mahfuzar Rahman",
		    	'father_name'		=> "Md.Aminul Islam",
		    	'mother_name'		=> "Mahmuda Begum",
		    	'gender'		    => "Male",
		    	'date_of_birth'		=> new DateTime,
		    	'phone'				=> +8801937489403,
		    	'email'				=> "book2@gmail.com",
			],
			[
		    	'name'				=> "Rupam Ali",
		    	'father_name'		=> "Md.Noor Alam",
		    	'mother_name'		=> "Rasna Begum",
		    	'gender'		    => "Male",
		    	'date_of_birth'		=> new DateTime,
		    	'phone'				=> +8801737404939,
		    	'email'				=> "book3@gmail.com",
			]
		);

        DB::table('admissions')->insert($admissions);
    }

}