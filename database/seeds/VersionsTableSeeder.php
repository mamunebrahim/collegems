<?php

use Illuminate\Database\Seeder;

class VersionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('versions')->delete();
 
        $versions= array(
           [
             'id'       => 1,
             'title'    => "Bangla"
           ],
           [
             'id'       => 2,
             'title'    => "English"
           ]
        );
 
        DB::table('versions')->insert($versions);
    }

}