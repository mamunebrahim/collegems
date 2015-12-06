<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function overviews() {
        return view("admin.partials._overviews");
    }

    public function settings() {
        return view("admin.partials._settings");
    }

    public function changePassword(Requests $requests) {
    	
    }

}
