<div class="panel-body">
    <h6 class="no-margin-top content-group">Add comment</h6>
    <div class="content-group">
        <div id="add-comment">
            <div class="form-group">
                <textarea
                        id="comment-{{$article -> news_id}}"
                        placeholder="Write a comment..."
                        class="form-control"
                        rows="2"></textarea>
            </div>
        </div>
    </div>

    <div class="text-right">
        <button type="button" class="btn bg-blue comment-news-submit"
                data-href="{{ route('news.comment', ['newsId' => $article -> news_id]) }}"
                data-news-id="{{$article -> news_id}}">
            <i class="icon-plus22"></i> Add comment
        </button>
    </div>
</div>