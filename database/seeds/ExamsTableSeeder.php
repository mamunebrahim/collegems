<?php

use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        DB::table('exams')->delete();
 
        $exams = array(
            ['id' => 1, 'title' => 'HSC 1st Year', 'subject' => 'Mathematics','total_marks' => 100, 'date' => new DateTime, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'HSC 2st Year', 'subject' => 'Chemistry',  'total_marks' => 100, 'date' => new DateTime, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            
           );
 
        DB::table('exams')->insert($exams);
    }

}