@extends('admin.dashboard')

@section('styles')
@endsection

@section('content')
<h3>Settings</h3>
<h4>Change Admin Password:</h4><br>
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


<form name="form1" method="post" action="/admin/passwordchange">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <label for="textfield"></label>
    <input type="text" name="textfield" placeholder="Type old password"><br><br>

    <label for="textfield2"></label>
    <input type="text" name="textfield2"placeholder="Type new password"><br><br>

    <label for="textfield3"></label>
    <input type="text" name="textfield3" placeholder="Type old password again"><br><br>

    <input type="submit" name="button" value="Save">
</form>
@endsection