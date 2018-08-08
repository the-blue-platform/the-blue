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
                                    class="icon-eye text-size-base text-pink position-left"></i> {{$article -> views()}}
                        </a></li>
                    <li><a class="text-muted"><i
                                    class="icon-heart6 text-size-base text-pink position-left"></i> {{$likes -> count()}}
                        </a></li>
                </ul>

                <div class="content-group">
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /post -->


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
