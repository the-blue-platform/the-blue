$(document).on("click", ".comment-news-submit", function () {
    var url = $(this).data("href");
    var news_id = $(this).data("news-id");
    var comment = $("#comment-" + news_id).val();
    $.ajax({
        method: "POST",
        url: url,
        data: {comment: comment, _token: token}
    }).success(function (data) {
        console.log(data);
        $(".comment-list li:nth-child(2)").before(data);
        $("#comment-" + news_id).val('');
    });
});

$(document).on("click", ".comment-comment-submit", function () {
    var url = $(this).data("href");
    var comment_id = $(this).data("comment-id");
    var comment = $("#comment-" + comment_id).val();
    $.ajax({
        method: "POST",
        url: url,
        data: {comment: comment, _token: token}
    }).success(function (data) {
        console.log(data);
        $("#comment-" + comment_id).val('');
    });
});