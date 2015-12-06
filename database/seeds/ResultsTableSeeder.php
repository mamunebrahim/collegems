<?php

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('results')->delete();
 
        $results = array(
            ['id' => 1, 'mark' => 80, 'gp' => 'A+', 'exam_id' => 1, 'student_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'mark' => 80, 'gp' => 'A+', 'exam_id' => 1, 'student_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'mark' => 80, 'gp' => 'A+', 'exam_id' => 1, 'student_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'mark' => 80, 'gp' => 'A+', 'exam_id' => 2, 'student_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'mark' => 80, 'gp' => 'A+', 'exam_id' => 2, 'student_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'mark' => 80, 'gp' => 'A+', 'exam_id' => 2, 'student_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            );
 
        
        DB::table('results')->insert($results);
    }

}