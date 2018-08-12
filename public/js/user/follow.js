$(document).on("click", ".follow-user", function () {
    var url = $(this).data("href");
    var type = $("#follow-text").text();
    console.log(url);
    console.log(type);
    $.ajax({
        method: "POST",
        url: url,
        data: {_token: token}
    }).done(function (data) {
        console.log(data.result);
        if (type === "Follow") {
            $("#follow-text").text("Unfollow");
            $("#follow-user").removeClass('icon-user-plus position-left').addClass('icon-user-minus position-left');
        } else {
            $("#follow-text").text("Follow");
            $("#follow-user").removeClass('icon-user-minus position-left').addClass('icon-user-plus position-left');
        }
    });
});