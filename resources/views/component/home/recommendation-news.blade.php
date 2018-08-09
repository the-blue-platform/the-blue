<div class="table-responsive" style="height: 492px">
    @foreach($recommendation as $news)
        <div class="thumbnail col-lg-3" style="padding-left: 8px; padding-right: 8px; height: 438px">
            <div class="thumb" style="height: 173px; overflow: hidden">
                <a href="{{ route('news', ['newsId' => $news -> id]) }}">
                    <img src="{{$news ->image}}" style="height: 100%">
                </a>
            </div>

            <div class="caption">
                <a href="{{ route('news', ['newsId' => $news -> id]) }}">
                    <h6 class="text-semibold no-margin"
                        style="color: black">{{ str_limit($news -> title, $limit = 60, $end = '...') }}</h6>
                </a>
                <p class="text-muted mb-15 mt-5">{{\Illuminate\Support\Carbon::parse($news -> publishDate)->diffForHumans()}}</p>
                @if(count($news -> comments) != 0)
                    <div class="media">
                        <div class="media-left">
                            <img src="/images/users/face10.jpg" class="img-circle img-sm">
                        </div>

                        <div class="media-body">
                            <a href="#" class="media-heading">
                                <span class="text-blue"><strong>James Alexander</strong></span>
                                <span class="media-annotation pull-right">12:16</span>
                            </a>

                            <span class="text-muted">{{ str_limit($news -> comments[0] -> getBody(), $limit = 50, $end = '...') }}</span>
                        </div>
                    </div>
                @endif
                <ul class="list-inline list-inline-condensed no-margin-bottom mt-15">
                    <li><a href="#"><img src="/images/users/face1.jpg" class="img-circle img-xs" alt=""></a></li>
                    <li><a href="#"><img src="/images/users/face24.jpg" class="img-circle img-xs" alt=""></a></li>
                    <li><a href="#"><img src="/images/users/face11.jpg" class="img-circle img-xs" alt=""></a></li>
                </ul>
            </div>
        </div>
    @endforeach
</div>