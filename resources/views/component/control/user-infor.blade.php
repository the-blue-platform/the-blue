<div class="sidebar-user">
    <div class="category-content">
        @if(Auth::check())
        <div class="media">
            <a href="{{ route('user', ['userId' => Auth::user() ->id]) }}" class="user_avatar media-left"><img src="{{ Auth::user()->avatar }}"
                                                            class="img-circle img-sm" alt=""></a>
            <div class="media-body">
                <span class="media-heading text-semibold">{{Auth::user() -> getName()}}</span>
                <div class="text-size-mini text-muted">
                    <i class="icon-pin text-size-small"></i> &nbsp;{{Auth::user() -> location}}
                </div>
            </div>

            <div class="media-right media-middle">
                <ul class="icons-list">
                    <li>
                        <a href="#"><i class="icon-cog3"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        @else
        <div class="media">
            <div class="media-body text-center">
                <a href="#" class="media-middle"><img src="/images/users/no_account.png"
                                                      class="img-circle img-lg" alt=""></a>
                <span class="media-heading">No Account</span>
                <form action="{{route('auth.signup')}}">
                    <button type="submit" class="btn" style="background-color:#fff; border-color: #000000">
                        Create an account?
                    </button>
                </form>
            </div>
        </div>
        @endif
    </div>
</div>