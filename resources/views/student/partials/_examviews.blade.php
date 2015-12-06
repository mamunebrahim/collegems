@extends('student.dashboard')

@section('styles')
@endsection

@section('content')
<h4>Exams</h4><br>

<table width="100%" border="1">
    <tr style="background-color:#06F;">
        <td width="20%">S.N.</td>
        <td width="20%">Exam Title</td>
        <td width="20%">Subject</td>
        <td width="17%">Date</td>
    </tr>
    <tr>
        <td width="20%">1</td>
        <td width="20%"><a href ="/student/exams/results">HSC 1st Year</a></td>
        <td width="20%">Bangla 1st paper</td>
        <td width="17%">22-11-15</td>
    </tr>

</table>
    
@endsection
