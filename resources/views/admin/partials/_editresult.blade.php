@extends('admin.dashboard')

@section('styles')
@endsection

@section('content')

<h2>Edit Result</h2><br>
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
<form name="form1" method="post" action="">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <table>
         <tr>
            <td><input type="text" name="roll" placeholder="Roll"></td>
         </tr>  
         <tr>  
             <td><input type="text" name="name" placeholder="Name"></td>
         </tr>
         <tr>  
             <td><input type="text" name="mark" placeholder="Mark"></td>
         </tr>
         <tr>
             <td><input type="submit">Save</td>
         </tr>
  </table>
</form>

@endsection



