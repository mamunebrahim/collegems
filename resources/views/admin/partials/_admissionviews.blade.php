@extends('admin.dashboard')

@section('styles')
@endsection

@section('content')
<h4>Admission Requests</h4>

<form><br>
<b>Search</b><input type="search" name="search">
</form><br>
<table width="100%" border="1">
    <tr style="background-color:#06F;">
        <td width="20%">Name</td>
        <td width="20%">Father Name</td>
        <td width="20%">Mother Name</td>
        <td width="17%">Gender</td>
        <td width="27%">Phone No.</td>
        <td width="17%"></td>
        <td width="17%"></td>
    </tr>
    @foreach($admissions as $admission)
    <tr>
        <td width="20%"><a href="admissions/{{$admission->id}}">{{$admission->name}}</a></td>
        <td width="20%">{{$admission->father_name}}</td>
        <td width="20%">{{$admission->mother_name}}</td>
        <td width="10%">{{$admission->gender}}</td>
        <td width="20%">{{$admission->phone}}</td>
        <td width="25%">
            <form method="DELETE" action="/admin/admissions/{{$admission->id}}/">
                <button type="submit">Ok</button>
            </form>
        </td>
        <td width="25%">
            <form method="DELETE" action="/admin/admissions/{{$admission->id}}/">
                <button type="submit">X</button>
            </form>
        </td>
    </tr>
    @endforeach
     
</table>
@endsection
