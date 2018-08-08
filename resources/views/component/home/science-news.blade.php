<div class="table-responsive">
    @foreach($science as $news)
        <div class="thumbnail col-lg-3" style="padding-left: 8px; padding-right: 8px">
            <div class="thumb">
                <img src="{{$news ->image}}" alt="">
                <div class="caption-overflow">
									<span>
										<a href="#" class="icon icon-eye"> 30</a>
									</span>
                </div>
            </div>

            <div class="caption">
                <h6 class="text-semibold no-margin">{{ str_limit($news -> title, $limit = 65, $end = '...') }}</h6>
                <p class="text-muted mb-15 mt-5">12 days ago</p>
                <div class="media">
                    <div class="media-left">
                        <img src="/images/users/face10.jpg" class="img-circle img-sm" alt="">
                    </div>

                    <div class="media-body">
                        <a href="#" class="media-heading">
                            <span class="text-blue"><strong>James Alexander</strong></span>
                            <span class="media-annotation pull-right">12:16</span>
                        </a>

                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                    </div>
                </div>
                <ul class="list-inline list-inline-condensed no-margin-bottom mt-15">
                    <li><a href="#"><img src="/images/users/face1.jpg" class="img-circle img-xs" alt=""></a></li>
                    <li><a href="#"><img src="/images/users/face24.jpg" class="img-circle img-xs" alt=""></a></li>
                    <li><a href="#"><img src="/images/users/face11.jpg" class="img-circle img-xs" alt=""></a></li>
                </ul>
            </div>
        </div>
    @endforeach
</div>