<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academicinfotemp extends Model{
    
    protected $table = "academic_infos_temp";

    protected $fillable = [
    	'exam',
    	'board',
    	'year',
    	'roll',
    	'gpa',
    	'admission_id',
    	
    ];

    public function admision() {
        return $this->belongsTo('App\Models\Admission');
    }

}
