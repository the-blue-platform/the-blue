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
        <form role="form">
            <div class="form-group">
                <textarea name="content" class="form-control mb-15 post-content" rows="3" cols="1"
                          placeholder="What's on your mind?"></textarea>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <ul class="icons-list icons-list-extended mt-10">
                        <li><a href="#" data-popup="tooltip"
                               title="Add photo"
                               data-container="body"><i
                                        class="icon-images2"></i></a></li>
                        <li><a href="#" data-popup="tooltip"
                               title="Add video"
                               data-container="body"><i
                                        class="icon-film2"></i></a>
                        </li>
                        <li><a href="#" data-popup="tooltip"
                               title="Add event"
                               data-container="body"><i
                                        class="icon-calendar2"></i></a></li>
                    </ul>
                </div>

                <div class="col-xs-6 text-right">
                    <button type="button"
                            class="btn btn-primary btn-labeled btn-labeled-right share-post"
                            data-href="{{ route('user.post') }}">
                        Share <b><i class="icon-circle-right2"></i></b>
                    </button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </div>
            </div>
        </form>
    </div>
</div>