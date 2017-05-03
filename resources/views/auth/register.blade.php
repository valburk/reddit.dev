@extends('layouts.master')
@section('content')
<!--     <form method="POST" class= "text" action="{{ action('Auth\AuthController@postRegister') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            Email
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>
        <div class="form-group">
            Username
            <input type="username" name="username" value="{{ old('username') }}" class="form-control">
        </div>
        <div class="form-group">
            Password
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            Confirm Passord
            <input type="password" name="confirm" class="form-control">
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form> -->



    <div class="text-center" style="padding:50px 0">
    <div class="logo">register</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="register-form" class="text-left" action="{{ action('Auth\AuthController@postRegister') }}">
        {!! csrf_field() !!}
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="reg_username" class="sr-only">Email address</label>
                        <input type="text" class="form-control" id="reg_username" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="reg_password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="reg_password" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                        <input type="password" class="form-control" id="reg_password_confirm" name="confirm" placeholder="confirm password">
                    </div>
                    
                    <div class="form-group">
                        <label for="reg_email" class="sr-only">Email</label>
                        <input type="text" class="form-control" id="reg_email" name="email" placeholder="email">
                    </div>

                    
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>already have an account? <a href="/auth/login">login here</a></p>
            </div>
        </form>
    </div>
@stop