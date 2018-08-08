<li class="media main-comment comment-{{$comment->id}}">
    <div class="media-left">
        <a href="#"><img src="/images/users/face1.jpg"
                         class="img-circle img-sm" alt=""></a>
    </div>

    <div class="media-body">
        <div class="media-heading">
            <a href="#" class="text-semibold">{{$comment -> user -> getName()}}</a>
            <span class="media-annotation dotted">{{$comment -> created_at->diffForHumans()}}</span>
        </div>

        <p>{{$comment -> body}}</p>

        <ul class="list-inline list-inline-separate text-size-small">
            <li>
                <span id="like-comment-{{$comment->id}}"
                      style="color: #1e88e5">{{$comment -> getLikes() -> count()}}</span>
                Likes
            </li>
            <li>
                @if(!Auth::user() -> isCommentLiked($article -> news_id, $comment->id))
                    <a class="like-comment"
                       data-href="{{ route('comment.like', ['newsId' => $article -> news_id, 'commentId' => $comment -> id]) }}"
                       data-id="{{$comment->id}}"
                       title="Like this"><span id="like-comment-button-{{$comment->id}}">Like</span></a>
                @else
                    <a class="like-comment"
                       data-href="{{ route('comment.like', ['newsId' => $article -> news_id, 'commentId' => $comment -> id]) }}"
                       data-id="{{$comment->id}}"
                       title="Dislike this"><span id="like-comment-button-{{$comment->id}}">Dislike</span></a>
                @endif
            </li>
            <li><a href="#">Reply</a></li>
        </ul>
        @foreach($subComments as $subComment)
            @if($subComment -> parent_id == $comment -> id)
                @include('component.news.news-subcomment')
            @endif
        @endforeach
    </div>
</li>