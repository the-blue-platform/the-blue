<div class="sidebar-content">

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

    <!-- Recent comments -->
    <div class="sidebar-category">
        <div class="category-title">
            <span>Related news</span>
            <ul class="icons-list">
                <li><a href="#" data-action="collapse"></a></li>
            </ul>
        </div>

        <div class="category-content">
            <ul class="media-list">
                @foreach($relatedNews as $news)
                    @include('component.news.related-news')
                @endforeach
            </ul>
        </div>
    </div>
    <!-- /recent comments -->

</div>