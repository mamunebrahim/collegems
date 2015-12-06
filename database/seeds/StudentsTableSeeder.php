<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        DB::table('students')->delete();
		
		$students = array(
			[
		    	'id'       			=> 1,
		    	'name'				=> "Abdullah Al Mamun",
		    	'father_name'		=> "Md.Afzalur Rahman",
		    	'mother_name'		=> "Rina Begum",
	            'gender'			=> "Male",
	            'religion'			=> "Islam",
	            'date_of_birth'		=> new DateTime,
		    	'present_address'	=> "Chilmari, Kurigram",
		    	'permanent_address'	=> "Chilmari, Kurigram",
		    	'phone'				=> +8801989503938,
		    	'user_id'           => 2,
		    	'version_id'        => 1,
			],
			
			[
		    	'id'       		 	=> 2,
		    	'name'				=> "Mahfuzar Rahman",
		    	'father_name'		=> "Md.Aminul Islam",
		    	'mother_name'		=> "Mahmuda Begum",
	            'gender'			=> "Male",
	            'religion'			=> "Islam",
	            'date_of_birth'		=> new DateTime,
		    	'present_address'	=> "Chilmari, Kurigram",
		    	'permanent_address'	=> "Chilmari, Kurigram",
		    	'phone'				=> +8801937489403,
		    	'user_id'           => 3,
		    	'version_id'        => 2,
			],

			[
		    	'id'       			=> 3,
		    	'name'				=> "Rupam Ali",
		    	'father_name'		=> "Md.Noor Alam",
		    	'mother_name'		=> "Rasna Begum",
	            'gender'			=> "Male",
	            'religion'			=> "Islam",
	            'date_of_birth'		=> new DateTime,
		    	'present_address'	=> "Chilmari, Kurigram",
		    	'permanent_address'	=> "Chilmari, Kurigram",
		    	'phone'				=> +8801737404939,
		    	'user_id'           => 4,
		    	'version_id'        => 1,
			],
		);

        DB::table('students')->insert($students);
    }

}