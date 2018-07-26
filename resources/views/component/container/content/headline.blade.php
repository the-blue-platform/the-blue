<div class="main">
    <div class="main-content">
        <!-- Trending line -->
        <@include('component.container.content.trending_line')
        <div class="main-posts-1">
            <div class="mp-section">
                <div class="two-thirds sm-full">
                    <div class="main-slider-2">
                        <div class="js-main-slider-2">
                            @foreach($headline as $article)
                                <div class="slide">
                                    <article class="post post-tp-1">
                                        <figure>
                                            <a href="{{$article -> link}}"><img
                                                        src="https://s3.amazonaws.com/weblionmedia-spectr/img/760x471/1.jpg"
                                                        height="471" width="760" alt="Spectr News Theme"
                                                        class="adaptive"/></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <a href="#" class="category-tp-1">BUSINESS</a>
                                                <h3 class="title-1"><a
                                                            href="{{$article -> link}}">{{$article -> title}}</a></h3>
                                                <div class="meta-tp-1">
                                                    <div class="ptp-1-date"><a>{{$article -> publish_date}}</a>
                                                    </div>
                                                    <div class="ptp-1-views"><a><i
                                                                    class="li_eye"></i><span>187</span></a></div>
                                                    <div class="ptp-1-comments"><a href="#"><i
                                                                    class="li_bubble"></i><span>5</span></a></div>
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
                            <div class="trpst-block-main">
                                <div class="js-trend-pst-slider">
                                    <div>
                                        @foreach($trending_left as $article)
                                            <article class="post post-tp-3">
                                                <figure>
                                                    <a href="{{$article -> link}}"><img
                                                                src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/1.jpg"
                                                                height="98" width="126" alt="Spectr News Theme"
                                                                class="adaptive"/></a>
                                                </figure>
                                                <a href="#" class="category-tp-2">business</a>
                                                <h3 class="title-3"><a
                                                            href="{{$article -> link}}">{{$article -> title}}</a></h3>
                                                <div class="date-tp-2">{{$article -> publish_date}}</div>
                                            </article>
                                        @endforeach
                                    </div>
                                    <div>
                                        <article class="post post-tp-3">
                                            <figure>
                                                <a href="index.html"><img
                                                            src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/2.jpg"
                                                            height="98" width="126" alt="Spectr News Theme"
                                                            class="adaptive"/></a>
                                            </figure>
                                            <a href="index.html" class="category-tp-2">video</a>
                                            <h3 class="title-3"><a href="index.html">Duis eu arcu sit amet ante</a></h3>
                                            <div class="date-tp-2">october 2, 2015</div>
                                        </article>
                                        <article class="post post-tp-3">
                                            <figure>
                                                <a href="index.html"><img
                                                            src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/3.jpg"
                                                            height="98" width="126" alt="Spectr News Theme"
                                                            class="adaptive"/></a>
                                            </figure>
                                            <a href="index.html" class="category-tp-2">design</a>
                                            <h3 class="title-3"><a href="index.html">Fusce ac orci sagittis mattis</a>
                                            </h3>
                                            <div class="date-tp-2">october 2, 2015</div>
                                        </article>
                                        <article class="post post-tp-3">
                                            <figure>
                                                <a href="index.html"><img
                                                            src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/1.jpg"
                                                            height="98" width="126" alt="Spectr News Theme"
                                                            class="adaptive"/></a>
                                            </figure>
                                            <a href="index.html" class="category-tp-2">business</a>
                                            <h3 class="title-3"><a href="index.html">Mauris porta quam a lorem
                                                    honcus</a></h3>
                                            <div class="date-tp-2">october 2, 2015</div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="trpst-block-foot">
                                <a href="#"><span class="more-txt">More trending posts</span><span
                                            class="arr-right-dark-ic"><i></i></span></a>
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
                                <h2 class="title-29"><a href="index.html#1">Qt arcu odio sollicitudin obortis vitae
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
                                <h2 class="title-29"><a href="index.html#1">Denouncing pleasure and praising pain
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
                        <h2 class="title-4"><strong>Trending</strong> Posts</h2>
                        <div class="filters">
                            <ul class="filters-list-1 xs-hide">
                                <li><a href="index.html" class="active">all</a></li>
                                <li><a href="index.html">business</a></li>
                                <li><a href="index.html">gadgets</a></li>
                                <li><a href="index.html">design</a></li>
                                <li><a href="index.html">fachion</a></li>
                                <li><a href="index.html">video</a></li>
                            </ul>
                            <div class="filters-more">
                                <div class="filters-btn js-fl-btn">
                                    <i class="li_settings"></i>
                                    <div class="filters-drop js-fl-block">
                                        <i class="arr"></i>
                                        <ul>
                                            <li><a href="index.html">Latest</a></li>
                                            <li><a href="index.html" class="active">Popular</a></li>
                                            <li><a href="index.html">Recent</a></li>
                                            <li><a href="index.html">Most comment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pst-block-main">
                        <div class="col-row">
                            <div class="col-one-quarter">
                                <article class="post post-tp-4">
                                    <figure>
                                        <a href="index.html">
                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/1.jpg"
                                                 height="186" width="260" alt="Spectr News Theme" class="adaptive"/>
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
                                    <h3 class="title-3"><a href="index.html">Fusce ac orci sagittis mattis magna t
                                            ultrices</a></h3>
                                    <div class="meta-tp-2">
                                        <div class="date"><span>october 2, 2015</span></div>
                                        <div class="category">
                                            <a href="index.html"><i class="li_pen"></i><span>business</span></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-one-quarter">
                                <article class="post post-tp-4">
                                    <figure>
                                        <a href="index.html">
                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/2.jpg"
                                                 height="186" width="260" alt="Spectr News Theme" class="adaptive"/>
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
                                    <h3 class="title-3"><a href="index.html">Denouncing pleasure and praising pain
                                            was</a></h3>
                                    <div class="meta-tp-2">
                                        <div class="date"><span>october 2, 2015</span></div>
                                        <div class="category">
                                            <a href="index.html"><i class="li_pen"></i><span>business</span></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-one-quarter">
                                <article class="post post-tp-4">
                                    <figure>
                                        <a href="index.html">
                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/3.jpg"
                                                 height="186" width="260" alt="Spectr News Theme" class="adaptive"/>
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
                                    <h3 class="title-3"><a href="index.html">Fusce ac orci sagittis mattis magna t
                                            ultrices</a></h3>
                                    <div class="meta-tp-2">
                                        <div class="date"><span>october 2, 2015</span></div>
                                        <div class="category">
                                            <a href="index.html"><i class="li_pen"></i><span>business</span></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-one-quarter">
                                <article class="post post-tp-4">
                                    <figure>
                                        <a href="index.html">
                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/4.jpg"
                                                 height="186" width="260" alt="Spectr News Theme" class="adaptive"/>
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
                                    <h3 class="title-3"><a href="index.html">Fusce ac orci sagittis mattis magna t
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
                        <a href="index.html">More recent posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>