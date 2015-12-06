<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller {
    
    public function index(){
        return view('home')->with("pageTitle", "Uttara College");
    }


    public function gallery(){
        return view("gallery")->with("pageTitle", "Gallery");
    }

    public function admission() {
        return view('admission')->with("pageTitle", "Admission");
    }

    public function contact() {
        return view('contact')->with("pageTitle", "Contact");
    }

    public function developers() {
        return view('developers')->with("pageTitle", "Developer");
    }
    
    public function login() {
        return view('login')->with("pageTitle", "Login");
    }
    
}
