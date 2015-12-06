<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicInfosTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_infos_temp', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('exam',45);
            $table->string('board',45);
            $table->string('year',45);
            $table->string('roll',45);
            $table->string('gpa',45);
            $table->integer('admission_id', false, true);
            $table->timestamps();
        
            $table->foreign('admission_id')
                  ->references('id')->on('admissions')
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
        Schema::drop('academic_infos_temp');
    }
}
