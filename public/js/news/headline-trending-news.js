setInterval(updateHeadlineTrendingNews, 60000);

function updateHeadlineTrendingNews() {
    $.ajax({
        method: "GET",
        url: "/update/trendingnews",
        data: {}
    }).success(function (data) {
        document.getElementById("headline-trending-news").innerHTML = data;
        reloadSlick();
    });
}

function reloadSlick() {
    var slider = $('.js-trend-pst-slider');
    var pagg;

    slider.each(function () {
        var el = $(this);
        pagg = el.parents('.trpst-block').find('.js-sbr-pagination');

        el.slick({
            fade: true,
            speed: 1000,
            dots: true,
            arrows: false,
            appendDots: pagg,
            dotsClass: 'sbr-dots',
            customPaging: function (slider, i) {
                return '<span></span>';
            }
        });
    });
}