<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_infos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('exam',45);
            $table->string('board',45);
            $table->string('year',45);
            $table->string('roll',45);
            $table->string('gpa',45);
            $table->integer('student_id', false, true);
            $table->timestamps();
        
            $table->foreign('student_id')
                 ->references('id')->on('students')
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
        Schema::drop('academic_infos');
    }
}
