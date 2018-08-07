<div class="slide">
    <article class="post post-tp-1">
        <figure>
            <a href="{{ route('news', ['newsId' => $article -> getId()]) }}"><img
                        src="{{$article ->getImage()}}"
                        height="471" width="760" alt="Spectr News Theme"
                        class="adaptive"/></a>
        </figure>
        <div class="ptp-1-overlay">
            <div class="ptp-1-data">
                <a href="#" class="category-tp-1">{{$article ->getTag()}}</a>
                <h3 class="title-1"><a
                            href="{{ route('news', ['newsId' => $article -> getId()]) }}">{{$article -> getTitle()}}</a>
                </h3>
                <div class="meta-tp-1">
                    <div class="ptp-1-date"><a>{{$article -> getPublishDate()}}</a>
                    </div>
                    <div class="ptp-1-views"><a href="#"><i
                                    class="li_like"></i><span>1</span></a>
                    </div>
                    <div class="ptp-1-views"><a><i
                                    class="li_eye"></i><span>1</span></a></div>
                    <div class="ptp-1-comments"><a href="#"><i
                                    class="li_bubble"></i><span>1</span></a>
                    </div>
                </div>
                <a href="#" class="read-tp-1"><span>Read later</span> <span
                            class="li_note"><i></i></span></a>
            </div>
        </div>
    </article>
</div>