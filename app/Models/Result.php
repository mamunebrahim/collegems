<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model{

	protected $table = "results";

	protected $fillable = ['mark', 'gp','exams_id','students_id'];

    public function student(){
        return $this->belongsTo('App\Models\Student');
    }

    public function exam(){
        return $this->belongsTo('App\Models\Exam');
    }
}
