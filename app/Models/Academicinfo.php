<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academicinfo extends Model{
   
    protected $table = "academic_infos";

    protected $fillable = [
    	'exam',
    	'board',
    	'year',
    	'roll',
    	'gpa',
    	'students_id',	
    ];

    public function student() {
        return $this->belongsTo('App\Models\Student');
    }
}
