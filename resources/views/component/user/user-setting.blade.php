<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title">Profile information</h6>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <form action="/user/profile" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 {{$errors -> has('first_name') ? 'has-error' : ''}}">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" class="form-control" name="first_name"
                               value="{{Request::old('first_name') ? : ''}}">
                        @if ($errors -> has('first_name'))
                            <span class="help-block">{{ $errors -> first('first_name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 {{$errors -> has('last_name') ? 'has-error' : ''}}">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" class="form-control" name="last_name"
                               value="{{Request::old('last_name') ? : ''}}">
                        @if ($errors -> has('last_name'))
                            <span class="help-block">{{ $errors -> first('last_name') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 {{$errors -> has('work') ? 'has-error' : ''}}">
                        <label>Your work</label>
                        <input type="text" placeholder="Software Engineer"
                               class="form-control" name="work" value="{{Request::old('work') ? : ''}}">
                        @if ($errors -> has('work'))
                            <span class="help-block">{{ $errors -> first('work') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 {{$errors -> has('address') ? 'has-error' : ''}}">
                        <label>Address</label>
                        <input type="text" placeholder="Hanoi, Vietnam"
                               class="form-control" name="address" value="{{Request::old('address') ? : ''}}">
                        @if ($errors -> has('address'))
                            <span class="help-block">{{ $errors -> first('address') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 {{$errors -> has('avatar') ? 'has-error' : ''}}">
                        <label class="display-block">Upload profile image</label>
                        <input type="file" class="file-styled" name="avatar" id="avatarFile"
                               aria-describedby="fileHelp">
                        <span class="help-block">Accepted formats: gif, png, jpg. Max file size 4Mb</span>
                        @if ($errors -> has('avatar'))
                            <span class="help-block">{{ $errors -> first('avatar') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Save <i
                            class="icon-arrow-right14 position-right"></i></button>
            </div>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
    </div>
</div>