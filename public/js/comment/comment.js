
$(document).on("click", ".comment-news-submit", function () {
    var url = $(this).data("href");
    var news_id = $(this).data("news-id");
    var comment = $("#comment-" + news_id).val();
    $.ajax({
        method: "POST",
        url: url,
        data: {comment: comment, _token: token}
    }).success(function (data) {
        $(".comment-list #news-comment-box").after(data.view);
        $("#comment-" + news_id).val('');
        $("#views").text(data.viewCounts);
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
        $("#comment-" + comment_id).val('');
        $(".comment-" + comment_id + " " + ".subcomment-box").before(data.view);
        $("#views").text(data.viewCounts);
    });
});