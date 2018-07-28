<li class="comment">
    <article>
        <div class="comment-photo">
            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                 height="49" width="49">
        </div>
        <h6 class="title-20"><a href="">{{$comment -> user -> getName()}}</a></h6>
        <p>{{$comment -> body}}</p>
        <div class="comment-date">{{$comment -> created_at->diffForHumans()}}</div>
        <a class="like-comment"
           data-href="{{ route('comment.like', ['newsId' => $article -> news_id, 'commentId' => $comment -> id]) }}"
           data-id="{{$comment->id}}"
           title="Like this"><span>Like </span></a>
        <span>
            <span id="like-comment-{{$comment->id}}">{{$comment -> getLikes() -> count()}}</span>
            likes
        </span>
    </article>
    <ul class="sub-comment-list">
        @foreach($subComments as $subComment)
            @if($subComment -> parent_id == $comment -> id)
                <li class="comment">
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
                        <a class="like-comment"
                           data-href="{{ route('comment.like', ['newsId' => $article -> news_id, 'commentId' => $subComment -> id]) }}"
                           data-id="{{$subComment->id}}"
                           title="Like this"><span>Like </span></a>
                        <span id="like-comment-{{$subComment->id}}">{{$subComment -> getLikes() -> count()}} </span>
                        likes
                    </article>
                </li>
            @endif
        @endforeach
        <li class="comment">
            <article>
                <div class="comment-photo">
                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                         height="49" width="49"
                         alt="Spectr News Theme">
                </div>
                <div>
                        <div>
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