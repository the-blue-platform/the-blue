<div class="navbar navbar-inverse navbar-fixed-top">
    @include('component.header.logo')

    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            @include('component.header.language')
            @if(Auth::user())
                @include('component.header.notification')
                @include('component.header.user')
            @else
                <li><a href="{{route('auth.signup')}}">Sign Up</a></li>
                <li><a href="{{route('auth.signin')}}">Sign In</a></li>
            @endif
        </ul>
    </div>
</div>
