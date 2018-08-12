$(document).on("click", ".share-post", function () {
    var url = $(this).data("href");
    var content = $(".post-content").val();
    $.ajax({
        method: "POST",
        url: url,
        data: {content: content, _token: token}
    }).done(function (data) {
        $(".posts").prepend(data.view);
        $(".post-content").val('');
    });
});