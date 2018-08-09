<div class="profile-cover-img" style="background-image: url(/images/demo/cover2.jpg)"></div>
<div class="media">
    <div class="media-left">
        <a href="#" class="profile-thumb">
            <img src="/storage/avatars/{{ Auth::user()->avatar }}" class="img-circle img-md" alt="">
        </a>
    </div>

    <div class="media-body">
        <h1>{{Auth::user() -> getName()}}
            <small class="display-block"><i class="icon-home5 text-size-small"></i> {{Auth::user() -> work}} At <i class="icon-pin text-size-small"></i> {{Auth::user() -> location}}</small>
        </h1>
    </div>

    <div class="media-right media-middle">
        <ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
            <li><a href="#" class="btn btn-default"><i class="icon-file-picture position-left"></i> Cover
                    image</a></li>
            <li><a href="#" class="btn btn-default"><i class="icon-file-stats position-left"></i> Statistics</a>
            </li>
        </ul>
    </div>
</div>