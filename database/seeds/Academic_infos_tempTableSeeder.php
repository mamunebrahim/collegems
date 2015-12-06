<?php

use Illuminate\Database\Seeder;

class Academic_infos_tempTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academic_infos_temp')->delete();
 
        $academic_infos_temp = array(
            [
                'id'            => 1,
                'exam'          => 'S.S.C',
                'board'         => 'Dhaka',
                'year'          => '2011',
                'roll'          => '223234',
                'gpa'           => '4.5',
                'admission_id'  => 1
            ],
            [
                'id'            => 2,
                'exam'          => 'J.S.C',
                'board'         => 'Dhaka',
                'year'          => '2008',
                'roll'          => '222134',
                'gpa'           => '5.0',
                'admission_id'  => 1
            ]
        );
 
        DB::table('academic_infos_temp')->insert($academic_infos_temp);
    }

}