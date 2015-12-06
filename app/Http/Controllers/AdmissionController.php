<?php namespace App\Http\Controllers;

use DateTime;
use App\Http\Requests\AdmissionRequest;
use App\Models\Admission;
use App\Models\Academicinfotemp;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissions = Admission::all();
        return view("admin.partials._admissionviews")->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.partials._admissionform");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdmissionRequest $request)
    {
        $input = $request->all();

        $input['photo'] = 'fileStorage/' . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $input['photo']);
        
        $admission = Admission::create($input);

        $info['exam']   =  $input['exam'];
        $info['board']  =  $input['board'];
        $info['roll']   =  $input['roll'];
        $info['year']   =  $input['year'];
        $info['gpa']    =  $input['gpa'];
        $info['admission_id'] = $admission->id;
        Academicinfotemp::create($info);
        
        return "Saved!";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        $admission['academicinfo'] = $admission->academicInfo()->first();
        return view("admin.partials._admissionform")->with('admission', $admission);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("admin.partials._admissionform");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        dd($admission);
        //$admission->delete();
    }
}
