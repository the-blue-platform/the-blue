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
                                                <div class="pst-block">
                                                    <div class="pst-block-head">
                                                        <h2 class="title-4"><strong>Resource</strong></h2>
                                                    </div>
                                                    <div class="pst-block-main">
                                                        <div class="cart-products">
                                                            <div class="mini-cart">
                                                                <ul class="product-list-widget">
                                                                    <li class="mini-cart-item">
                                                                        <a href="product.html" class="remove"><i
                                                                                    class="remove-ic-1"></i></a>
                                                                        <figure class="product-img">
                                                                            <a href="product.html"><img
                                                                                        src="https://s3.amazonaws.com/weblionmedia-spectr/img/75x58/1.jpg"
                                                                                        height="58" width="75"
                                                                                        alt="Spectr News Theme"></a>
                                                                        </figure>
                                                                        <div class="product-title"><a
                                                                                    href="product.html">But I must
                                                                                explain</a></div>
                                                                        1 x
                                                                        <div class="product-price">$125.00</div>
                                                                    </li>
                                                                </ul>
                                                                <div class="total">Subtotal: <span
                                                                            class="amount">$125</span></div>
                                                                <div class="buttons">
                                                                    <a href="product.html#" class="btn-5"><i
                                                                                class="cart-ic-light"></i> view cart</a>
                                                                    <a href="product.html#" class="btn-5"><i
                                                                                class="cart-ic-light"></i> chechout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="latest-products-widget">
                                                <div class="pst-block">
                                                    <div class="pst-block-head">
                                                        <h2 class="title-4"><strong>Latest</strong> Products</h2>
                                                    </div>
                                                    <div class="js-trend-pst-slider">
                                                        <div>
                                                            @foreach($trending_left as $article)
                                                                <article class="post post-tp-3">
                                                                    <figure>
                                                                        <a href="{{$article -> link}}"><img
                                                                                    src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/1.jpg"
                                                                                    height="98" width="126"
                                                                                    alt="Spectr News Theme"
                                                                                    class="adaptive"/></a>
                                                                    </figure>
                                                                    <a href="#" class="category-tp-2">business</a>
                                                                    <h3 class="title-3"><a
                                                                                href="{{$article -> link}}">{{$article -> title}}</a>
                                                                    </h3>
                                                                    <div class="date-tp-2">{{$article -> publish_date}}</div>
                                                                </article>
                                                            @endforeach
                                                        </div>
                                                        <div>
                                                            <article class="post post-tp-3">
                                                                <figure>
                                                                    <a href="index.html"><img
                                                                                src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/2.jpg"
                                                                                height="98" width="126"
                                                                                alt="Spectr News Theme"
                                                                                class="adaptive"/></a>
                                                                </figure>
                                                                <a href="index.html" class="category-tp-2">video</a>
                                                                <h3 class="title-3"><a href="index.html">Duis eu arcu
                                                                        sit amet ante</a></h3>
                                                                <div class="date-tp-2">october 2, 2015</div>
                                                            </article>
                                                            <article class="post post-tp-3">
                                                                <figure>
                                                                    <a href="index.html"><img
                                                                                src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/3.jpg"
                                                                                height="98" width="126"
                                                                                alt="Spectr News Theme"
                                                                                class="adaptive"/></a>
                                                                </figure>
                                                                <a href="index.html" class="category-tp-2">design</a>
                                                                <h3 class="title-3"><a href="index.html">Fusce ac orci
                                                                        sagittis mattis</a>
                                                                </h3>
                                                                <div class="date-tp-2">october 2, 2015</div>
                                                            </article>
                                                            <article class="post post-tp-3">
                                                                <figure>
                                                                    <a href="index.html"><img
                                                                                src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/1.jpg"
                                                                                height="98" width="126"
                                                                                alt="Spectr News Theme"
                                                                                class="adaptive"/></a>
                                                                </figure>
                                                                <a href="index.html" class="category-tp-2">business</a>
                                                                <h3 class="title-3"><a href="index.html">Mauris porta
                                                                        quam a lorem
                                                                        honcus</a></h3>
                                                                <div class="date-tp-2">october 2, 2015</div>
                                                            </article>
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
