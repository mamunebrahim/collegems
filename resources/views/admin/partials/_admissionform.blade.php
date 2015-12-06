@extends('admin.dashboard')

@section('styles')
@endsection

@section('content')
<h3 style="color:#0F0;">Admission Form</h3>
<h4 style="color:#636;">Personal Information:</h4>
<form name="form1" method="post" action="" style="float:left">
    <table>
        <tr>
            <td>Student Name</td>
            <td><input type="text" id="stdname" placeholder="What your name?" name="name" value="{{$admission->name}}"></td>
        </tr>
        <tr>
            <td>Father Name</td>
            <td><input type="text"  placeholder="Your father name." name="father_name" value="{{$admission->father_name}}"></td>
        </tr>
        <tr>
            <td>Mother Name</td>
            <td><input type="text" placeholder="Your mother name." name="mother_name" value="{{$admission->mother_name}}"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="male" <?php if($admission->gender === 'Male') echo 'checked' ?>/>Male
                <input type="radio" name="gender" value="female" <?php if($admission->gender === 'Female') echo 'checked' ?> />Female
            </td>
        </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input id="dob" type="text" name="date_of_birth"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" placeholder="Your phone number?" name="phone" value="{{$admission->phone}}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" placeholder="Your email address?" name="email" value="{{$admission->email}}"></td>
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
                        <?php if($admission->academicinfo->exam == 'SSC/Dakhil') echo 'selected' ?>
                    >SSC/Dakhil</option>
                    <option value="SSC(Vocational)"
                        <?php if($admission->academicinfo->exam == 'SSC(Vocational)') echo 'selected' ?>
                    >SSC(Vocational)</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Board</td>
            <td><select name="board">
                <option value="Dhaka"
                    <?php if($admission->academicinfo->board === 'Dhaka') echo 'selected'?>
                >Dhaka</option>
                <option value="Barisal"
                    <?php if($admission->academicinfo->board === 'Barisal') echo 'selected'?>
                >Barisal</option>
                <option value="Chittagong"
                    <?php if($admission->academicinfo->board === 'Chittagong') echo 'selected'?>
                >Chittagong</option>
                <option value="Comilla"
                    <?php if($admission->academicinfo->board === 'Comilla') echo 'selected'?>
                >Comilla</option>
                <option value="Dinajpur"
                    <?php if($admission->academicinfo->board === 'Dinajpur') echo 'selected'?>
                >Dinajpur</option>
                <option value="Jessore"
                    <?php if($admission->academicinfo->board === 'Jessore') echo 'selected'?>
                >Jessore</option>
                <option value="Rajshahi"
                    <?php if($admission->academicinfo->board === 'Rajshahi') echo 'selected'?>
                >Rajshahi</option>
                <option value="Sylhet"
                    <?php if($admission->academicinfo->board === 'Sylhet') echo 'selected'?>
                >Sylhet</option>
                <option value="Madrasha"
                    <?php if($admission->academicinfo->board === 'Madrasha') echo 'selected'?>
                >Madrasha</option>
                <option value="Technical"
                    <?php if($admission->academicinfo->board === 'Technical') echo 'selected'?>
                >Technical</option>
                <option value="DIBS"
                    <?php if($admission->academicinfo->board === 'DIBS') echo 'selected'?>
                >DIBS(Dhaka)</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Year</td>
        <td><select name="year">
            @for($i=1990; $i<2016; $i++)
                <option value="{{$i}}"
                    <?php if($admission->academicinfo->year == $i) echo 'selected' ?>
                >{{$i}}</option>
            @endfor
        </select>
    </td>
</tr>
<tr>
    <td>Roll </td>
    <td><input type="text" name="roll" id="roll" value="{{$admission->academicinfo->roll}}"></td>
</tr>
<tr>
    <td>GPA </td>
    <td><input type="text" name="gpa" id="gpa" value="{{$admission->academicinfo->gpa}}"></td>
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
            var date = new Date('{{$admission->date_of_birth}}');
            document.getElementById('dob').value = date.getFullYear() + '-' + date.getMonth() + '-' + date.getDate();
        })();
    </script>
@endsection