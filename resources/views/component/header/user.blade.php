<li class="dropdown dropdown-user">
    <a class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ Auth::user()->avatar }}" alt="">
        <span>{{Auth::user() -> getName()}}</span>
        <i class="caret"></i>
    </a>

    <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="{{ route('user', ['userId' => Auth::user() ->id]) }}"><i class="icon-user-plus"></i> My profile</a>
        </li>
        <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
        <li><a href="#"><span class="badge bg-teal-400 pull-right">2</span> <i
                        class="icon-comment-discussion"></i> Messages</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
        <li><a href="{{route('auth.signout')}}"><i class=" icon-switch2"></i> Logout</a></li>
    </ul>
</li>