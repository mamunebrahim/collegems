@extends('master')
@section('title','Gallery')

@section('styles')
@endsection

@section('content')

<style type="text/css">
h2 {text-align: center; margin-top: 10px; color:#5bb53b;}    
.main{ width:100%; height:auto;}

.img { margin: 13px; padding: 13px;border: 1px solid #0000ff; height: auto; width: auto; float: left;text-align: center;}    

.img img { display: inline; margin: 6px; border: 1px solid #ffffff;}

.img a:hover img { border: 1px solid #0000ff;}

.desc { text-align: center;font-weight: normal; width: 120px; margin: 5px;}

</style>



<h2>Image Gallery</h2>
<div class="main">
        <div class="img">
         <a href="#"><img src="{{asset('images/college1.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college2.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college3.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college4.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college5.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college6.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college7.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college8.jpg')}}" alt="college picture"width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college9.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
        <a href="#"><img src="{{asset('images/college10.jpg')}}" alt="college picture"width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college11.jpg')}}" alt="college picture"width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college8.jpg')}}" alt="college picture"width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college3.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
        <div class="img">
         <a href="#"><img src="{{asset('images/college4.jpg')}}" alt="college picture" width="130" height="100"></a>
         <div class="desc">Add a description of the image here</div>
        </div>
    </div>

@endsection