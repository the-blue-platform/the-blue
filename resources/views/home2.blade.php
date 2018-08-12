@extends('component.base.base')

@section('content')
    <!-- Main contents -->
    <div class="row" style="padding-left: 100px;padding-right:100px;">
        <div class="col-lg-8" style="height: 466px; padding-left: 0; padding-right: 0; overflow: hidden">

            <!-- Headline contents -->
            @include('component.home.top-news')
        </div>

        <div class="col-lg-4" style="overflow: scroll; height: 466px; padding-right: 0; padding-bottom: 0;">
            <div class="panel panel-flat" style="height: 466px">
                <div class="panel-heading">
                    <h6 class="panel-title">Latest posts</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('component.home.trending-news')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding-left: 100px;padding-right:100px;">
        <div class="panel-heading" style="padding-left: 0">
            <h6 class="panel-title">Recommendations for you</h6>
            <div class="heading-elements">
                <span class="label bg-success heading-text">28 news</span>
            </div>
        </div>
        @include('component.home.recommendation-news')
    </div>

    <div class="row" style="padding-left: 100px;padding-right:100px;">
        <div class="col-lg-8" style="height: 430px; padding-left: 0">

            <!-- Marketing campaigns -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Latest posts</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="media-list content-group">
                                <li class="media stack-media-on-mobile">
                                    <div class="media-left">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="https://www.w3schools.com/bootstrap/chicago.jpg"
                                                     class="img-responsive img-rounded media-preview" alt="">
                                                <span class="zoom-image"><i class="icon-play3"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="#">Up unpacked friendly</a></h6>
                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                            <li><i class="icon-book-play position-left"></i> Video tutorials</li>
                                            <li>14 minutes ago</li>
                                        </ul>
                                        The him father parish looked has sooner. Attachment frequently gay terminated
                                        son...
                                    </div>
                                </li>

                                <li class="media stack-media-on-mobile">
                                    <div class="media-left">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="https://www.w3schools.com/bootstrap/chicago.jpg"
                                                     class="img-responsive img-rounded media-preview" alt="">
                                                <span class="zoom-image"><i class="icon-play3"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="#">It allowance prevailed</a></h6>
                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                            <li><i class="icon-book-play position-left"></i> Video tutorials</li>
                                            <li>12 days ago</li>
                                        </ul>
                                        Alteration literature to or an sympathize mr imprudence. Of is ferrars subject
                                        as enjoyed...
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul class="media-list content-group">
                                <li class="media stack-media-on-mobile">
                                    <div class="media-left">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="https://www.w3schools.com/bootstrap/chicago.jpg"
                                                     class="img-responsive img-rounded media-preview" alt="">
                                                <span class="zoom-image"><i class="icon-play3"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="#">Case read they must</a></h6>
                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                            <li><i class="icon-book-play position-left"></i> Video tutorials</li>
                                            <li>20 hours ago</li>
                                        </ul>
                                        On it differed repeated wandered required in. Then girl neat why yet knew rose
                                        spot...
                                    </div>
                                </li>

                                <li class="media stack-media-on-mobile">
                                    <div class="media-left">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="https://www.w3schools.com/bootstrap/chicago.jpg"
                                                     class="img-responsive img-rounded media-preview" alt="">
                                                <span class="zoom-image"><i class="icon-play3"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="#">Too carriage attended</a></h6>
                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                            <li><i class="icon-book-play position-left"></i> FAQ section</li>
                                            <li>2 days ago</li>
                                        </ul>
                                        Marianne or husbands if at stronger ye. Considered is as middletons
                                        uncommonly...
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4" style="overflow: scroll; height: 430px; padding-right: 0">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Daily financials</h6>
                    <div class="heading-elements">
                        <form class="heading-form" action="#">
                            <div class="form-group">
                                <label class="checkbox checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                    <input type="checkbox" class="switcher" id="realtime" checked="checked">
                                    Realtime
                                </label>
                            </div>
                        </form>
                        <span class="badge bg-danger-400 heading-text">+86</span>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="content-group-xs" id="bullets"></div>

                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-pink text-pink btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-statistics"></i></a>
                            </div>

                            <div class="media-body">
                                Stats for July, 6: 1938 orders, $4220 revenue
                                <div class="media-annotation">2 hours ago</div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-arrow-right13"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#"
                                   class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-checkmark3"></i></a>
                            </div>

                            <div class="media-body">
                                Invoices <a href="#">#4732</a> and <a href="#">#4734</a> have been paid
                                <div class="media-annotation">Dec 18, 18:36</div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-arrow-right13"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#"
                                   class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-alignment-unalign"></i></a>
                            </div>

                            <div class="media-body">
                                Affiliate commission for June has been paid
                                <div class="media-annotation">36 minutes ago</div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-arrow-right13"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#"
                                   class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-spinner11"></i></a>
                            </div>

                            <div class="media-body">
                                Order <a href="#">#37745</a> from July, 1st has been refunded
                                <div class="media-annotation">4 minutes ago</div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-arrow-right13"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#"
                                   class="btn border-teal-400 text-teal btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-redo2"></i></a>
                            </div>

                            <div class="media-body">
                                Invoice <a href="#">#4769</a> has been sent to <a href="#">Robert Smith</a>
                                <div class="media-annotation">Dec 12, 05:46</div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-arrow-right13"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding-left: 100px;padding-right:100px;">
        <div class="panel-heading">
            <h6 class="panel-title">Technology</h6>
            <div class="heading-elements">
                <span class="label bg-success heading-text">28 news</span>
            </div>
        </div>
        @include('component.home.technology-news')
    </div>

    <div class="row" style="padding-left: 100px;padding-right:100px;">
        <div class="panel-heading">
            <h6 class="panel-title">Business</h6>
            <div class="heading-elements">
                <span class="label bg-success heading-text">28 news</span>
            </div>
        </div>
        @include('component.home.business-news')
    </div>
    <div class="row" style="padding-left: 100px;padding-right:100px;">
        <div class="panel-heading">
            <h6 class="panel-title">Science</h6>
            <div class="heading-elements">
                <span class="label bg-success heading-text">28 news</span>
            </div>
        </div>
        @include('component.home.science-news')
    </div>
@stop