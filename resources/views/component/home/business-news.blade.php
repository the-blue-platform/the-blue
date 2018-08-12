<div class="table-responsive" style="height: 492px">
    @foreach($business as $news)
        <div class="thumbnail col-lg-3" style="padding-left: 8px; padding-right: 8px; height: 438px">
            <div class="thumb" style="height: 173px; overflow: hidden">
                <a href="{{ route('news', ['newsId' => $news -> id]) }}">
                    <img src="{{$news ->image}}" style="height: 100%">
                </a>
            </div>

            <div class="caption">
                <a href="{{ route('news', ['newsId' => $news -> id]) }}">
                    <h6 class="text-semibold no-margin"
                        style="color: black; height: 46px">{{ str_limit($news -> title, $limit = 60, $end = '...') }}</h6>
                </a>
                <p class="text-muted mb-15 mt-5"
                   style="height: 20px">{{\Illuminate\Support\Carbon::parse($news -> publishDate)->diffForHumans()}}</p>
                @if($news ->commentUser)
                    <div class="media" style="height: 102px">
                        <div class="media-left">
                            <img src="{{$news ->commentUser -> avatar}}" class="img-circle img-sm">
                        </div>

                        <div class="media-body">
                            <a href="{{ route('user', ['userId' => $news ->commentUser ->id]) }}" class="media-heading">
                                <span class="text-blue"><strong>{{$news -> getCommentUserName()}}</strong></span>
                                <span class="media-annotation pull-right">{{\Illuminate\Support\Carbon::parse($news ->comment -> createdDate)->diffForHumans()}}</span>
                            </a>

                            <span class="text-muted">{{ str_limit($news -> getComment(), $limit = 90, $end = '...') }}</span>
                        </div>
                    </div>
                @endif
                @if(count($news ->likeUsers) != 0)
                    <ul class="list-inline list-inline-condensed no-margin-bottom mt-15"
                        style="bottom: 0; position: absolute">
                        @foreach(array_slice($news -> likeUsers, 0, 5) as $u)
                            <li style="float: left"><a href="{{ route('user', ['userId' => $u ->id]) }}"><img
                                            src="{{$u -> avatar}}" class="img-circle img-xs"
                                            alt=""></a></li>
                        @endforeach
                        <li><h6>{{count($news ->likeUsers)}} Likes</h6></li>
                    </ul>
                @endif
            </div>
        </div>
    @endforeach
</div>