@extends('master')
@section('title','Admission')
@section('styles')
<style>
    select{
        width:50%;
    }
#main{margin: 40px;}    
h3{color:#0F0; text-align: center; margin-top: 30px;}
h4{color:#636; margin-top: 40px;}
</style>
@endsection
@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger" style="margin-bottom:10px;">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul style="margin-left:20px;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div id="main">
<h3>Admission Form</h3>
<h4>Personal Information:</h4><br>
<form name="form1" method="post" action="/admissions" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <tr>
            <td>Student Name</td>
            <td><input type="text" id="stdname" placeholder="What your name?" name="name" size="30" value="{{old('name')}}"></td>
        </tr><br><br>
        <tr>
            <td>Father Name</td>
            <td><input type="text"  placeholder="Your father name." name="father_name" size="30" value="{{old('father_name')}}"></td>
        </tr><br><br>
        <tr>
            <td>Mother Name</td>
            <td><input type="text" placeholder="Your mother name." name="mother_name" size="30" value="{{old('mother_name')}}"></td>
        </tr><br><br>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="Male"/>Male
                <input type="radio" name="gender" value="Female"/>Female
            </td>
        </tr><br><br>
        <tr>
            <td>Date of Birth</td>
            <td><input id="dob" type="date" name="date_of_birth" value="{{old('date_of_birth')}}"></td>
        </tr><br><br>
        <tr>
            <td>Phone</td>
            <td><input type="text" placeholder="Your phone number?" name="phone" size="30" value="{{old('phone')}}"></td>
        </tr><br><br>
        <tr>
            <td>Email</td>
            <td><input type="email" placeholder="Your email address?" name="email" size="30" value="{{old('email')}}"></td>
        </tr><br><br>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="photo" placeholder="Choose File"></td>
        </tr><br><br>
    </table>
    <h4 style="color:#636;">Academic Information:</h4><br>
         <tr>
            <td>Exam</td>
            <td><select name="exam" id="select8">
                <option value="">Select</option>
                <option value="SSC/Dakhil">SSC/Dakhil</option>
                <option value="SSC(Vocational)">SSC(Vocational)</option>
                </select>
            </td>
        </tr><br>
        <tr><br>
          <td>Board</td>
          <td><select name="board" id="select9">
              <option value="Dhaka">Dhaka</option>
              <option value="Barisal">Barisal</option>
              <option value="Chittagong">Chittagong</option>
              <option value="Comilla">Comilla</option>
              <option value="Dinajpur">Dinajpur</option>
              <option value="Jessore">Jessore</option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Sylhet">Sylhet</option>
              <option value="Madrasha">Madrasha</option>
              <option value="Technical">Technical</option>
              <option value="DIBS(Dhaka)">DIBS(Dhaka)</option>
              </select>
          </td>
       </tr><br>
       <tr><br>
          <td>Year</td>
          <td>
              <select name="year" id="select10">
              @for($i=2016; $i>1993; $i--)
                <option value="{{$i}}">{{$i}}</option>
              @endfor
             </select>
           </td>
       </tr><br>
       <tr><br>
          <td>Roll </td>
          <td><input type="text" name="roll" id="textfield14" value="{{old('roll')}}"></td>
      </tr><br>
       <tr><br>
          <td>GPA</td>
          <td><input type="text" name="gpa" id="textfield14" value="{{old('gpa')}}"></td>
      </tr><br><br>
       <tr><br>
          <td><input type="submit" style="height:30px; width:120px;background:#060;">
          </td>
      </tr><br>
</form>
</div>
@endsection