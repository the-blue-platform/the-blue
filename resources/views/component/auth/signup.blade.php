@extends('component.home.default')
<style type="text/css">
    body {
        color: #fff;
        background: #63738a;
        font-family: 'Roboto', sans-serif;
    }

    .form-control {
        height: 40px;
        box-shadow: none;
        color: #969fa4;
    }

    .form-control:focus {
        border-color: #5cb85c;
    }

    .form-control, .btn {
        border-radius: 3px;
    }

    .signup-form {
        width: 400px;
        margin: 0 auto;
        padding: 30px 0;
    }

    .signup-form h2 {
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }

    .signup-form h2:before, .signup-form h2:after {
        content: "";
        height: 2px;
        width: 30%;
        background: #d4d4d4;
        position: absolute;
        top: 50%;
        z-index: 2;
    }

    .signup-form h2:before {
        left: 0;
    }

    .signup-form h2:after {
        right: 0;
    }

    .signup-form .hint-text {
        color: #999;
        margin-bottom: 30px;
        text-align: center;
    }

    .signup-form form {
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .signup-form .form-group {
        margin-bottom: 20px;
    }

    .signup-form input[type="checkbox"] {
        margin-top: 3px;
    }

    .signup-form .btn {
        font-size: 16px;
        font-weight: bold;
        min-width: 140px;
        outline: none !important;
    }

    .signup-form .row div:first-child {
        padding-right: 10px;
    }

    .signup-form .row div:last-child {
        padding-left: 10px;
    }

    .signup-form a {
        color: #4aba70;
    }

    .signup-form a:hover {
        text-decoration: none;
    }

    .signup-form form a {
        color: #5cb85c;
        text-decoration: none;
    }

    .signup-form form a:hover {
        text-decoration: underline;
    }
</style>
@section('content')
    <div class="signup-form">
        <form action="{{route('auth.signup')}}" method="post">
            <h2>Register</h2>
            <p class="hint-text">The information platform focused on Asia for business and industry analysis
                professionals.</p>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6 {{$errors -> has('first_name') ? 'has-error' : ''}}"><input type="text"
                                                                                                     class="form-control"
                                                                                                     name="first_name"
                                                                                                     placeholder="First Name"
                                                                                                     required="required"
                                                                                                     value="{{Request::old('first_name') ? : ''}}">
                    </div>

                    <div class="col-xs-6 {{$errors -> has('last_name') ? 'has-error' : ''}}"><input type="text"
                                                                                                    class="form-control"
                                                                                                    name="last_name"
                                                                                                    placeholder="Last Name"
                                                                                                    required="required"
                                                                                                    value="{{Request::old('last_name') ? : ''}}">
                    </div>
                    @if ($errors -> has('first_name'))
                        <span class="help-block">{{ $errors -> first('first_name') }}</span>
                    @endif
                    @if ($errors -> has('last_name'))
                        <span class="help-block">{{ $errors -> first('last_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{$errors -> has('email') ? 'has-error' : ''}}">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required"
                       value="{{Request::old('email') ? : ''}}">
            </div>
            @if ($errors -> has('email'))
                <span class="help-block">{{ $errors -> first('email') }}</span>
            @endif
            <div class="form-group {{$errors -> has('password') ? 'has-error' : ''}}">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            @if ($errors -> has('password'))
                <span class="help-block">{{ $errors -> first('password') }}</span>
            @endif
            <div class="form-group {{$errors -> has('password_confirmation') ? 'has-error' : ''}}">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                       required="required">
            </div>
            @if ($errors -> has('password_confirmation'))
                <span class="help-block">{{ $errors -> first('password_confirmation') }}</span>
            @endif
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms
                        of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
            </div>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
        <div class="text-center">Already have an account? <a href="{{route('auth.signin')}}">Sign in</a></div>
    </div>
@stop