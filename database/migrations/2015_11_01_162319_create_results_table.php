<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('mark',40);
            $table->string('gp',40);
            $table->integer('exam_id', false, true); 
            $table->integer('student_id', false, true);           
            $table->timestamps();
        
            $table->foreign('exam_id')
                 ->references('id')->on('exams')
                 ->onDelete('cascade');
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
        Schema::drop('results');
    }
}
