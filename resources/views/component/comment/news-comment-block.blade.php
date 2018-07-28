<li class="comment comment-{{$comment->id}}">
    <article>
        <div class="comment-photo">
            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                 height="49" width="49">
        </div>
        <h6 class="title-20"><a href="">{{$comment -> user -> getName()}}</a></h6>
        <p>{{$comment -> body}}</p>
        <div class="comment-date">{{$comment -> created_at->diffForHumans()}}</div>
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
        <span>
            <span id="like-comment-{{$comment->id}}">{{$comment -> getLikes() -> count()}}</span>
            likes
        </span>
    </article>
    <ul class="sub-comment-list">
        @foreach($subComments as $subComment)
            @if($subComment -> parent_id == $comment -> id)
                @include('component.comment.news-subcomment-block')
            @endif
        @endforeach
        <li class="comment subcomment-box">
            <article>
                <div class="comment-photo">
                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                         height="49" width="49"
                         alt="Spectr News Theme">
                </div>
                <div>
                    <div class="form-group">
                            <textarea
                                    id="comment-{{$comment -> id}}"
                                    placeholder="Write a comment..."
                                    class="form-control"
                                    rows="1"></textarea>
                    </div>
                    <button class="btn btn-default comment-comment-submit"
                            data-href="{{ route('comment.comment', ['commentId' => $comment -> id, 'newsId' => $article -> news_id]) }}"
                            data-news-id="{{$article -> news_id}}"
                            data-comment-id="{{$comment -> id}}">
                        Comment
                    </button>
                </div>
            </article>
        </li>
    </ul>
</li>