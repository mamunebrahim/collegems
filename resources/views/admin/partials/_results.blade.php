@extends('admin.dashboard')

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
    <input type="text" name="exam_title" value="{{$exam->title}}">
    <b>Subject</b>
    <select name="subject" id="select">
        <option value="">Subject</option>
        <option <?php if($exam->subject == "Bangla 1st Paper") echo "selected "?>
                value="Bangla 1st Paper">Bangla 1st Paper</option>
        <option <?php if($exam->subject == "Bangla 2nd Paper") echo "selected "?>
                value="Bangla 2nd Paper">Bangla 2nd Paper</option>
        <option <?php if($exam->subject == "English 1st Paper") echo "selected "?>
                value="English 1st Paper">English 1st Paper</option>
        <option <?php if($exam->subject == "English 2nd Paper") echo "selected "?>
                value="English 2nd Paper">English 2nd Paper</option>
        <option <?php if($exam->subject == "Mathematics") echo "selected "?>
                value="Mathematics">Mathematics</option>
        <option <?php if($exam->subject == "Physics") echo "selected "?>
                value="Physics">Physics</option>
        <option <?php if($exam->subject == "Chemistry") echo "selected "?>
                value="Chemistry">Chemistry</option>
        <option <?php if($exam->subject == "Biology") echo "selected "?>
                value="Biology">Biology</option>
        <option <?php if($exam->subject == "ICT") echo "selected "?>
                value="ICT">ICT</option>
        <option <?php if($exam->subject == "Agriculture 1st paper") echo "selected "?>
                value="Agriculture 1st paper">Agriculture 1st paper</option>
        <option <?php if($exam->subject == "Agriculture 2nd paper") echo "selected "?>
                value="Agriculture 2nd paper">Agriculture 2nd paper</option>
    </select>
    <b>Mark Range</b>
    <input type="text" name="mark_range" value="{{$exam->total_marks}}">
    <b>Date</b>
    <input type="date" name="date" id="examdate">
</form><br>
<table width="100%" border="1">
    <tr style="background-color:#06F;">
        <td width="15%">Roll</td>
        <td width="21%">Name</td>
        <td width="20%">Mark</td>
        <td width="17%">G.P.</td>
        <td width="27%">Options</td>
    </tr>

    @foreach($results as $result)
    <tr>
        <td width="15%">{{$result->roll}}</td>
        <td width="21%">{{$result->name}}</td>
        <td width="20%">{{$result->mark}}</td>
        <td width="17%">{{$result->gp}}</td>
        <td width="27%"><a href="/admin/exams/{{$exam->id}}/results/{{$result->id}}/edit/">Edit</a><a href="#">Delete</a></td>
    </tr>
    @endforeach

</table><br>



<form action="/admin/exams/{{$exam->id}}/results" method="POST">
    <input type="text" name="roll" placeholder="Roll">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="mark" placeholder="Mark">
    <input type="button" value="Add">
</form><br>
<form>
    <input type="button" value="Update">
    <input type="button" value="Print">
</form>


@endsection


@section('scripts')
    <script type="text/javascript">
        (function(){
            var date = new Date('{{$exam->date}}');
            document.getElementById('examdate').value = date.getFullYear() + '-' + date.getMonth() + '-' + date.getDate();
        })();
    </script>
@endsection