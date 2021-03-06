@extends('component.home.default')

@section('content')
    <div class="content">
        <div class="main">
            <!-- Content -->
            <div class="main-content">
                <div class="page-head-tile">
                    <div class="container">
                    </div>
                </div>
                <!-- Page head tile END -->
                <div class="section">
                    <div class="row">
                        <div class="content">
                            <div class="popular-pst">
                                <div class="pst-block">
                                    <div class="pst-block-head">
                                        <h2 class="title-4"><strong>Popular</strong> news</h2>
                                        <div class="filters">
                                            <ul class="filters-list-1 xs-hide">
                                                <li>
                                                    <a class="active" id="all">all</a>
                                                </li>
                                                @foreach($tags as $tag)
                                                    <li>
                                                        <a id="{{$tag -> tag}}">{{$tag -> tag}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pst-block-main" id="popular-news">
                                        @include('component.supplier.popular-news')
                                    </div>
                                </div>
                            </div>
                            <div class="pst-block-head">
                                <h2 class="title-4"><strong>Latest</strong> news</h2>
                            </div>
                            <div class="page-content">
                                <div class="posts">
                                    @foreach($latestNews as $article)
                                        <article class="post post-tp-17">
                                            <figure>
                                                <a href="{{ route('news', ['newsId' => $article -> news_id]) }}">
                                                    <img src="{{$article ->image}}"
                                                         height="156" width="223" alt="Spectr News Theme"
                                                         class="adaptive"/>
                                                </a>
                                            </figure>
                                            <span class="category-tp-4">{{$article ->tag}}</span>
                                            <h3 class="title-5">
                                                <a href="{{ route('news', ['newsId' => $article -> news_id]) }}">{{$article ->title}}</a>
                                            </h3>
                                            <div class="meta-tp-2">
                                                <div class="date"><span>{{$article ->publish_date}}</span>
                                                </div>
                                                <div class="category">
                                                    <a><i class="li_eye"></i><span>25</span></a>
                                                </div>
                                            </div>
                                            <p class="p">{{$article ->content}}</p>
                                        </article>
                                    @endforeach
                                </div>
                                {!! $latestNews -> render()!!}
                            </div>
                        </div>
                        <aside class="side-bar">
                            <div class="js-sidebar">
                                <div class="author-box-2" id="{{$supplier->supplier_id}}">
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
                                                        <a>Views <span
                                                                    class="count">{{$supplier -> getViews()}}</span></a>
                                                    </li>
                                                    <li class="fs-item">
                                                        <a>Likes <span
                                                                    class="count">{{$supplier -> getLikes()}}</span></a>
                                                    </li>
                                                    <li class="fs-item">
                                                        <a>Comments <span
                                                                    class="count">{{$supplier -> getComments()}}</span></a>
                                                    </li>
                                                    <li class="fs-item">
                                                        <a>Subscribes <span class="count">125</span></a>
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
                                        <div class="pst-block-main popular">
                                            <div class="fs-list-block">
                                                <ul class="fs-list">
                                                    @foreach($tags as $tag)
                                                        <li class="fs-item">
                                                            <a>{{$tag -> tag}}
                                                                <span class="count">{{$tag -> getNewsCountByTag($tag -> tag)}}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
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
    <script src="/js/supplier/popular-news.js"></script>
@stop