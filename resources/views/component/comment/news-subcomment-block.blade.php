<li class="comment subcomment">
    <article>
        <div class="comment-photo">
            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                 height="49" width="49">
        </div>
        <h6 class="title-20"><a
                    href="">{{$subComment -> user -> getName()}}</a></h6>
        <p>{{$subComment -> body}}</p>
        <div class="comment-date">{{$subComment -> created_at->diffForHumans()}}
        </div>
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
        <span id="like-subcomment-{{$subComment->id}}">{{$subComment -> getLikes() -> count()}} </span>
        likes
    </article>
</li>