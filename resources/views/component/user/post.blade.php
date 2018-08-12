<div class="panel panel-flat timeline-content">
    <div class="panel-heading">
        <h6 class="panel-title">{{Auth::user() -> getName()}}</h6>
        <div class="heading-elements">
            <span class="heading-text">
                <i class="icon-checkmark-circle position-left text-success"></i>{{$post -> createdDate->diffForHumans()}}</span>
            <ul class="icons-list">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-arrow-down12"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Hide user
                                posts</a></li>
                        <li><a href="#"><i class="icon-user-block"></i> Block
                                user</a></li>
                        <li><a href="#"><i class="icon-user-minus"></i> Unfollow
                                user</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-embed"></i> Embed
                                post</a></li>
                        <li><a href="#"><i class="icon-blocked"></i> Report this
                                post</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <blockquote>
            <p>{{$post -> content}}</p>
        </blockquote>
    </div>

    <div class="panel-footer panel-footer-transparent">
        <div class="heading-elements">
            <ul class="list-inline list-inline-condensed heading-text">
                <li>
                    <a href="#" class="text-default">
                        <i class="icon-eye4 position-left"></i>
                        438</a>
                </li>
                <li><a href="#" class="text-default"><i
                                class="icon-comment-discussion position-left"></i>
                        71</a></li>
            </ul>

            <span class="heading-btn pull-right">
                <a href="#" class="btn btn-link">Read post
                    <i class="icon-arrow-right14 position-right"></i></a>
            </span>
        </div>
    </div>
</div>