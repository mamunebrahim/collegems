@extends('student.dashboard')

@section('styles')
@endsection

@section('content')
<h3 style="color:blue;">Results</h3><br>
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



<form>
   <input type="hidden" name="_token" value="{{csrf_token()}}">
    <b>Exam Title</b>
    <input type="text" name="exam title">
    <b>Subject</b>
    <select name="subject" id="select">
                  <option value="">Subject</option>
                  <option value="Bangla 1st Paper">Bangla 1st Paper</option>
                  <option value="Bangla 2nd Paper">Bangla 2nd Paper</option>
                  <option value="English 1st Paper">English 1st Paper</option>
                  <option value="English 2nd Paper">English 2nd Paper</option>
                  <option value="Mathematics">Mathematics</option>
                  <option value="Physics">Physics</option>
                  <option value="Chemistry">Chemistry</option>
                  <option value="Biology">Biology</option>
                  <option value="ICT">ICT</option>
                  <option value="Agriculture 1st paper">Agriculture 1st paper</option>
                  <option value="Agriculture 2nd paper">Agriculture 2nd paper</option>
    </select>
    <b>Mark Range</b>
    <input type="text" name="mark range">
    <b>Date</b>
    <input type="date" name="date">
</form><br>
<table width="100%" border="1">
    <tr style="background-color:#06F;">
        <td width="15%">Roll</td>
        <td width="21%">Name</td>
        <td width="20%">Mark</td>
        <td width="17%">G.P.</td>
    </tr>

    @foreach($results as $result)
    <tr>
        <td width="15%">{{$result->roll}}</td>
        <td width="21%">{{$result->name}}</td>
        <td width="20%">{{$result->mark}}</td>
        <td width="17%">{{$result->gp}}</td>
    </tr>
    @endforeach

</table>


@endsection