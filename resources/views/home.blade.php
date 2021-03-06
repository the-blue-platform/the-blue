@extends('component.home.default')

@section('content')
    <div class="content">
        <div class="main">
            <div class="main-content">
                @include('component.notification.notification')
                <div class="main-posts-1">
                    <div class="mp-section">
                        <div class="two-thirds sm-full">
                            <div class="main-slider-2">
                                <div class="js-main-slider-2">
                                    @foreach($headline as $article)
                                        @include('component.home.top-news')
                                    @endforeach
                                </div>
                                <div class="ms-navs">
                                    <div class="slide-count">
                                        <span class="current"></span> of
                                        <span class="total"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="one-third sm-hide">
                            <div class="trend-pst-slider">
                                <div class="trpst-block">
                                    <div class="trpst-block-head">
                                        <h2 class="title-4"><strong>Trending</strong> Posts</h2>
                                        <div class="js-sbr-pagination"></div>
                                    </div>
                                    <div class="trpst-block-main" id="headline-trending-news">
                                        @include('component.home.trending-news')
                                    </div>
                                    <div class="trpst-block-foot">
                                        <a href="#"><span class="more-txt"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mp-section">
                        <div class="one-third sm-half xs-full">
                            <article class="post post-tp-2">
                                <figure>
                                    <a href="index.html"><img
                                                src="https://s3.amazonaws.com/weblionmedia-spectr/img/380x258/1.jpg"
                                                height="258" width="380" alt="Spectr News Theme" class="adaptive"/></a>
                                </figure>
                                <div class="ptp-1-overlay">
                                    <div class="ptp-1-data">
                                        <a href="index.html" class="category-tp-1">BUSINESS</a>
                                        <h2 class="title-29"><a href="index.html#1">Qt arcu odio sollicitudin obortis
                                                vitae
                                                scelerid ante</a></h2>
                                        <div class="meta-tp-1">
                                            <div class="ptp-1-date"><a href="index.html">october 2, 2015</a></div>
                                            <div class="ptp-1-views"><a href="index.html"><i class="li_eye"></i><span>187</span></a>
                                            </div>
                                            <div class="ptp-1-comments"><a href="index.html"><i
                                                            class="li_bubble"></i><span>5</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="one-third sm-half xs-hide">
                            <article class="post post-tp-2">
                                <figure>
                                    <a href="index.html"><img
                                                src="https://s3.amazonaws.com/weblionmedia-spectr/img/380x258/2.jpg"
                                                height="258" width="380" alt="Spectr News Theme" class="adaptive"/></a>
                                </figure>
                                <div class="ptp-1-overlay">
                                    <div class="ptp-1-data">
                                        <a href="index.html" class="category-tp-1">design</a>
                                        <h2 class="title-29"><a href="index.html#1">Explain to you how all this mistaken
                                                idea</a></h2>
                                        <div class="meta-tp-1">
                                            <div class="ptp-1-date"><a href="index.html">october 2, 2015</a></div>
                                            <div class="ptp-1-views"><a href="index.html"><i class="li_eye"></i><span>187</span></a>
                                            </div>
                                            <div class="ptp-1-comments"><a href="index.html"><i
                                                            class="li_bubble"></i><span>5</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="one-third sm-hide">
                            <article class="post post-tp-2">
                                <figure>
                                    <a href="index.html"><img
                                                src="https://s3.amazonaws.com/weblionmedia-spectr/img/380x258/3.jpg"
                                                height="258" width="380" alt="Spectr News Theme" class="adaptive"/></a>
                                </figure>
                                <div class="ptp-1-overlay">
                                    <div class="ptp-1-data">
                                        <a href="index.html" class="category-tp-1">life style</a>
                                        <h2 class="title-29"><a href="index.html#1">Denouncing pleasure and praising
                                                pain
                                                was</a></h2>
                                        <div class="meta-tp-1">
                                            <div class="ptp-1-date"><a href="index.html">october 2, 2015</a></div>
                                            <div class="ptp-1-views"><a href="index.html"><i class="li_eye"></i><span>187</span></a>
                                            </div>
                                            <div class="ptp-1-comments"><a href="index.html"><i
                                                            class="li_bubble"></i><span>5</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="trend-pst">
                        <div class="pst-block">
                            <div class="pst-block-head">
                                <h2 class="title-4">Recommendations for you</h2>
                            </div>
                            <div class="pst-block-main">
                                <div class="col-row">
                                    <div class="col-one-quarter"
                                         style="background-color: #ffffff; border: none !important;">
                                        <article class="post post-tp-4">
                                            <figure style="background-color: #ffffff;">
                                                <a href="index.html">
                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/1.jpg"
                                                         height="186" width="260" alt="Spectr News Theme"
                                                         class="adaptive"/>
                                                </a>
                                                <div class="ptp-4-overlay">
                                                    <div class="ptp-4-data">
                                                        <a href="index.html">
                                                            <i class="li_eye"></i>187
                                                        </a>
                                                        <a href="index.html">
                                                            <i class="li_bubble"></i>187
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <h3 class="title-3"><a href="index.html">Fusce ac orci sagittis mattis magna
                                                    t
                                                    ultrices</a></h3>
                                            <div class="meta-tp-2">
                                                <div class="date"><span>october 2, 2015</span></div>
                                                <div class="category">
                                                    <a href="index.html"><i class="li_pen"></i><span>business</span></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-one-quarter"
                                         style="background-color: #ffffff; border: none !important;">
                                        <article class="post post-tp-4">
                                            <figure>
                                                <a href="index.html">
                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/2.jpg"
                                                         height="186" width="260" alt="Spectr News Theme"
                                                         class="adaptive"/>
                                                </a>
                                                <div class="ptp-4-overlay">
                                                    <div class="ptp-4-data">
                                                        <a href="index.html">
                                                            <i class="li_eye"></i>187
                                                        </a>
                                                        <a href="index.html">
                                                            <i class="li_bubble"></i>187
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <h3 class="title-3"><a href="index.html">Denouncing pleasure and praising
                                                    pain
                                                    was</a></h3>
                                            <div class="meta-tp-2">
                                                <div class="date"><span>october 2, 2015</span></div>
                                                <div class="category">
                                                    <a href="index.html"><i class="li_pen"></i><span>business</span></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-one-quarter"
                                         style="background-color: #ffffff; border: none !important;">
                                        <article class="post post-tp-4">
                                            <figure>
                                                <a href="index.html">
                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/3.jpg"
                                                         height="186" width="260" alt="Spectr News Theme"
                                                         class="adaptive"/>
                                                </a>
                                                <div class="ptp-4-overlay">
                                                    <div class="ptp-4-data">
                                                        <a href="index.html">
                                                            <i class="li_eye"></i>187
                                                        </a>
                                                        <a href="index.html">
                                                            <i class="li_bubble"></i>187
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <h3 class="title-3"><a href="index.html">Fusce ac orci sagittis mattis magna
                                                    t
                                                    ultrices</a></h3>
                                            <div class="meta-tp-2">
                                                <div class="date"><span>october 2, 2015</span></div>
                                                <div class="category">
                                                    <a href="index.html"><i class="li_pen"></i><span>business</span></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-one-quarter"
                                         style="background-color: #ffffff; border: none !important;">
                                        <article class="post post-tp-4">
                                            <figure>
                                                <a href="index.html">
                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/4.jpg"
                                                         height="186" width="260" alt="Spectr News Theme"
                                                         class="adaptive"/>
                                                </a>
                                                <div class="ptp-4-overlay">
                                                    <div class="ptp-4-data">
                                                        <a href="index.html">
                                                            <i class="li_eye"></i>187
                                                        </a>
                                                        <a href="index.html">
                                                            <i class="li_bubble"></i>187
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <h3 class="title-3"><a href="index.html">Fusce ac orci sagittis mattis magna
                                                    t
                                                    ultrices</a></h3>
                                            <div class="meta-tp-2">
                                                <div class="date"><span>october 2, 2015</span></div>
                                                <div class="category">
                                                    <a href="index.html"><i class="li_pen"></i><span>business</span></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="pst-block-foot">
                                <a href="#">Show more</a>
                            </div>
                        </div>
                        @include('component.home.startup-news')
                        @include('component.home.technology-news')
                        @include('component.home.business-news')
                        @include('component.home.science-news')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/news/headline-trending-news.js"></script>
@stop