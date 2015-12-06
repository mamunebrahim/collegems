@extends('master')
@section('title','Contact')
@section('styles')
@endsection

<style type="text/css">
#contact_us{ margin-top: 40px; margin: 10px;}    
#contact_left{margin-top: 40px;}

#contact_left h2 {color:#5bb53b;}    
#contact_left p {color:#333;}

</style>
@section('content')
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

<div id="contact_us">
    <div id="contact_left">
        <h2>Contact Us</h2><br>
        <p>Uttara College,Dhaka.</p>
        <p> Road:16,Sector:6,Uttara,Dhaka-1230,Bangladesh.</p>
        <p>Phone: +8807-67773778,FAX:+8807-6777377.</p><br>
        <form action="#" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <label>Name:</label>
            <input type="text" name="name" placeholder="your name?" size="40" value="{{old('name')}}" />
            <br /><br>
            <label>E-mail:</label>
            <input type="text" name="email" placeholder="your email?" size="40" value="{{old('email')}}"/>
            <br /><br />
            <label>Message Details</label><br />
            <textarea rows="20" cols="80" name="message" style="margin-top:10px" value="{{old('message')}}"></textarea><br /><br>
            <input type="submit" name="submit" value="Submit" style="margin-right:20px"/>
            <input type="reset" value="Reset"/>
        </form>
    </div>
</div>
@endsection