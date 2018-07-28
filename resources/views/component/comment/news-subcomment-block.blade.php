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
        <a class="like-comment"
           data-href="{{ route('comment.like', ['newsId' => $article -> news_id, 'commentId' => $subComment -> id]) }}"
           data-id="{{$subComment->id}}"
           title="Like this"><span>Like </span></a>
        <span id="like-comment-{{$subComment->id}}">{{$subComment -> getLikes() -> count()}} </span>
        likes
    </article>
</li>