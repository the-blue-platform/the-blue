@extends('component.home.default')

@section('content')
    <div class="page-container">
        <div class="page-content">
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">
                    @include('component.container.user.user')
                    @include('component.container.navigation.navigation')
                </div>
            </div>
            <div class="content-wrapper">
                <div class="content">
                    <div class="main">
                        <div class="main-content">
                            <div class="section">
                                <div class="row">
                                    <div class="content">
                                        <br>
                                        <div class="pst-block">
                                            <div class="shop">
                                                <div class="pst-block-main">
                                                    <div class="post-content">
                                                        <div class="shop-product-block">
                                                            <div class="product-description">
                                                                <div class="title-blc-3">
                                                                    <h2>{{$article -> title}}</h2>
                                                                </div>
                                                                {!! $content !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pst-box">
                                            <div class="pst-box-head">
                                                <div class="title-blc-1">
                                                    <h4>Realted <span>Posts</span></h4>
                                                </div>
                                                <div class="navs js-pst-navs"></div>
                                            </div>
                                            <div class="pst-box-main">
                                                <div class="pst-box-inner js-pst-block-2" data-slides="4">
                                                    <div class="one-third">
                                                        <article class="post post-tp-30">
                                                            <figure>
                                                                <a href="post_template_nine.html">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/255x173/1.jpg"
                                                                         height="173" width="255"
                                                                         alt="Spectr News Theme"
                                                                         class="adaptive"/>
                                                                </a>
                                                                <div class="ptp-30-overlay">
                                                                    <div class="ptp-30-data">
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-6"><a href="post_template_nine.html">Fusce
                                                                    ac orci
                                                                    sagittis mattis magna ultrices</a></h3>
                                                        </article>
                                                    </div>
                                                    <div class="one-third">
                                                        <article class="post post-tp-30">
                                                            <figure>
                                                                <a href="post_template_nine.html">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/255x173/2.jpg"
                                                                         height="173" width="255"
                                                                         alt="Spectr News Theme"
                                                                         class="adaptive"/>
                                                                </a>
                                                                <div class="ptp-30-overlay">
                                                                    <div class="ptp-30-data">
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-6"><a href="post_template_nine.html">Fusce
                                                                    ac orci
                                                                    sagittis mattis magna ultrices</a></h3>
                                                        </article>
                                                    </div>
                                                    <div class="one-third">
                                                        <article class="post post-tp-30">
                                                            <figure>
                                                                <a href="post_template_nine.html">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/255x173/3.jpg"
                                                                         height="173" width="255"
                                                                         alt="Spectr News Theme"
                                                                         class="adaptive"/>
                                                                </a>
                                                                <div class="ptp-30-overlay">
                                                                    <div class="ptp-30-data">
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-6"><a href="post_template_nine.html">Fusce
                                                                    ac orci
                                                                    sagittis mattis magna ultrices</a></h3>
                                                        </article>
                                                    </div>
                                                    <div class="one-third">
                                                        <article class="post post-tp-30">
                                                            <figure>
                                                                <a href="post_template_nine.html">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/255x173/4.jpg"
                                                                         height="173" width="255"
                                                                         alt="Spectr News Theme"
                                                                         class="adaptive"/>
                                                                </a>
                                                                <div class="ptp-30-overlay">
                                                                    <div class="ptp-30-data">
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-6"><a href="post_template_nine.html">Fusce
                                                                    ac orci
                                                                    sagittis mattis magna ultrices</a></h3>
                                                        </article>
                                                    </div>
                                                    <div class="one-third">
                                                        <article class="post post-tp-30">
                                                            <figure>
                                                                <a href="post_template_nine.html">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/255x173/2.jpg"
                                                                         height="173" width="255"
                                                                         alt="Spectr News Theme"
                                                                         class="adaptive"/>
                                                                </a>
                                                                <div class="ptp-30-overlay">
                                                                    <div class="ptp-30-data">
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-6"><a href="post_template_nine.html">Fusce
                                                                    ac orci
                                                                    sagittis mattis magna ultrices</a></h3>
                                                        </article>
                                                    </div>
                                                    <div class="one-third">
                                                        <article class="post post-tp-30">
                                                            <figure>
                                                                <a href="post_template_nine.html">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/255x173/3.jpg"
                                                                         height="173" width="255"
                                                                         alt="Spectr News Theme"
                                                                         class="adaptive"/>
                                                                </a>
                                                                <div class="ptp-30-overlay">
                                                                    <div class="ptp-30-data">
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="post_template_nine.html">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-6"><a href="post_template_nine.html">Fusce
                                                                    ac orci
                                                                    sagittis mattis magna ultrices</a></h3>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comments-block">
                                            <div class="title-blc-2">
                                                <div class="title-blc-inner">
                                                    <h4>Comments</h4>
                                                </div>
                                            </div>
                                            <div class="comments">
                                                <ul class="comment-list">
                                                    <li class="comment">
                                                        <article>
                                                            <div class="comment-photo">
                                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                                                                     height="49" width="49" alt="Spectr News Theme">
                                                            </div>
                                                            <h6 class="title-20"><a href="post_template_nine.html">Albert
                                                                    Dowson</a></h6>
                                                            <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem
                                                                accusantium doloremque laudanTium, totamrem aperiam,
                                                                eaque ipsa
                                                                quae ab illo inventore veritatis</p>
                                                            <div class="comment-date">Yesterday in 16:00</div>
                                                            <div class="reply">Reply Now</div>
                                                        </article>
                                                        <ul class="sub-comment-list">
                                                            <li class="comment">
                                                                <article>
                                                                    <div class="comment-photo">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                                                                             height="49" width="49"
                                                                             alt="Spectr News Theme">
                                                                    </div>
                                                                    <h6 class="title-20"><a
                                                                                href="post_template_nine.html">Jason
                                                                            Born</a></h6>
                                                                    <p>Sed ut perspiciatis unde omnis iste natus sit
                                                                        voluptatem
                                                                        accusantium doloremque laudanTium, totamrem
                                                                        aperiam,
                                                                        eaque ipsa quae ab illo inventore veritatis</p>
                                                                    <div class="comment-date">Yesterday in 16:00</div>
                                                                    <div class="reply">Reply Now</div>
                                                                </article>
                                                            </li>
                                                            <li class="comment">
                                                                <article>
                                                                    <div class="comment-photo">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                                                                             height="49" width="49"
                                                                             alt="Spectr News Theme">
                                                                    </div>
                                                                    <h6 class="title-20"><a
                                                                                href="post_template_nine.html">Albert
                                                                            Dowson</a></h6>
                                                                    <p>Sed ut perspiciatis unde omnis iste natus sit
                                                                        voluptatem
                                                                        accusantium doloremque laudanTium, totamrem
                                                                        aperiam,
                                                                        eaque ipsa quae ab illo inventore veritatis</p>
                                                                    <div class="comment-date">Yesterday in 16:00</div>
                                                                    <div class="reply">Reply Now</div>
                                                                </article>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="comment">
                                                        <article>
                                                            <div class="comment-photo">
                                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                                                                     height="49" width="49" alt="Spectr News Theme">
                                                            </div>
                                                            <h6 class="title-20"><a href="post_template_nine.html">Jack
                                                                    Smith</a></h6>
                                                            <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem
                                                                accusantium doloremque laudanTium, totamrem aperiam,
                                                                eaque ipsa
                                                                quae ab illo inventore veritatis</p>
                                                            <div class="comment-date">Yesterday in 16:00</div>
                                                            <div class="reply">Reply Now</div>
                                                        </article>
                                                    </li>
                                                    <li class="comment">
                                                        <article>
                                                            <div class="comment-photo">
                                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                                                                     height="49" width="49" alt="Spectr News Theme">
                                                            </div>
                                                            <h6 class="title-20"><a href="post_template_nine.html">Robrt
                                                                    Green</a></h6>
                                                            <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem
                                                                accusantium doloremque laudanTium, totamrem aperiam,
                                                                eaque ipsa
                                                                quae ab illo inventore veritatis</p>
                                                            <div class="comment-date">Yesterday in 16:00</div>
                                                            <div class="reply">Reply Now</div>
                                                        </article>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <aside class="side-bar">
                                        <div class="js-sidebar">
                                            <div class="cart-widget">
                                                @include('component.supplier.supplier-block')
                                            </div>
                                            <div class="latest-products-widget">
                                                <div class="pst-block">
                                                    <div class="pst-block-head">
                                                        <h2 class="title-4"><strong>Latest News</strong></h2>
                                                    </div>
                                                    <div class="js-trend-pst-slider">
                                                        <div>
                                                            @foreach($latestNews as $article)
                                                                @include('component.news.latest-news-block')
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
