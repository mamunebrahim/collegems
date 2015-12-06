<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	protected $table = "students";

    protected $fillable = [
    	'student_id',
    	'name',
    	'father_name',
    	'mother_name',
    	'gender',
    	'religion',
    	'date_of_birth',
    	'present_address',
    	'permanent_address',
    	'phone',
    	'users_id',
    	'versions_id',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function result() {
        return $this->hasMany('App\Models\Result');
    }

    public function version() {
        return $this->belongsTo('App\Models\Version');
    }

    public function academicInfo() {
        return $this->hasMany('App\Models\Academicinfo');
    }
}
