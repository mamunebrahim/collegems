<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $this->call('UserTableSeeder');
        $this->call('VersionsTableSeeder');
        $this->call('StudentsTableSeeder');
        $this->call('Academic_infosTableSeeder');
        $this->call('ExamsTableSeeder');
        $this->call('ResultsTableSeeder');

        $this->call('AdmissionsTableSeeder');
        $this->call('Academic_infos_tempTableSeeder');
        
    }
}
