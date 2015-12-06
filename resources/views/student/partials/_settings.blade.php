@extends('student.dashboard')

@section('styles')
@endsection

@section('content')


<h3>Settings</h3>
<h4>Change Student Password:</h4><br>
<form name="form1" method="post" action="">
    <label for="textfield"></label>
    <input type="text" name="textfield" placeholder="Type old password"><br><br>

    <label for="textfield2"></label>
    <input type="text" name="textfield2"placeholder="Type new password"><br><br>

    <label for="textfield3"></label>
    <input type="text" name="textfield3" placeholder="Type old password again"><br><br>

    <input type="submit" name="button" value="Save">
</form>

@endsection