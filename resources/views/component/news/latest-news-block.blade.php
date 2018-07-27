<article class="post post-tp-3">
    <figure>
        <a href="{{ route('news', ['newsId' => $article -> news_id]) }}"><img
                    src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/1.jpg"
                    height="98" width="126"
                    class="adaptive"/></a>
    </figure>
    <a href="#" class="category-tp-2">business</a>
    <h3 class="title-3"><a href="{{ route('news', ['newsId' => $article -> news_id]) }}">{{$article -> title}}</a>
    </h3>
    <div class="date-tp-2">{{$article -> publish_date}}</div>
</article>