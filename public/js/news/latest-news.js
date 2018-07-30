setInterval(updateHeadlineTrendingNews, 60000);

function updateHeadlineTrendingNews() {
    var supplier_id = document.getElementsByClassName('pst-block-main resource')[0].id;
    $.ajax({
        method: "GET",
        url: "/update/latest/" + supplier_id,
        data: {}
    }).success(function (data) {
        document.getElementById("latest-news").innerHTML = data;
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