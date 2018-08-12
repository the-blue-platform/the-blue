<li class="media">
    <div class="media-left">
        <img src="{{$news -> image}}"
             class="img-md" alt="">
    </div>

    <div class="media-body">
        <a class="media-heading" href="{{ route('news', ['newsId' => $news -> news_id]) }}">
            <span class="text-semibold">{{$news -> title}}</span>
        </a>
        <span class="text-muted text-size-mini">{{$news -> publish_date}}</span>
    </div>
</li>