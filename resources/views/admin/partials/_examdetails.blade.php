@extends('admin.dashboard')

@section('styles')
@endsection

@section('content')

<h2>Exam Detail</h2><br>
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
<form name="form1" method="post" action="/admin/exams/">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <table>
         <tr>
            <td><input type="text" name="title" placeholder="Exam Title"></td>
         </tr> 
          
         <tr>  
             <td><select name="subject" id="select">
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
              </td>
         </tr>   
         <tr>  
             <td><input type="text" name="total_marks" placeholder="Mark Range"></td>
         </tr>
         <tr>
             <td><input type="date" name="date"></td>
         </tr>
         <tr>
             <td><input type="submit" name="button" value="Save"></td>
         </tr>
  </table>
</form>

@endsection



