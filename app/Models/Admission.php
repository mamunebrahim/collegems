<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model {

	protected $table = "admissions";

    protected $fillable = [
    	'name',
    	'father_name',
    	'mother_name',
    	'gender',
    	'date_of_birth',
    	'phone',
    	'email',
        'photo'
    ];

    public function academicInfo() {
        return $this->hasMany('App\Models\Academicinfotemp');
    }

}
