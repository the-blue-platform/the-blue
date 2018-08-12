<div class="media">
    <div class="media-left">
        <a href="#"><img src="{{$subComment -> user -> getName()}}"
                         class="img-circle img-sm" alt=""></a>
    </div>

    <div class="media-body">
        <div class="media-heading">
            <a href="#" class="text-semibold">{{$subComment -> user -> getName()}}</a>
            <span class="media-annotation dotted">{{$subComment -> created_at->diffForHumans()}}</span>
        </div>

        <p>{{$subComment -> body}}</p>

        <ul class="list-inline list-inline-separate text-size-small">
            <li>
                <span id="like-subcomment-{{$subComment->id}}"
                      style="color: #1e88e5">{{$subComment -> getLikes() -> count()}} </span>
                Likes
            <li>
                @if(!Auth::user() -> isCommentLiked($article -> news_id, $subComment->id))
                    <a class="like-subcomment"
                       data-href="{{ route('comment.like', ['newsId' => $article -> news_id, 'commentId' => $subComment -> id]) }}"
                       data-id="{{$subComment->id}}"
                       title="Like this"><span id="like-subcomment-button-{{$subComment -> id}}">Like</span></a>
                @else
                    <a class="like-subcomment"
                       data-href="{{ route('comment.like', ['newsId' => $article -> news_id, 'commentId' => $subComment -> id]) }}"
                       data-id="{{$subComment->id}}"
                       title="Dislike this"><span id="like-subcomment-button-{{$subComment -> id}}">Dislike</span></a>
                @endif
            </li>
        </ul>

    </div>
</div>