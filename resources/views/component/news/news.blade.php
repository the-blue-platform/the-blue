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
                    <a href="#" class="text-default">{{$article -> title}}</a>
                </h3>

                <ul class="list-inline list-inline-separate text-muted content-group">
                    <li>By <a href="#" class="text-muted">Eugene</a></li>
                    <li>July 5th, 2016</li>
                    <li><a href="#" class="text-muted">12 comments</a></li>
                    <li><a href="#" class="text-muted"><i
                                    class="icon-heart6 text-size-base text-pink position-left"></i> 281</a></li>
                </ul>

                <div class="content-group">
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /post -->


    <!-- About author -->
    <div class="panel panel-flat">
        @include('component.news.news-author')
    </div>
    <!-- /about author -->


    <!-- Comments -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title text-semiold"><i class="icon-bubbles4 position-left"></i> Comments</h5>
            <div class="heading-elements">
                <ul class="list-inline list-inline-separate heading-text text-muted">
                    <li>42 comments</li>
                    <li>75 pending review</li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <ul class="media-list stack-media-on-mobile">
                <li class="media">
                    <div class="media-left">
                        <a href="#"><img src="../../../../global_assets/images/demo/users/face2.jpg"
                                         class="img-circle img-sm" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-heading">
                            <a href="#" class="text-semibold">William Jennings</a>
                            <span class="media-annotation dotted">Just now</span>
                        </div>

                        <p>He moonlight difficult engrossed an it sportsmen. Interested has all devonshire
                            difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p>

                        <ul class="list-inline list-inline-separate text-size-small">
                            <li>114 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i
                                            class="icon-arrow-down22 text-danger"></i></a></li>
                            <li><a href="#">Reply</a></li>
                            <li><a href="#">Edit</a></li>
                        </ul>
                    </div>
                </li>

                <li class="media">
                    <div class="media-left">
                        <a href="#"><img src="../../../../global_assets/images/demo/users/face3.jpg"
                                         class="img-circle img-sm" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-heading">
                            <a href="#" class="text-semibold">Margo Baker</a>
                            <span class="media-annotation dotted">5 minutes ago</span>
                        </div>

                        <p>Place voice no arise along to. Parlors waiting so against me no. Wishing calling are
                            warrant settled was luckily. Express besides it present if at an opinion visitor.</p>

                        <ul class="list-inline list-inline-separate text-size-small">
                            <li>90 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i
                                            class="icon-arrow-down22 text-danger"></i></a></li>
                            <li><a href="#">Reply</a></li>
                            <li><a href="#">Edit</a></li>
                        </ul>
                    </div>
                </li>

                <li class="media">
                    <div class="media-left">
                        <a href="#"><img src="../../../../global_assets/images/demo/users/face1.jpg"
                                         class="img-circle img-sm" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-heading">
                            <a href="#" class="text-semibold">James Alexander</a>
                            <span class="media-annotation dotted">7 minutes ago</span>
                        </div>

                        <p>Savings her pleased are several started females met. Short her not among being any. Thing
                            of judge fruit charm views do. Miles mr an forty along as he.</p>

                        <ul class="list-inline list-inline-separate text-size-small">
                            <li>70 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i
                                            class="icon-arrow-down22 text-danger"></i></a></li>
                            <li><a href="#">Reply</a></li>
                            <li><a href="#">Edit</a></li>
                        </ul>

                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img src="../../../../global_assets/images/demo/users/face9.jpg"
                                                 class="img-circle img-sm" alt=""></a>
                            </div>

                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="#" class="text-semibold">Jack Cooper</a>
                                    <span class="media-annotation dotted">10 minutes ago</span>
                                </div>

                                <p>She education get middleton day agreement performed preserved unwilling. Do
                                    however as pleased offence outward beloved by present. By outward neither he so
                                    covered.</p>

                                <ul class="list-inline list-inline-separate text-size-small">
                                    <li>67 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a
                                                href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
                                    <li><a href="#">Reply</a></li>
                                    <li><a href="#">Edit</a></li>
                                </ul>

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img
                                                    src="../../../../global_assets/images/demo/users/face11.jpg"
                                                    class="img-circle img-sm" alt=""></a>
                                    </div>

                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a href="#" class="text-semibold">Natalie Wallace</a>
                                            <span class="media-annotation dotted">1 hour ago</span>
                                        </div>

                                        <p>Juvenile proposal betrayed he an informed weddings followed. Precaution
                                            day see imprudence sympathize principles. At full leaf give quit to in
                                            they up.</p>

                                        <ul class="list-inline list-inline-separate text-size-small">
                                            <li>54 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a
                                                        href="#"><i class="icon-arrow-down22 text-danger"></i></a>
                                            </li>
                                            <li><a href="#">Reply</a></li>
                                            <li><a href="#">Edit</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img
                                                    src="../../../../global_assets/images/demo/users/face13.jpg"
                                                    class="img-circle img-sm" alt=""></a>
                                    </div>

                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a href="#" class="text-semibold">Nicolette Grey</a>
                                            <span class="media-annotation dotted">2 hours ago</span>
                                        </div>

                                        <p>Although moreover mistaken kindness me feelings do be marianne. Son over
                                            own nay with tell they cold upon are. Cordial village and settled she
                                            ability law herself.</p>

                                        <ul class="list-inline list-inline-separate text-size-small">
                                            <li>41 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a
                                                        href="#"><i class="icon-arrow-down22 text-danger"></i></a>
                                            </li>
                                            <li><a href="#">Reply</a></li>
                                            <li><a href="#">Edit</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="media">
                    <div class="media-left">
                        <a href="#"><img src="../../../../global_assets/images/demo/users/face4.jpg"
                                         class="img-circle img-sm" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-heading">
                            <a href="#" class="text-semibold">Victoria Johnson</a>
                            <span class="media-annotation dotted">3 hours ago</span>
                        </div>

                        <p>Finished why bringing but sir bachelor unpacked any thoughts. Unpleasing unsatiable
                            particular inquietude did nor sir.</p>

                        <ul class="list-inline list-inline-separate text-size-small">
                            <li>32 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i
                                            class="icon-arrow-down22 text-danger"></i></a></li>
                            <li><a href="#">Reply</a></li>
                            <li><a href="#">Edit</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <hr class="no-margin">

        <div class="panel-body">
            <h6 class="no-margin-top content-group">Add comment</h6>
            <div class="content-group">
                <div id="add-comment">Get his declared appetite distance his together now families. Friends am
                    himself at on norland it viewing. Suspected elsewhere you belonging continued commanded she...
                </div>
            </div>

            <div class="text-right">
                <button type="button" class="btn bg-blue"><i class="icon-plus22"></i> Add comment</button>
            </div>
        </div>
    </div>
    <!-- /comments -->
@stop
@section('extend')
    <!-- Opposite sidebar -->
    <div class="sidebar sidebar-opposite sidebar-default sidebar-separate">
        <div class="sidebar-content">

            <!-- Sidebar search -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Search</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content">
                    <form action="#">
                        <div class="has-feedback has-feedback-left">
                            <input type="search" class="form-control" placeholder="Search">
                            <div class="form-control-feedback">
                                <i class="icon-search4 text-size-base text-muted"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /sidebar search -->


            <!-- Categories -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Categories</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content no-padding">
                    <ul class="navigation">
                        <li>
                            <a href="#">
                                <span class="text-muted text-size-small text-regular pull-right">12</span>
                                <i class="icon-wordpress"></i>
                                Wordpress
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="text-muted text-size-small text-regular pull-right">26</span>
                                <i class="icon-film2"></i>
                                Video
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="text-muted text-size-small text-regular pull-right">83</span>
                                <i class="icon-images2"></i>
                                Images
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="text-muted text-size-small text-regular pull-right">43</span>
                                <i class="icon-certificate"></i>
                                Articles
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="text-muted text-size-small text-regular pull-right">72</span>
                                <i class="icon-camera"></i>
                                Photography
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="text-muted text-size-small text-regular pull-right">97</span>
                                <i class="icon-bookmark"></i>
                                Books
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /categories -->


            <!-- Share -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Share</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content no-padding-bottom text-center">
                    <ul class="list-inline no-margin">
                        <li>
                            <a href="#" class="btn bg-indigo btn-icon content-group">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn bg-danger btn-icon content-group">
                                <i class="icon-youtube3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn bg-info btn-icon content-group">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn bg-orange btn-icon content-group">
                                <i class="icon-feed3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /share -->


            <!-- Recent comments -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Recent comments</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content">
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <img src="../../../../global_assets/images/demo/users/face10.jpg"
                                     class="img-circle img-sm" alt="">
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">James Alexander</span>
                                </a>

                                <span class="text-muted">Who knows, maybe that...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img src="../../../../global_assets/images/demo/users/face3.jpg"
                                     class="img-circle img-sm" alt="">
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Margo Baker</span>
                                </a>

                                <span class="text-muted">That was something he...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img src="../../../../global_assets/images/demo/users/face24.jpg"
                                     class="img-circle img-sm" alt="">
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Jeremy Victorino</span>
                                </a>

                                <span class="text-muted">But that would be...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img src="../../../../global_assets/images/demo/users/face4.jpg"
                                     class="img-circle img-sm" alt="">
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Beatrix Diaz</span>
                                </a>

                                <span class="text-muted">What a strenuous career...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img src="../../../../global_assets/images/demo/users/face25.jpg"
                                     class="img-circle img-sm" alt="">
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Richard Vango</span>
                                </a>

                                <span class="text-muted">Other travelling salesmen...</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /recent comments -->


            <!-- Tags -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Tags</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content no-padding-bottom">
                    <ul class="list-inline list-inline-condensed no-margin-bottom">
                        <li>
                            <a href="#">
                                <span class="label border-left-success label-striped content-group">Audio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label border-left-warning label-striped content-group">Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label border-left-indigo label-striped content-group">Image</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label border-left-teal label-striped content-group">Music</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label border-left-pink label-striped content-group">Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label border-left-purple label-striped content-group">Learn</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label border-left-blue label-striped content-group">Youtube</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label border-left-slate label-striped content-group">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label border-left-orange label-striped content-group">Eugene</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label border-left-brown label-striped content-group">Limitless</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /tags -->


            <!-- Thumbnails -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Photos from Flickr</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="sidebar-category-wrapper">
                    <div class="category-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="thumbnail no-padding no-border">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="../../../../global_assets/images/demo/flat/17.png" alt="">
                                            <span class="zoom-image"><i class="icon-plus22"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="thumbnail no-padding no-border">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="../../../../global_assets/images/demo/flat/16.png" alt="">
                                            <span class="zoom-image"><i class="icon-plus22"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="thumbnail no-padding no-border">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="../../../../global_assets/images/demo/flat/15.png" alt="">
                                            <span class="zoom-image"><i class="icon-plus22"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="thumbnail no-padding no-border">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="../../../../global_assets/images/demo/flat/14.png" alt="">
                                            <span class="zoom-image"><i class="icon-plus22"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="thumbnail no-padding no-border">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="../../../../global_assets/images/demo/flat/13.png" alt="">
                                            <span class="zoom-image"><i class="icon-plus22"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="thumbnail no-padding no-border">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="../../../../global_assets/images/demo/flat/12.png" alt="">
                                            <span class="zoom-image"><i class="icon-plus22"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /thumbnails -->


            <!-- Online users -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Online users</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content">
                    <ul class="media-list">
                        <li class="media">
                            <a href="#" class="media-left"><img
                                        src="../../../../global_assets/images/demo/users/face1.jpg"
                                        class="img-sm img-circle" alt=""></a>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">James Alexander</a>
                                <span class="text-size-mini text-muted display-block">Santa Ana, CA.</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark border-success"></span>
                            </div>
                        </li>

                        <li class="media">
                            <a href="#" class="media-left"><img
                                        src="../../../../global_assets/images/demo/users/face2.jpg"
                                        class="img-sm img-circle" alt=""></a>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">Jeremy Victorino</a>
                                <span class="text-size-mini text-muted display-block">Dowagiac, MI.</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark border-danger"></span>
                            </div>
                        </li>

                        <li class="media">
                            <a href="#" class="media-left"><img
                                        src="../../../../global_assets/images/demo/users/face3.jpg"
                                        class="img-sm img-circle" alt=""></a>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">Margo Baker</a>
                                <span class="text-size-mini text-muted display-block">Kasaan, AK.</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark border-success"></span>
                            </div>
                        </li>

                        <li class="media">
                            <a href="#" class="media-left"><img
                                        src="../../../../global_assets/images/demo/users/face4.jpg"
                                        class="img-sm img-circle" alt=""></a>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">Beatrix Diaz</a>
                                <span class="text-size-mini text-muted display-block">Neenah, WI.</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark border-warning"></span>
                            </div>
                        </li>

                        <li class="media">
                            <a href="#" class="media-left"><img
                                        src="../../../../global_assets/images/demo/users/face5.jpg"
                                        class="img-sm img-circle" alt=""></a>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">Richard Vango</a>
                                <span class="text-size-mini text-muted display-block">Grapevine, TX.</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark border-grey-400"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /online users -->


            <!-- Archive -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Archive</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content no-padding">
                    <ul class="navigation">
                        <li><a href="#">January 2017</a></li>
                        <li><a href="#">December 2016</a></li>
                        <li><a href="#">November 2016</a></li>
                        <li><a href="#">October 2016</a></li>
                        <li><a href="#">September 2016</a></li>
                        <li><a href="#">August 2016</a></li>
                        <li><a href="#">July 2016</a></li>
                    </ul>
                </div>
            </div>
            <!-- /archive -->

        </div>
    </div>
    <!-- /opposite sidebar -->
@stop