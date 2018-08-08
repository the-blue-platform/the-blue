<style type="text/css">
    body {
        color: #999;
        background: #f5f5f5;
        font-family: 'Varela Round', sans-serif;
    }

    .form-control {
        box-shadow: none;
        border-color: #ddd;
    }

    .form-control:focus {
        border-color: #4aba70;
    }

    .login-form {
        width: 350px;
        margin: 0 auto;
        padding: 30px 0;
    }

    .login-form form {
        color: #434343;
        border-radius: 1px;
        margin-bottom: 15px;
        background: #fff;
        border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h4 {
        text-align: center;
        font-size: 22px;
        margin-bottom: 20px;
    }

    .login-form .avatar {
        color: #fff;
        margin: 0 auto 30px;
        text-align: center;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        z-index: 9;
        background: #4aba70;
        padding: 15px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    .login-form .avatar i {
        font-size: 62px;
    }

    .login-form .form-group {
        margin-bottom: 20px;
    }

    .login-form .form-control, .login-form .btn {
        min-height: 40px;
        border-radius: 2px;
        transition: all 0.5s;
    }

    .login-form .close {
        position: absolute;
        top: 15px;
        right: 15px;
    }

    .login-form .btn {
        background: #4aba70;
        border: none;
        line-height: normal;
    }

    .login-form .btn:hover, .login-form .btn:focus {
        background: #42ae68;
    }

    .login-form .checkbox-inline {
        float: left;
    }

    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }

    .login-form .forgot-link {
        float: right;
    }

    .login-form .small {
        font-size: 13px;
    }

    .login-form a {
        color: #4aba70;
    }
</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@extends('component.base.base')
@section('content')
    <div class="login-form">
        <form action="{{route('auth.signin')}}" method="post">
            <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
            <h4 class="modal-title">Login to Your Account</h4>
            <div class="form-group {{$errors -> has('email') ? 'has-error' : ''}}">
                <input type="text" class="form-control" name="email" placeholder="Email" required="required"
                       value="{{Request::old('email') ? : ''}}">
            </div>
            @if ($errors -> has('username'))
                <span class="help-block">{{ $errors -> first('username') }}</span>
            @endif
            <div class="form-group {{$errors -> has('password') ? 'has-error' : ''}}">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            @if ($errors -> has('password'))
                <span class="help-block">{{ $errors -> first('password') }}</span>
            @endif
            <div class="form-group small clearfix">
                <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>
            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
        <div class="text-center small">Don't have an account? <a href="{{route('auth.signup')}}">Sign up</a></div>
    </div>
@stop