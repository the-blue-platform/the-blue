<article>
    <div class="comment-photo">
        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/comment-photo.png" height="49" width="49">
    </div>
    <div>
        <div class="form-group">
                <textarea
                        id="comment-{{$article -> news_id}}"
                        placeholder="Write a comment..."
                        class="form-control"
                        rows="2"></textarea>
        </div>
        <button class="btn btn-default comment-news-submit"
                data-href="{{ route('news.comment', ['newsId' => $article -> news_id]) }}"
                data-news-id="{{$article -> news_id}}">
            Comment
        </button>
    </div>
</article>