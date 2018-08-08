<ul class="media-list content-group">
    @foreach($trending_news as $article)
        <li class="media stack-media-on-mobile">
            <div class="media-left" style="height: 90px; width: 150px;">
                <div class="thumb">
                    <a href="{{ route('news', ['newsId' => $article -> news_id]) }}">
                        <img src="{{$article->image}}"
                             class="img-responsive img-rounded media-preview" style="height: 100px; width: auto; overflow: hidden">
                        <span class="zoom-image"><i class="icon-newspaper"></i></span>
                    </a>
                </div>
            </div>

            <div class="media-body">
                <h6 class="media-heading"><a href="{{ route('news', ['newsId' => $article -> news_id]) }}" style="color: black">{{ str_limit($article -> title, $limit = 50, $end = '...') }}</a></h6>
                <ul class="list-inline list-inline-separate text-muted mb-5">
                    <li><i class="icon-book-play position-left"></i> {{$article -> tag}}
                    </li>
                    <li class="text-size-small">{{$article -> publish_date}}</li>
                </ul>
            </div>
        </li>
    @endforeach
</ul>