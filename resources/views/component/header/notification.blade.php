<li class="dropdown dropdown-notifications">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-bubbles4"></i>
        <span class="visible-xs-inline-block position-right">Messages</span>
        <span class="badge bg-warning-400 notification-count">{{count($notifications)}}</span>
    </a>

    <div class="dropdown-menu dropdown-content width-350">
        <div class="dropdown-content-heading">
            Messages
            <ul class="icons-list">
                <li><a href="#"><i class="icon-compose"></i></a></li>
            </ul>
        </div>

        <ul class="media-list dropdown-content-body">

            @foreach($notifications as $notification)
                <li class="media">
                    <div class="media-left">
                        <img src="{{$notification -> avatar}}" class="img-circle img-sm" alt="">
                    </div>

                    <div class="media-body">
                        <a href="{{ route('user', ['userId' => $notification -> userId]) }}" class="media-heading">
                            <span class="text-semibold">{{$notification -> name}}</span>
                            <span class="media-annotation pull-right">{{\Illuminate\Support\Carbon::parse($notification -> date)->diffForHumans()}}</span>
                        </a>

                        <span class="text-muted">{{$notification -> content}}</span>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="dropdown-content-footer">
            <a href="#" data-popup="tooltip" title="All messages"><i
                        class="icon-menu display-block"></i></a>
        </div>
    </div>
</li>
<script src="/js/event/like-notification.js"></script>