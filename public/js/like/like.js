$(document).on("click", ".like", function () {
    var url = $(this).data("href");

    $.ajax({
        method: "POST",
        url: url,
        data: {_token: token}
    }).success(function (data) {
        $("#likes").text(data.like_num);
    });
});

$(document).on("click", ".like-comment", function () {
    var url = $(this).data("href");
    var id = $(this).data("id");
    $.ajax({
        method: "POST",
        url: url,
        data: {_token: token}
    }).success(function (data) {
        console.log(data);
        $("#like-comment-" + id).text(data.comment_like);
    });
});