@extends('component.base.base')
@section('content')
    <!-- Secondary sidebar -->
    <div class="content-wrapper">

        <!-- Cover area -->
        <div class="profile-cover">
            @include('component.user.user-cover')
        </div>
        <!-- /cover area -->


        <!-- Toolbar -->
        <div class="navbar navbar-default navbar-xs navbar-component no-border-radius-top">
            <ul class="nav navbar-nav visible-xs-block">
                <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i
                                class="icon-menu7"></i></a></li>
            </ul>

            <div class="navbar-collapse collapse" id="navbar-filter">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#activity" data-toggle="tab"><i class="icon-menu7 position-left"></i>
                            Activity</a></li>
                    <li><a href="#settings" data-toggle="tab"><i class="icon-cog3 position-left"></i> Settings</a></li>
                </ul>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="icon-stack-text position-left"></i> Notes</a></li>
                        <li><a href="#"><i class="icon-collaboration position-left"></i> Friends</a></li>
                        <li><a href="#"><i class="icon-images3 position-left"></i> Photos</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i> <span
                                        class="visible-xs-inline-block position-right"> Options</span> <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-image2"></i> Update cover</a></li>
                                <li><a href="#"><i class="icon-clippy"></i> Update info</a></li>
                                <li><a href="#"><i class="icon-make-group"></i> Manage sections</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-three-bars"></i> Activity log</a></li>
                                <li><a href="#"><i class="icon-cog5"></i> Profile settings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /toolbar -->


        <!-- User profile -->
        <div class="row">
            <div class="col-lg-9">
                <div class="tabbable">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="activity">
                            <!-- Timeline -->
                            <div class="timeline timeline-left content-group">
                                <div class="timeline-container">

                                    <!-- Blog post -->
                                    <div class="timeline-row">
                                        <div class="timeline-icon">
                                            <img src="{{ $user -> avatar}}" alt="">
                                        </div>
                                        <div class="panel panel-flat">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">Share your thoughts</h6>
                                                <div class="heading-elements">
                                                    <ul class="icons-list">
                                                        <li><a data-action="collapse"></a></li>
                                                        <li><a data-action="reload"></a></li>
                                                        <li><a data-action="close"></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="panel-body">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <textarea name="enter-message" class="form-control mb-15"
                                                                  rows="3" cols="1"
                                                                  placeholder="What's on your mind?"></textarea>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <ul class="icons-list icons-list-extended mt-10">
                                                                <li><a href="#" data-popup="tooltip" title="Add photo"
                                                                       data-container="body"><i
                                                                                class="icon-images2"></i></a></li>
                                                                <li><a href="#" data-popup="tooltip" title="Add video"
                                                                       data-container="body"><i class="icon-film2"></i></a>
                                                                </li>
                                                                <li><a href="#" data-popup="tooltip" title="Add event"
                                                                       data-container="body"><i
                                                                                class="icon-calendar2"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-xs-6 text-right">
                                                            <button type="button"
                                                                    class="btn btn-primary btn-labeled btn-labeled-right">
                                                                Share <b><i class="icon-circle-right2"></i></b></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="panel panel-flat timeline-content">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">Himalayan sunset</h6>
                                                <div class="heading-elements">
                                                    <span class="heading-text"><i
                                                                class="icon-checkmark-circle position-left text-success"></i> 49 minutes ago</span>
                                                    <ul class="icons-list">
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-arrow-down12"></i>
                                                            </a>

                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-user-lock"></i> Hide user
                                                                        posts</a></li>
                                                                <li><a href="#"><i class="icon-user-block"></i> Block
                                                                        user</a></li>
                                                                <li><a href="#"><i class="icon-user-minus"></i> Unfollow
                                                                        user</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-embed"></i> Embed
                                                                        post</a></li>
                                                                <li><a href="#"><i class="icon-blocked"></i> Report this
                                                                        post</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="panel-body">
                                                <a href="#" class="display-block content-group">
                                                    <img src="/images/demo/cover3.jpg"
                                                         class="img-responsive content-group" alt="">
                                                </a>

                                                <h6 class="content-group">
                                                    <i class="icon-comment-discussion position-left"></i>
                                                    Comment from <a href="#">Jason Ansley</a>:
                                                </h6>

                                                <blockquote>
                                                    <p>When suspiciously goodness labrador understood rethought yawned
                                                        grew piously endearingly inarticulate oh goodness jeez trout
                                                        distinct hence cobra despite taped laughed the much audacious
                                                        less inside tiger groaned darn stuffily metaphoric unihibitedly
                                                        inside cobra.</p>
                                                    <footer>Jason, <cite title="Source Title">10:39 am</cite></footer>
                                                </blockquote>
                                            </div>

                                            <div class="panel-footer panel-footer-transparent">
                                                <div class="heading-elements">
                                                    <ul class="list-inline list-inline-condensed heading-text">
                                                        <li><a href="#" class="text-default"><i
                                                                        class="icon-eye4 position-left"></i> 438</a>
                                                        </li>
                                                        <li><a href="#" class="text-default"><i
                                                                        class="icon-comment-discussion position-left"></i>
                                                                71</a></li>
                                                    </ul>

                                                    <span class="heading-btn pull-right">
																<a href="#" class="btn btn-link">Read post <i
                                                                            class="icon-arrow-right14 position-right"></i></a>
															</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /blog post -->

                                </div>
                            </div>
                            <!-- /timeline -->
                        </div>

                        <div class="tab-pane fade" id="settings">

                            <!-- Profile info -->
                        @include('component.user.user-setting')
                        <!-- /profile info -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <!-- Connections -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Latest connections</h6>
                        <div class="heading-elements">
                            <span class="badge badge-success heading-text">+32</span>
                        </div>
                    </div>

                    <ul class="media-list media-list-linked pb-5">
                        <li class="media-header">Office staff</li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="/images/users/face1.jpg" class="img-circle img-md"
                                                             alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">James Alexander</span>
                                    <span class="media-annotation">UI/UX expert</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="/images/users/face2.jpg" class="img-circle img-md"
                                                             alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Jeremy Victorino</span>
                                    <span class="media-annotation">Senior designer</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-danger"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="/images/users/face6.jpg" class="img-circle img-md"
                                                             alt=""></div>
                                <div class="media-body">
                                    <div class="media-heading"><span class="text-semibold">Jordana Mills</span></div>
                                    <span class="text-muted">Sales consultant</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-grey-300"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="/images/users/face9.jpg" class="img-circle img-md"
                                                             alt=""></div>
                                <div class="media-body">
                                    <div class="media-heading"><span class="text-semibold">William Miles</span></div>
                                    <span class="text-muted">SEO expert</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media-header">Partners</li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="/images/users/face3.jpg" class="img-circle img-md"
                                                             alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Margo Baker</span>
                                    <span class="media-annotation">Google</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="/images/users/face4.jpg" class="img-circle img-md"
                                                             alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Beatrix Diaz</span>
                                    <span class="media-annotation">Facebook</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-warning-400"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="/images/users/face5.jpg" class="img-circle img-md"
                                                             alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Richard Vango</span>
                                    <span class="media-annotation">Microsoft</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-grey-300"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /connections -->

            </div>
        </div>
        <!-- /user profile -->

    </div>
    <!-- /main content -->
@stop
@section('extend')
@stop
