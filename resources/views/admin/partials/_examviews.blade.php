@extends('admin.dashboard')

@section('styles')
@endsection

@section('content')
<?php $i = 0 ?>
<h4>Exams</h4>
<table width="100%" border="1">
    <tr style="background-color:#06F;">
        <td width="20%">S.N.</td>
        <td width="20%">Exam Title</td>
        <td width="20%">Subject</td>
        <td width="17%">Date</td>
        <td width="17%"></td>
    </tr>
    @foreach($exams as $exam)
    <tr>
        <td width="20%">{{++$i}}</td>
        <td width="20%"><a href="/admin/exams/{{$exam->id}}/results">{{$exam->title}}</a></td>
        <td width="20%">{{$exam->subject}}</td>
        <td width="17%">{{$exam->date}}</td>
        <td width="17%">
             <form method="DELETE" action="/admin/exams/{{$exam->id}}/">
                <button type="submit">X</button>
            </form>
       </td>
    </tr>
     @endforeach 
</table><br>
    
        <a href="/admin/exams/create"><input type="button" value="Add"></a>
@endsection
 