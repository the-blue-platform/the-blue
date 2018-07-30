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
                        <!-- Content -->
                        <div class="main-content">
                            <!-- Page head tile -->
                            <div class="page-head-tile">
                                <div class="container">
                                    <div class="page-title">
                                        <h1 class="title-16"><strong>Roman Smith</strong></h1>
                                        <div class="filters">
                                            <ul class="filters-list-1">
                                                <li><a href="author.html" class="active">all</a></li>
                                                <li><a href="author.html">web design</a></li>
                                                <li><a href="author.html">branding</a></li>
                                                <li><a href="author.html">design</a></li>
                                                <li><a href="author.html">video</a></li>
                                            </ul>
                                            <div class="filters-more">
                                                <div class="filters-btn js-fl-btn">
                                                    <i class="li_settings"></i>
                                                    <div class="filters-drop js-fl-block">
                                                        <i class="arr"></i>
                                                        <ul>
                                                            <li><a href="author.html">Latest</a></li>
                                                            <li><a href="author.html" class="active">Popular</a></li>
                                                            <li><a href="author.html">Recent</a></li>
                                                            <li><a href="author.html">Most comment</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Page head tile END -->
                            <div class="section">
                                <div class="row">
                                    <div class="content">
                                        <div class="popular-pst">
                                            <div class="pst-block">
                                                <div class="pst-block-head">
                                                    <h2 class="title-4"><strong>Popular</strong> Posts</h2>
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
                                                        <div class="col-half">
                                                            <article class="post post-tp-5">
                                                                <figure>
                                                                    <a href="index.html">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/1.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                                    </a>
                                                                </figure>
                                                                <h3 class="title-5"><a href="index.html">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                                <div class="meta-tp-2">
                                                                    <div class="date"><span>october 2, 2015</span></div>
                                                                    <div class="category">
                                                                        <a href="index.html"><i class="li_user"></i><span>admin</span></a>
                                                                    </div>
                                                                </div>
                                                                <p class="p">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                                            </article>
                                                        </div>
                                                        <div class="col-half">
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="index.html">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/1.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                                                    </a>
                                                                </figure>
                                                                <h3 class="title-6"><a href="index.html">Duis eu arcu sit amet ante tristique</a></h3>
                                                                <div class="date-tp-2">october 2, 2015</div>
                                                            </article>
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="index.html">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/2.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                                                    </a>
                                                                </figure>
                                                                <h3 class="title-6"><a href="index.html">Vivamus auctor quam nec mauris commodo</a></h3>
                                                                <div class="date-tp-2">october 2, 2015</div>
                                                            </article>
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="index.html">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/3.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                                                    </a>
                                                                </figure>
                                                                <h3 class="title-6"><a href="index.html">Nam ut metus elementum pharetra diam sed</a></h3>
                                                                <div class="date-tp-2">october 2, 2015</div>
                                                            </article>
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="index.html">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/4.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                                                    </a>
                                                                </figure>
                                                                <h3 class="title-6"><a href="index.html">Mauris porta quam a lorem rhoncus fringilla</a></h3>
                                                                <div class="date-tp-2">october 2, 2015</div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page-content">
                                            <div class="posts">
                                                <article class="post post-tp-17">
                                                    <figure>
                                                        <a href="author.html">
                                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/223x156/4.jpg"
                                                                 height="156" width="223" alt="Spectr News Theme"
                                                                 class="adaptive"/>
                                                        </a>
                                                    </figure>
                                                    <span class="category-tp-4">style</span>
                                                    <h3 class="title-5"><a href="author.html">But I must explain to you
                                                            how all this mistaken idea of denouncing pleasure</a></h3>
                                                    <div class="meta-tp-2">
                                                        <div class="date"><span>october 2, 2015</span></div>
                                                        <div class="category">
                                                            <a href="author.html"><i
                                                                        class="li_user"></i><span>admin</span></a>
                                                        </div>
                                                    </div>
                                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit
                                                        voluptatem accusantium dolore mque laudantium, totamrem aperiam,
                                                        eaque ipsa quae ab illo invent</p>
                                                </article>
                                                <article class="post post-tp-17">
                                                    <figure>
                                                        <a href="author.html">
                                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/223x156/5.jpg"
                                                                 height="156" width="223" alt="Spectr News Theme"
                                                                 class="adaptive"/>
                                                        </a>
                                                    </figure>
                                                    <span class="category-tp-4">style</span>
                                                    <h3 class="title-5"><a href="author.html">Fusce ac orci sagittis
                                                            mattis magna</a></h3>
                                                    <div class="meta-tp-2">
                                                        <div class="date"><span>october 2, 2015</span></div>
                                                        <div class="category">
                                                            <a href="author.html"><i
                                                                        class="li_user"></i><span>admin</span></a>
                                                        </div>
                                                    </div>
                                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit
                                                        voluptatem accusantium dolore mque laudantium, totamrem aperiam,
                                                        eaque ipsa quae ab illo invent</p>
                                                </article>
                                                <article class="post post-tp-17">
                                                    <figure>
                                                        <a href="author.html">
                                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/223x156/6.jpg"
                                                                 height="156" width="223" alt="Spectr News Theme"
                                                                 class="adaptive"/>
                                                        </a>
                                                    </figure>
                                                    <span class="category-tp-4">style</span>
                                                    <h3 class="title-5"><a href="author.html">But I must explain to you
                                                            how all this mistaken idea of denouncing pleasure</a></h3>
                                                    <div class="meta-tp-2">
                                                        <div class="date"><span>october 2, 2015</span></div>
                                                        <div class="category">
                                                            <a href="author.html"><i
                                                                        class="li_user"></i><span>admin</span></a>
                                                        </div>
                                                    </div>
                                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit
                                                        voluptatem accusantium dolore mque laudantium, totamrem aperiam,
                                                        eaque ipsa quae ab illo invent</p>
                                                </article>
                                                <article class="post post-tp-17">
                                                    <figure>
                                                        <a href="author.html">
                                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/223x156/7.jpg"
                                                                 height="156" width="223" alt="Spectr News Theme"
                                                                 class="adaptive"/>
                                                        </a>
                                                    </figure>
                                                    <span class="category-tp-4">style</span>
                                                    <h3 class="title-5"><a href="author.html">But I must explain to you
                                                            how all this mistaken idea of denouncing pleasure</a></h3>
                                                    <div class="meta-tp-2">
                                                        <div class="date"><span>october 2, 2015</span></div>
                                                        <div class="category">
                                                            <a href="author.html"><i
                                                                        class="li_user"></i><span>admin</span></a>
                                                        </div>
                                                    </div>
                                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit
                                                        voluptatem accusantium dolore mque laudantium, totamrem aperiam,
                                                        eaque ipsa quae ab illo invent</p>
                                                </article>
                                                <article class="post post-tp-17">
                                                    <figure>
                                                        <a href="author.html">
                                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/223x156/11.jpg"
                                                                 height="156" width="223" alt="Spectr News Theme"
                                                                 class="adaptive"/>
                                                        </a>
                                                    </figure>
                                                    <span class="category-tp-4">style</span>
                                                    <h3 class="title-5"><a href="author.html">Fusce ac orci sagittis
                                                            mattis magna</a></h3>
                                                    <div class="meta-tp-2">
                                                        <div class="date"><span>october 2, 2015</span></div>
                                                        <div class="category">
                                                            <a href="author.html"><i
                                                                        class="li_user"></i><span>admin</span></a>
                                                        </div>
                                                    </div>
                                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit
                                                        voluptatem accusantium dolore mque laudantium, totamrem aperiam,
                                                        eaque ipsa quae ab illo invent</p>
                                                </article>
                                                <article class="post post-tp-17">
                                                    <figure>
                                                        <a href="author.html">
                                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/223x156/9.jpg"
                                                                 height="156" width="223" alt="Spectr News Theme"
                                                                 class="adaptive"/>
                                                        </a>
                                                    </figure>
                                                    <span class="category-tp-4">style</span>
                                                    <h3 class="title-5"><a href="author.html">But I must explain to you
                                                            how all this mistaken idea of denouncing pleasure</a></h3>
                                                    <div class="meta-tp-2">
                                                        <div class="date"><span>october 2, 2015</span></div>
                                                        <div class="category">
                                                            <a href="author.html"><i
                                                                        class="li_user"></i><span>admin</span></a>
                                                        </div>
                                                    </div>
                                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit
                                                        voluptatem accusantium dolore mque laudantium, totamrem aperiam,
                                                        eaque ipsa quae ab illo invent</p>
                                                </article>
                                                <article class="post post-tp-17">
                                                    <figure>
                                                        <a href="author.html">
                                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/223x156/10.jpg"
                                                                 height="156" width="223" alt="Spectr News Theme"
                                                                 class="adaptive"/>
                                                        </a>
                                                    </figure>
                                                    <span class="category-tp-4">style</span>
                                                    <h3 class="title-5"><a href="author.html">But I must explain to you
                                                            how all this mistaken idea of denouncing pleasure</a></h3>
                                                    <div class="meta-tp-2">
                                                        <div class="date"><span>october 2, 2015</span></div>
                                                        <div class="category">
                                                            <a href="author.html"><i
                                                                        class="li_user"></i><span>admin</span></a>
                                                        </div>
                                                    </div>
                                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit
                                                        voluptatem accusantium dolore mque laudantium, totamrem aperiam,
                                                        eaque ipsa quae ab illo invent</p>
                                                </article>
                                                <article class="post post-tp-17">
                                                    <figure>
                                                        <a href="author.html">
                                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/223x156/12.jpg"
                                                                 height="156" width="223" alt="Spectr News Theme"
                                                                 class="adaptive"/>
                                                        </a>
                                                    </figure>
                                                    <span class="category-tp-4">style</span>
                                                    <h3 class="title-5"><a href="author.html">Fusce ac orci sagittis
                                                            mattis magna</a></h3>
                                                    <div class="meta-tp-2">
                                                        <div class="date"><span>october 2, 2015</span></div>
                                                        <div class="category">
                                                            <a href="author.html"><i
                                                                        class="li_user"></i><span>admin</span></a>
                                                        </div>
                                                    </div>
                                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit
                                                        voluptatem accusantium dolore mque laudantium, totamrem aperiam,
                                                        eaque ipsa quae ab illo invent</p>
                                                </article>
                                            </div>
                                            <!-- Page nav -->
                                            <div class="page-nav">
                                                <a href="author.html" class="pn-item">
                                                    <i class="page-nav-prev-ic"></i>
                                                </a>
                                                <a href="author.html" class="pn-item mb-pt-hide">1</a>
                                                <a href="author.html" class="pn-item current mb-pt-hide">2</a>
                                                <a href="author.html" class="pn-item mb-pt-hide">3</a>
                                                <span class="extend mb-pt-hide">...</span>
                                                <a href="author.html" class="pn-item mb-pt-hide">7</a>
                                                <a href="author.html" class="pn-item">
                                                    <i class="page-nav-next-ic"></i>
                                                </a>
                                                <span class="page-count">Page 1 of 7</span>
                                            </div>
                                            <!-- Page nav END -->
                                        </div>
                                    </div>
                                    <aside class="side-bar">
                                        <div class="js-sidebar">
                                            <div class="author-box-2">
                                                <div class="author-photo">
                                                    <img src="{{"/images/supplier/". $supplier -> avatar}}"
                                                         height="134" width="134">
                                                </div>
                                                <div class="author-name"><strong>{{$supplier -> name}}</strong></div>
                                                <div class="author-profession">{{$supplier ->url}}</div>
                                                <div class="author-description">{{$supplier ->description}}
                                                </div>
                                                <div class="author-social">
                                                    <ul>
                                                        <li class="tw"><a href="author.html">
                                                                <i class="fa fa-twitter"></i>
                                                            </a></li>
                                                        <li class="fb"><a href="author.html">
                                                                <i class="fa fa-facebook"></i>
                                                            </a></li>
                                                        <li class="gp"><a href="author.html">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a></li>
                                                        <li class="in"><a href="author.html">
                                                                <i class="fa fa-instagram"></i>
                                                            </a></li>
                                                        <li class="dr"><a href="author.html">
                                                                <i class="fa fa-dribbble"></i>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="forum-statistics-widget">
                                                <div class="pst-block">
                                                    <div class="pst-block-head">
                                                        <h2 class="title-4">Statistics</h2>
                                                    </div>
                                                    <div class="pst-block-main">
                                                        <div class="fs-list-block">
                                                            <ul class="fs-list">
                                                                <li class="fs-item">
                                                                    <a href="">Views <span class="count">25</span></a>
                                                                </li>
                                                                <li class="fs-item">
                                                                    <a href="">Likes <span class="count">6</span></a>
                                                                </li>
                                                                <li class="fs-item">
                                                                    <a href="">Comments <span class="count">25</span></a>
                                                                </li>
                                                                <li class="fs-item">
                                                                    <a href="">Subscribes <span class="count">125</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="forum-statistics-widget">
                                                <div class="pst-block">
                                                    <div class="pst-block-head">
                                                        <h2 class="title-4">Category</h2>
                                                    </div>
                                                    <div class="pst-block-main">
                                                        <div class="fs-list-block">
                                                            <ul class="fs-list">
                                                                <li class="fs-item">
                                                                    <a href="product.html">Registered Users <span class="count">25</span></a>
                                                                </li>
                                                                <li class="fs-item">
                                                                    <a href="product.html">Forums <span class="count">6</span></a>
                                                                </li>
                                                                <li class="fs-item">
                                                                    <a href="product.html">Topics <span class="count">25</span></a>
                                                                </li>
                                                                <li class="fs-item">
                                                                    <a href="product.html">Replies <span class="count">125</span></a>
                                                                </li>
                                                                <li class="fs-item">
                                                                    <a href="product.html">Topic Tags <span class="count">35</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ftrd-author">
                                                <div class="pst-block">
                                                    <div class="pst-block-head">
                                                        <h2 class="title-4"><strong>Featured by</strong> Author</h2>
                                                    </div>
                                                    <div class="pst-block-main">
                                                        <div class="js-csp-block">
                                                            <div class="item">
                                                                <figure class="full-img">
                                                                    <a href="author.html">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/360x245/3.jpg"
                                                                             alt="Spectr News Theme" class="adaptive"
                                                                             height="245" width="360">
                                                                    </a>
                                                                    <a href="author.html" class="category-tp-1">Life
                                                                        Style</a>
                                                                </figure>
                                                                <div class="post-wrap">
                                                                    <article class="post post-tp-11">
                                                                        <h3 class="title-10"><a href="author.html">Fusce
                                                                                ac orci sagittis mattis magna ultrices
                                                                                libero</a></h3>
                                                                        <div class="meta-tp-2">
                                                                            <div class="date">
                                                                                <span>october 2, 2015</span></div>
                                                                            <div class="author-tp-1">
                                                                                <a href="author.html"><i
                                                                                            class="li_user"></i><span>admin</span></a>
                                                                            </div>
                                                                        </div>
                                                                        <p class="p">Sed ut perspiciatis unde omnis iste
                                                                            natus sit volupt atem accusantium doloremque
                                                                            laudantium</p>
                                                                    </article>
                                                                    <article class="post post-tp-6">
                                                                        <figure>
                                                                            <a href="author.html">
                                                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/12.jpg"
                                                                                     alt="Spectr News Theme"
                                                                                     class="adaptive" height="85"
                                                                                     width="115">
                                                                            </a>
                                                                        </figure>
                                                                        <h3 class="title-6"><a href="author.html">Duis
                                                                                eu arcu sit amet ante tristique</a></h3>
                                                                        <div class="date-tp-2">october 2, 2015</div>
                                                                    </article>
                                                                    <article class="post post-tp-6">
                                                                        <figure>
                                                                            <a href="author.html">
                                                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/13.jpg"
                                                                                     alt="Spectr News Theme"
                                                                                     class="adaptive" height="85"
                                                                                     width="115">
                                                                            </a>
                                                                        </figure>
                                                                        <h3 class="title-6"><a href="author.html">Nam ut
                                                                                metus element pharetra diam sed</a></h3>
                                                                        <div class="date-tp-2">october 2, 2015</div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <figure class="full-img">
                                                                    <a href="author.html">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/360x245/3.jpg"
                                                                             alt="Spectr News Theme" class="adaptive"
                                                                             height="245" width="360">
                                                                    </a>
                                                                    <a href="author.html" class="category-tp-1">Life
                                                                        Style</a>
                                                                </figure>
                                                                <div class="post-wrap">
                                                                    <article class="post post-tp-11">
                                                                        <h3 class="title-10"><a href="author.html">Fusce
                                                                                ac orci sagittis mattis magna ultrices
                                                                                libero</a></h3>
                                                                        <div class="meta-tp-2">
                                                                            <div class="date">
                                                                                <span>october 2, 2015</span></div>
                                                                            <div class="author-tp-1">
                                                                                <a href="author.html"><i
                                                                                            class="li_user"></i><span>admin</span></a>
                                                                            </div>
                                                                        </div>
                                                                        <p class="p">Sed ut perspiciatis unde omnis iste
                                                                            natus sit volupt atem accusantium doloremque
                                                                            laudantium</p>
                                                                    </article>
                                                                    <article class="post post-tp-6">
                                                                        <figure>
                                                                            <a href="author.html">
                                                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/12.jpg"
                                                                                     alt="Spectr News Theme"
                                                                                     class="adaptive" height="85"
                                                                                     width="115">
                                                                            </a>
                                                                        </figure>
                                                                        <h3 class="title-6"><a href="author.html">Duis
                                                                                eu arcu sit amet ante tristique</a></h3>
                                                                        <div class="date-tp-2">october 2, 2015</div>
                                                                    </article>
                                                                    <article class="post post-tp-6">
                                                                        <figure>
                                                                            <a href="author.html">
                                                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/13.jpg"
                                                                                     alt="Spectr News Theme"
                                                                                     class="adaptive" height="85"
                                                                                     width="115">
                                                                            </a>
                                                                        </figure>
                                                                        <h3 class="title-6"><a href="author.html">Nam ut
                                                                                metus element pharetra diam sed</a></h3>
                                                                        <div class="date-tp-2">october 2, 2015</div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pst-block-foot">
                                                        <div class="js-sbr-pagination"></div>
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
@stop