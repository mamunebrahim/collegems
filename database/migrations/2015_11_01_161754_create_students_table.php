<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('roll', 50);
            $table->string('name', 50);
            $table->string('father_name', 50);
            $table->string('mother_name', 50);
            $table->string('gender', 60);
            $table->string('religion', 50);
            $table->dateTime('date_of_birth');
            $table->string('present_address', 200);
            $table->string('permanent_address', 200);
            $table->string('phone',20);
            $table->string('photo',50);
            $table->integer('user_id', false, true);
            $table->integer('version_id', false, true);
            $table->timestamps();
       
            $table->foreign('user_id')
                 ->references('id')->on('users')
                 ->onDelete('cascade');

           $table->foreign('version_id')
                 ->references('id')->on('versions')
                 ->onDelete('cascade'); 


       });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
