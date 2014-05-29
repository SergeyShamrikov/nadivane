(function($) {
    $(function() {
        var jcarouselSlider = $('.slider .jcarousel');
        var jcarouselBanners = $('.carousel-banners .jcarousel');

        jcarouselSlider
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarouselSlider.innerWidth();

                if (width >= 750) {
                    width = width / 1;
                } else if (width >= 350) {
                    width = width / 1;
                }

                jcarouselSlider.jcarousel('items').css('width', width + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });

        jcarouselBanners
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarouselBanners.innerWidth();

                if (width >= 750) {
                    width = width / 4;
                } else if (width >= 350) {
                    width = width / 2;
                }

                jcarouselBanners.jcarousel('items').css('width', width + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });

        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
    });
})(jQuery);
