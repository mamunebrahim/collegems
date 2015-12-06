<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        DB::table('users')->delete();

        User::create([
            'email' => 'mamun01939545515@gmail.com',
            'role'  => 'admin',
            'password' => bcrypt('collegesystem')
        ]);

        User::create([
            'email' => 'student1@gmail.com',
            'role'  => 'student',
            'password' => bcrypt('collegesystem')
        ]);

        User::create([
            'email' => 'student2@gmail.com',
            'role'  => 'student',
            'password' => bcrypt('collegesystem')
        ]);

        User::create([
            'email' => 'student3@gmail.com',
            'role'  => 'student',
            'password' => bcrypt('collegesystem')
        ]);
    }
}

