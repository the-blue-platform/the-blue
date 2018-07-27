<article>
    <div class="comment-photo">
        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png" height="49" width="49">
    </div>
    <div>
        <form role="form"
              action="{{ route('news.comment', ['newsId' => $article -> news_id]) }}"
              method="post">
            <div class="form-group {{$errors -> has("comment-{$article -> news_id}") ? 'has-error' : ''}}"><textarea
                        name="comment-{{$article -> news_id}}"
                        placeholder="Write a comment..."
                        class="form-control"
                        rows="2"></textarea>
            </div>
            @if ($errors -> has("comment-{$article -> news_id}"))
                <span class="help-block">{{ $errors -> first("comment-{$article -> news_id}") }}</span>
            @endif
            <button class="btn btn-default">Comment</button>
            <input type="hidden" name="_token"
                   value="{{Session::token()}}">
        </form>
    </div>
</article>