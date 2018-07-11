@extends('component.home.default')

@section('content')
    <div class="container">
        <form class="well form-horizontal" action="{{route('auth.signup')}}" method="post" id="contact_form">
            <fieldset>
                <div class="form-group  {{$errors -> has('username') ? 'has-error' : ''}}">
                    <label class="col-md-4 control-label">Username</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="username" placeholder="Username" class="form-control" type="text"
                                   value="{{Request::old('username') ? : ''}}">
                        </div>
                    </div>
                    @if ($errors -> has('username'))
                        <span class="help-block">{{ $errors -> first('username') }}</span>
                    @endif
                </div>

                <div class="form-group  {{$errors -> has('password') ? 'has-error' : ''}}">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="password" placeholder="Password" class="form-control" type="password">
                        </div>
                    </div>
                    @if ($errors -> has('password'))
                        <span class="help-block">{{ $errors -> first('password') }}</span>
                    @endif
                </div>

                <div class="form-group  {{$errors -> has('email') ? 'has-error' : ''}}">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail Address" class="form-control" type="text"
                                   value="{{Request::old('email') ? : ''}}">
                        </div>
                    </div>
                    @if ($errors -> has('email'))
                        <span class="help-block">{{ $errors -> first('email') }}</span>
                    @endif
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <button type="submit" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT
                            <span
                                    class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{Session::token()}}">
            </fieldset>
        </form>
    </div>
@stop