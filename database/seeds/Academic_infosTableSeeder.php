<?php

use Illuminate\Database\Seeder;

class Academic_infosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academic_infos')->delete();
 
        $academic_infos = array(
            [
                'id'            => 1,
                'exam'          => 'S.S.C',
                'board'         => 'Dhaka',
                'year'          => '2011',
                'roll'          => '223234',
                'gpa'           => '4.5',
                'student_id'    => 1
            ],
            [
                'id'            => 2,
                'exam'          => 'J.S.C',
                'board'         => 'Dhaka',
                'year'          => '2008',
                'roll'          => '222134',
                'gpa'           => '5.0',
                'student_id'    => 1
            ]
        );
 
        DB::table('academic_infos')->insert($academic_infos);
    }

}