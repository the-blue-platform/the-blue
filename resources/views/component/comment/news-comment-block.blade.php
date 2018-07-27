<li class="comment">
    <article>
        <div class="comment-photo">
            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png"
                 height="49" width="49">
        </div>
        <h6 class="title-20"><a href="">{{$comment -> user -> getName()}}</a></h6>
        <p>{{$comment -> body}}</p>
        <div class="comment-date">{{$comment -> created_at->diffForHumans()}}</div>
        <a href="{{ route('comment.like', ['newsId' => $article -> news_id, 'commentId' => $comment -> id]) }}"
           title="Like this"><span>Like </span></a>
        <span>{{$comment -> getLikes() -> count()}} likes</span>
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
                        <a href="{{ route('comment.like', ['newsId' => $article -> news_id, 'commentId' => $subComment -> id]) }}"
                           title="Like this"><span>Like </span></a>
                        <span>{{$subComment -> getLikes() -> count()}} likes</span>
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
                    <form role="form"
                          action="{{ route('comment.comment', ['commentId' => $comment -> id, 'newsId' => $article -> news_id]) }}"
                          method="post">
                        <div class="form-group {{$errors -> has("comment-{$comment -> id}") ? 'has-error' : ''}}"><textarea
                                    name="comment-{{$comment -> id}}"
                                    placeholder="Write a comment..."
                                    class="form-control"
                                    rows="1"></textarea>
                        </div>
                        @if ($errors -> has("comment-{$comment -> id}"))
                            <span class="help-block">{{ $errors -> first("comment-{$comment -> id}") }}</span>
                        @endif
                        <span class="help-block"></span>
                        <button class="btn btn-default">Comment
                        </button>
                        <input type="hidden" name="_token"
                               value="{{Session::token()}}">
                    </form>
                </div>
            </article>
        </li>
    </ul>
</li>