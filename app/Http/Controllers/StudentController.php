<?php namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function student() {
        return view("student.dashboard");
    }

    public function exams() {
        return view("student.partials._examviews");
    }
    
    public function results() {
        return view("student.partials._results");
    }


    public function student_info() {
    	$student = Student::find(1);
        $student['academicinfo'] = $student->academicInfo()->first();
        return view("student.partials._studentinfo")->with('student', $student);

    }

    public function settings() {
        return view("student.partials._settings");
    }

}
