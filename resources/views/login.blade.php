@extends('master')
@section('title','Login')
@section('styles')
@endsection
<style type="text/css">
.login { margin-top: 90px; margin: 90px; text-align: center;} 
.login h2{color: #5bb53b;}


</style>
@section('content')
<div class="login">
    <h2>Login Form</h2><br>
    <form method="post" action="/auth/login">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
             <tr><br>
                <td>E-mail</td>
                <td><input type="text" name="email" id="textfield" size="30"></td>
            </tr><br>
             <tr><br>
                <td>Password</td>
                <td><input type="password" name="password" id="textfield2" size="30"></td>
             </tr><br>
             <tr><br>
                <td><input type="checkbox" name="remember_me" id="checkbox">
                    Remember Me</td>
             </tr><br>
              <tr><br>
                 <td><a href="#"><input type="submit" name="button" id="button" value="Login"></a>
                     <a href="#"><input name="button2" type="submit" id="button2" value="Forget Your Password?"></a></td>
             </tr><br>
     </form>
</div>

@endsection