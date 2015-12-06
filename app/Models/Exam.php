<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model {
    
    protected $table = "exams";

    protected $fillable = ['title', 'subject',  'total_marks', 'date'];

    public function results(){
        return $this->hasMany('App\Models\Result');
    }

}
