<div class="js-trend-pst-slider">
    <div style="overflow: scroll">
        @foreach($trending_news as $article)
            <article class="post post-tp-3">
                <figure>
                    <a href="{{ route('news', ['newsId' => $article -> news_id]) }}"><img
                                src="{{$article->image}}"
                                height="98" width="126"
                                class="adaptive"/></a>
                </figure>
                <a href="#" class="category-tp-2">{{$article -> tag}}</a>
                <h3 class="title-3" style="font-size: 13px"><a
                            href="{{ route('news', ['newsId' => $article -> news_id]) }}">{{ str_limit($article -> title, $limit = 50, $end = '...') }}</a>
                </h3>
                <div class="date-tp-2">{{$article -> publish_date}}</div>
            </article>
        @endforeach
    </div>
</div>