@extends('component.base.base')

<style>
    .news-content img {
        width: 100%;
        height: auto;
    }
</style>
@section('content')
    <!-- Post -->
    <div class="panel" style="padding-right: 50px; padding-left: 50px">
        <div class="panel-body">
            <div class="content-group-lg">
                <h3 class="text-semibold mb-5">
                    <a class="text-default">{{$article -> title}}</a>
                </h3>

                <ul class="list-inline list-inline-separate text-muted content-group">
                    <li>By <a class="text-muted">{{$supplier -> name}}</a></li>
                    <li>{{$article -> publish_date}}</li>
                    <li><a class="text-muted"><i
                                    class="li_eye text-size-base text-pink position-left"></i> {{$article -> views()}}
                        </a></li>
                    <li><a class="text-muted"><i
                                    class="li_like text-size-base text-pink position-left"></i> <span id="likes">{{$likes -> count()}}</span>
                        </a></li>
                </ul>

                <div class="content-group">
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /post -->

    <div class="panel panel-flat" style="padding-right: 50px; padding-left: 50px">
        <div class="sidebar-category">
            <div class="category-title">
                <span>Like this news?</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="row">
                <div class="category-content no-padding-bottom text-left col-lg-2">
                    <ul class="list-inline no-margin">
                        @if(!Auth::user() || !Auth::user() -> isNewsLiked($article -> news_id))
                            <li class="fb">
                                <a class="like"
                                   data-href="{{ route('news.like', ['newsId' => $article -> news_id]) }}">
                                    <i id="like-button-icon" class="fa li_like"
                                       style="margin-right:0"></i>
                                    <span class="mb-pt-hide">Like</span>
                                </a>
                            </li>
                        @else
                            <li class="fb">
                                <a class="like"
                                   data-href="{{ route('news.like', ['newsId' => $article -> news_id]) }}">
                                    <i id="like-button-icon" class="fa icon-thumbs-down2"
                                       style="margin-right:0"></i>
                                    <span class="mb-pt-hide">Dislike</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="category-content no-padding-bottom text-right col-lg-10">
                    <ul class="list-inline no-margin">
                        <li>
                            <a class="btn bg-indigo btn-icon content-group">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn bg-danger btn-icon content-group">
                                <i class="icon-youtube3"></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn bg-info btn-icon content-group">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn bg-danger btn-icon content-group">
                                <i class="icon-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- About author -->
    <div class="panel panel-flat" style="padding-right: 50px; padding-left: 50px">
        @include('component.news.news-author')
    </div>
    <!-- /about author -->

    <!-- Comments -->
    <div class="panel panel-flat" style="padding-right: 50px; padding-left: 50px">
        <div class="panel-heading">
            <h5 class="panel-title text-semiold"><i class="icon-bubbles4 position-left"></i> Comments</h5>
            <div class="heading-elements">
                <ul class="list-inline list-inline-separate heading-text text-muted">
                    <li><span id="views">{{$comments -> count() + $subComments -> count()}}</span> comments</li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <ul class="media-list stack-media-on-mobile">
                @foreach($comments as $comment)
                    @include('component.news.news-comment')
                @endforeach
            </ul>
        </div>

        <hr class="no-margin">

        @include('component.news.comment-action')
    </div>
    <!-- /comments -->
    {{--<script src="/js/news/latest-news.js"></script>--}}
    <script src="/js/like/like.js"></script>
    <script src="/js/comment/comment.js"></script>
@stop
@section('extend')
    <!-- Opposite sidebar -->
    <div class="sidebar sidebar-opposite sidebar-default sidebar-separate">
        @include('component.news.news-sidebar')
    </div>
    <!-- /opposite sidebar -->
@stop
