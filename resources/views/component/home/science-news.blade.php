<div class="trend-pst">
    <div class="pst-block">
        <div class="pst-block-head">
            <h2 class="title-4">Science</h2>
        </div>
        <div class="pst-block-main">
            <div class="col-row">
                @foreach($science as $news)
                    <div class="col-one-quarter" style="background-color: #ffffff; border: none !important;">
                        <article class="post post-tp-4">
                            <figure style="background-color: #ffffff;">
                                <a href="{{ route('news', ['newsId' => $news -> news_id]) }}">
                                    <img src="{{$news ->image}}"
                                         height="186" width="260" class="adaptive"/>
                                </a>
                                <div class="ptp-4-overlay">
                                    <div class="ptp-4-data">
                                        <a>
                                            <i class="li_like"></i>{{$news -> likes() -> count()}}
                                        </a>
                                        <a>
                                            <i class="li_eye"></i>{{$news -> views()}}
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <h3 class="title-3">
                                <a href="{{ route('news', ['newsId' => $news -> news_id]) }}">{{$news ->title}}</a>
                            </h3>
                            <div class="meta-tp-2">
                                <div class="date"><span>{{$news ->publish_date}}</span></div>
                                <div class="category">
                                    <a href=""><i class="li_pen"></i><span>{{$news ->tag}}</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pst-block-foot">
            <a href="#">Show more</a>
        </div>
    </div>
</div>