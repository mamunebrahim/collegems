@extends('master')
@section('title','Developer')

@section('styles')
@endsection

<style type="text/css"> 
.main{margin-top: 30px;}
.main_first{margin: 10px;}
.main_first h2{color:#5bb53b;}

</style>


@section('content')
<div class="main">
    <div class="main_first">
        <h2>Back-end Developer</h2>
        <div class="header">
            <div class="left_header">
              <img src="images/Abdullah Al Mamun.jpg" width="200" height="200" alt="Abdullah Al Mamun.jpg">
            </div>
            <div class="content">
                <a href="#"><h3 class="left_content">Abdullah Al Mamun</h3></a>
                <div class="middle_content">
                    B.Sc (Engg) in CSE<br>
                    Uttara University<br>
                </div>
                <div class="end_content">
                    Primary Skills: PHP, Laravel, MySQL, Database Design, JavaScript.<br>
                    Seconday Skills: HTML5, CSS3, jQuery, Photoshop, Illustrator.
                </div>
                <blockquote>Hi, My name is Mamun. I've worked mostly on the back-end of this   project but a little bit in the server-end too.</blockquote>
            </div>
        </div><br><br> 

        <h2>Front-end Developer</h2>
        <div class="footer">
            <div class="left_footer">
                <img  src="images/Sushanta Paul.jpg" width="200" height="200" alt="Sushanta Paul">
            </div>
            <div class="middle">
                <a href="#"><h3 class="left_middle">Sushanta Paul</h3></a>
                <div class="right_middle">
                    B.Sc (Engg) in CSE<br>
                    Uttara University<br>
                </div>
                <div class="end_middle">
                    Primary Skills: HTML5, CSS3, JavaScript/jQuery.<br>
                    Secondary Skills: PHP, MySQL, Photoshop, Illustrator.
                </div>
                 <blockquote>Hi, My name is Sushanta. I've worked mostly on the front-end of this project but a little bit in the front-end too.</blockquote>
            </div>
        </div>
   </div>
</div>
@endsection