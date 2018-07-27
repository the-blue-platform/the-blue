<div class="slide">
    <article class="post post-tp-1">
        <figure>
            <a href="{{ route('news', ['newsId' => $article -> news_id]) }}"><img
                        src="https://s3.amazonaws.com/weblionmedia-spectr/img/760x471/1.jpg"
                        height="471" width="760" alt="Spectr News Theme"
                        class="adaptive"/></a>
        </figure>
        <div class="ptp-1-overlay">
            <div class="ptp-1-data">
                <a href="#" class="category-tp-1">BUSINESS</a>
                <h3 class="title-1"><a
                            href="{{ route('news', ['newsId' => $article -> news_id]) }}">{{$article -> title}}</a>
                </h3>
                <div class="meta-tp-1">
                    <div class="ptp-1-date"><a>{{$article -> publish_date}}</a>
                    </div>
                    <div class="ptp-1-views"><a href="#"><i
                                    class="li_like"></i><span>{{$article -> likes() -> count()}}</span></a>
                    </div>
                    <div class="ptp-1-views"><a><i
                                    class="li_eye"></i><span>{{$article -> views()}}</span></a></div>
                    <div class="ptp-1-comments"><a href="#"><i
                                    class="li_bubble"></i><span>{{$article -> comments() -> count() + $article -> subComments() -> count()}}</span></a>
                    </div>
                </div>
                <a href="#" class="read-tp-1"><span>Read more</span> <span
                            class="arr-right-light-ic"><i></i></span></a>
                <a href="#"
                   class="save-tp-1 pull-right"><span>Save and read later</span> <span
                            class="arr-down-light-ic"><i></i></span></a>
            </div>
        </div>
    </article>
</div>