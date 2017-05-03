@extends('layouts.master')
@section('content')
    <!-- <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            Email
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>
        <div class="form-group">
            Password
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form> -->



    <div class="text-center" style="padding:50px 0">
    

     <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
        {!! csrf_field() !!}
<!--         <label>Username</label>
        <input type="text" id = "box1" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit"> -->
   <div class="text-center" style="padding:50px 0">
    <div class="logo">Login</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="login-form" class="text-left">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="lg_username" class="sr-only">Email</label>
                        <input type="text" class="form-control" id="lg_username" name="email" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="lg_password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
                    </div>
                    <div class="form-group login-group-checkbox">
                        <input type="checkbox" id="lg_remember" name="lg_remember">
                        <label for="lg_remember">remember</label>
                    </div>
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>forgot your password? <a href="#">click here</a></p>
                <p>new user? <a href="/auth/register">create new account</a></p>
            </div>
        </form>
    </div>
            
            <!-- <div class="etc-login-form">
                <p>forgot your password? <a href="#">click here</a></p>
                <p>new user? <a href="#">create new account</a></p>
            </div> -->
        </form>
    </div>




    </form>
    <script src="js/login.js"></script>
@stop