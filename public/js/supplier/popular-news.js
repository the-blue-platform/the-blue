setInterval(updateHeadlineTrendingNews, 60000);

function updateHeadlineTrendingNews() {
    var supplier_id = document.getElementsByClassName('author-box-2')[0].id;
    var tag = document.getElementsByClassName('active')[1].id;
    $.ajax({
        method: "GET",
        url: "supplier/update/" + supplier_id + "/" + tag,
        data: {}
    }).success(function (data) {
        document.getElementById("popular-news").innerHTML = data;
    });
}

$(document).on("click", "#all", function () {
    $("#Startup").removeClass('active');
    $("#Business").removeClass('active');
    $("#Science").removeClass('active');
    $("#all").addClass('active');
    updateHeadlineTrendingNews();
});

$(document).on("click", "#Startup", function () {
    $("#Startup").addClass('active');
    $("#Business").removeClass('active');
    $("#Science").removeClass('active');
    $("#all").removeClass('active');
    updateHeadlineTrendingNews();
});

$(document).on("click", "#Business", function () {
    $("#Business").addClass('active');
    $("#Startup").removeClass('active');
    $("#Science").removeClass('active');
    $("#all").removeClass('active');
    updateHeadlineTrendingNews();
});

$(document).on("click", "#Science", function () {
    $("#Science").addClass('active');
    $("#Startup").removeClass('active');
    $("#Business").removeClass('active');
    $("#all").removeClass('active');
    updateHeadlineTrendingNews();
});
