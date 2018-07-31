<div class="col-row">
    <div class="col-half">
        <article class="post post-tp-5">
            <figure>
                <a href="{{ route('news', ['newsId' => $highlight -> news_id]) }}">
                    <img src="{{$highlight -> image}}"
                         height="242" width="345" class="adaptive"/>
                </a>
            </figure>
            <h3 class="title-5">
                <a href="{{ route('news', ['newsId' => $highlight -> news_id]) }}">{{$highlight -> title}}</a>
            </h3>
            <div class="meta-tp-2">
                <div class="date">
                    <span>{{$highlight -> publish_date}}</span>
                </div>
                <div class="category">
                    <a><i class="li_eye"></i><span>125</span></a>
                </div>
            </div>
            <p class="p">{{$highlight -> content}}</p>
        </article>
    </div>
    <div class="col-half">
        @foreach($news as $article)
            <article class="post post-tp-6">
                <figure>
                    <a href="{{ route('news', ['newsId' => $article -> news_id]) }}">
                        <img src="{{$article -> image}}"
                             height="85" width="115"
                             class="adaptive"/>
                    </a>
                </figure>
                <h3 class="title-6"><a
                            href="{{ route('news', ['newsId' => $article -> news_id]) }}">{{$article->title}}</a>
                </h3>
                <div class="date-tp-2">{{$article -> publish_date}}</div>
            </article>
        @endforeach
    </div>
</div>