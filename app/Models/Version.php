<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Version extends Model{

	protected $table = "versions";

	protected $fillable = ['title'];

  	public function student() {
  		return $this->hasMany('App\Models\Student');
  	}

}