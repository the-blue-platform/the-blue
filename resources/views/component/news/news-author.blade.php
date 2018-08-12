<div class="panel-heading">
    <h6 class="panel-title">About the author<a class="heading-elements-toggle"><i class="icon-more"></i></a>
    </h6>

    <div class="heading-elements">
        <ul class="icons-list icons-list-extended heading-text">
            <li><a href="#" data-popup="tooltip" data-container="body" title="Google Drive"><i
                            class="icon-google-drive"></i></a></li>
            <li><a href="#" data-popup="tooltip" data-container="body" title="Twitter"><i
                            class="icon-twitter"></i></a></li>
            <li><a href="#" data-popup="tooltip" data-container="body" title="Github"><i
                            class="icon-github"></i></a></li>
            <li><a href="#" data-popup="tooltip" data-container="body" title="Linked In"><i
                            class="icon-linkedin"></i></a></li>
        </ul>
    </div>
</div>

<div class="media panel-body no-margin">
    <div class="media-left">
        <a href="#">
            <img src="{{"/images/supplier/". $supplier -> avatar}}"
                 style="width: 68px; height: 68px;" class="img-circle" alt="">
        </a>
    </div>

    <div class="media-body">
        <h6 class="media-heading text-semibold">{{$supplier -> name}}</h6>
        <p>{{$supplier ->description}}</p>

        <ul class="list-inline list-inline-separate no-margin">
            <li><a href="#">Author profile</a></li>
            <li><a href="#">{{$supplier ->url}}</a></li>
        </ul>
    </div>
</div>