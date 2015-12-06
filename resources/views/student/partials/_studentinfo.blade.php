@extends('student.dashboard')

@section('styles')

@endsection

@section('content')

<h3 style="color:#0F0;">Admission Form</h3>
<h4 style="color:#636;">Personal Information:</h4>
<form name="form1" method="post" action="" style="float:left">
    <table>
        <tr>
            <td>Student Name</td>
            <td><input type="text" id="stdname" placeholder="What your name?" name="name" value="{{$student->name}}"></td>
        </tr>
        <tr>
            <td>Father Name</td>
            <td><input type="text"  placeholder="Your father name." name="father_name" value="{{$student->father_name}}"></td>
        </tr>
        <tr>
            <td>Mother Name</td>
            <td><input type="text" placeholder="Your mother name." name="mother_name" value="{{$student->mother_name}}"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="male" <?php if($student->gender === 'Male') echo 'checked' ?>/>Male
                <input type="radio" name="gender" value="female" <?php if($student->gender === 'Female') echo 'checked' ?> />Female
            </td>
        </tr>
        <tr>
            <td>Religion</td>
            <td><input type="text" placeholder="Your mother name." name="religion" value="{{$student->religion}}"></td>
        </tr>
        <tr>
            <td>Version</td> 
            <td><select name="version" id="version">
                <option>Select</option>
                <option value="Bangla"
                <?php if($student->version === "Bangla") echo 'selected' ?>>Bangla
                </option>
                <option value="English"
                <?php if($student->version === "English") echo 'selected' ?>>English
                </option>
             </select>
            </td>
        </tr>
         <tr>
              <td>Present Address</td>
              <td><textarea name="present_address"cols="32" rows="6" placeholder="Your present address?">
              	{{$student->present_address}}</textarea></td>
         </tr> 
          <tr>
              <td>Permanent Address</td>
              <td><textarea name="permanent address" cols="32" rows="6" placeholder="Your permanent address?">{{$student->permanent_address}}</textarea></td>
          </tr>
          <tr>
             <td>Date of Birth</td>
             <td><input id="dob" type="date" name="date_of_birth"></td>
         </tr>
          <tr>
              <td>Phone</td>
              <td><input type="text" placeholder="Your phone number?" name="phone" value="{{$student->phone}}"></td>
          </tr>
          <tr>
               <td>Email</td>
               <td><input type="email" placeholder="Your email address?" name="email" value="{{$student->email}}"></td>
          </tr>
          <tr>
               <td>Photo</td>
               <td><input type="file" name="photo" placeholder="Choose File"></td>
           </tr>
        </table>

        <h4 style="color:#636;">Academic Information:</h4>
        <table>
            <tr>
                <td>Exam</td>
                <td><select name="exam">
                    <option>Select</option>
                    <option value="S.S.C/Dakhil"
                        <?php if($student->academicinfo->exam == 'S.S.C/Dakhil') echo 'selected' ?>
                    >SSC/Dakhil</option>
                    <option value="SSC(Vocational)"
                        <?php if($student->academicinfo->exam == 'SSC(Vocational)') echo 'selected' ?>
                    >SSC(Vocational)</option>
                   </select>
               </td>
           </tr>
        <tr>
            <td>Board</td>
            <td><select name="board">
                <option value="Dhaka"
                    <?php if($student->academicinfo->board === 'Dhaka') echo 'selected'?>
                >Dhaka</option>
                <option value="Barisal"
                    <?php if($student->academicinfo->board === 'Barisal') echo 'selected'?>
                >Barisal</option>
                <option value="Chittagong"
                    <?php if($student->academicinfo->board === 'Chittagong') echo 'selected'?>
                >Chittagong</option>
                <option value="Comilla"
                    <?php if($student->academicinfo->board === 'Comilla') echo 'selected'?>
                >Comilla</option>
                <option value="Dinajpur"
                    <?php if($student->academicinfo->board === 'Dinajpur') echo 'selected'?>
                >Dinajpur</option>
                <option value="Jessore"
                    <?php if($student->academicinfo->board === 'Jessore') echo 'selected'?>
                >Jessore</option>
                <option value="Rajshahi"
                    <?php if($student->academicinfo->board === 'Rajshahi') echo 'selected'?>
                >Rajshahi</option>
                <option value="Sylhet"
                    <?php if($student->academicinfo->board === 'Sylhet') echo 'selected'?>
                >Sylhet</option>
                <option value="Madrasha"
                    <?php if($student->academicinfo->board === 'Madrasha') echo 'selected'?>
                >Madrasha</option>
                <option value="Technical"
                    <?php if($student->academicinfo->board === 'Technical') echo 'selected'?>
                >Technical</option>
                <option value="DIBS"
                    <?php if($student->academicinfo->board === 'DIBS') echo 'selected'?>
                >DIBS(Dhaka)</option>
               </select>
           </td>
      </tr>
    <tr>
        <td>Year</td>
        <td><select name="year">
            @for($i=1990; $i<2016; $i++)
                <option value="{{$i}}"
                    <?php if($student->academicinfo->year == $i) echo 'selected' ?>
                >{{$i}}</option>
            @endfor
           </select>
       </td>
   </tr>
<tr>
    <td>Roll </td>
    <td><input type="text" name="roll" id="roll" value="{{$student->academicinfo->roll}}"></td>
</tr>
<tr>
    <td>GPA </td>
    <td><input type="text" name="gpa" id="gpa" value="{{$student->academicinfo->gpa}}"></td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="Save" style="height:30px; width:120px;background:#060;">
</td>
</tr>
</table>
</form>
 <div style="float:right">
    <img src="{{asset($admission->photo)}}" height="300px">
</div>

@endsection

@section('scripts')
    <script type="text/javascript">
        (function(){
            var date = new Date('{{$student->date_of_birth}}');
            document.getElementById('dob').value = date.getFullYear() + '-' + date.getMonth() + '-' + date.getDate();
        })();
    </script>
@endsection
