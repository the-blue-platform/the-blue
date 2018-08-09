/**
 * Like news
 */
$(document).on("click", ".like", function () {
    var url = $(this).data("href");
    var type = $(".mb-pt-hide").text();
    $.ajax({
        method: "POST",
        url: url,
        data: {_token: token}
    }).done(function (data) {
        $("#likes").text(data.like_num);
        if (type === "Like") {
            $(".mb-pt-hide").text("Dislike");
            $("#like-button-icon").removeClass('fa li_like').addClass('fa icon-thumbs-down2');
        } else {
            $(".mb-pt-hide").text("Like");
            $("#like-button-icon").removeClass('fa icon-thumbs-down2').addClass('fa li_like');
        }
    });
});

/**
 * Like comment
 */
$(document).on("click", ".like-comment", function () {
    var url = $(this).data("href");
    var id = $(this).data("id");
    var type = $("#like-comment-button-" + id).text();
    $.ajax({
        method: "POST",
        url: url,
        data: {_token: token}
    }).done(function (data) {
        $("#like-comment-" + id).text(data.comment_like);
        if (type === "Like") {
            $("#like-comment-button-" + id).text("Dislike");
        } else {
            $("#like-comment-button-" + id).text("Like");
        }
    });
});

/**
 * Like sub comment
 */
$(document).on("click", ".like-subcomment", function () {
    var url = $(this).data("href");
    var id = $(this).data("id");
    var type = $("#like-subcomment-button-" + id).text();
    $.ajax({
        method: "POST",
        url: url,
        data: {_token: token}
    }).done(function (data) {
        $("#like-subcomment-" + id).text(data.comment_like);
        if (type === "Like") {
            $("#like-subcomment-button-" + id).text("Dislike");
        } else {
            $("#like-subcomment-button-" + id).text("Like");
        }
    });
});