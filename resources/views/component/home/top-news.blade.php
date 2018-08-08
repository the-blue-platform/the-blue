<div class="panel panel-flat">
    <div id="headline" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#headline" data-slide-to="0" class="active"></li>
            <li data-target="#headline" data-slide-to="1"></li>
            <li data-target="#headline" data-slide-to="2"></li>
            <li data-target="#headline" data-slide-to="3"></li>
            <li data-target="#headline" data-slide-to="4"></li>
            <li data-target="#headline" data-slide-to="5"></li>
            <li data-target="#headline" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($headline as $article)
                <div class="item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{$article ->getImage()}}" href="{{ route('news', ['newsId' => $article -> getId()]) }}"
                         style="width: 100%;height: auto;">
                    <div class="carousel-caption">
                        <h3 href="{{ route('news', ['newsId' => $article -> getId()]) }}">{{$article -> getTitle()}}</h3>
                        <p>{{$article -> getPublishDate()}}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#headline" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#headline" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>