(function( $ ) {
    var _inline_css = "<style>";
    $(document).find('div.cms-inline-css').each(function () {
        var _this = $(this);
        _inline_css += _this.attr("data-css") + " ";
        _this.remove();
    });
    _inline_css += "</style>";
    $('head').append(_inline_css);

    var _ct = "";
    $(document).find('div.cms-ct-to-head').each(function () {
        var _this = $(this);
        _ct += _this.attr("data-ct") + " ";
        _this.remove();
    });
    $('head').append(_ct);

    $('.cms-carousel-core').each(function () {
        var _this = $(this);
        _this.addClass("owl-carousel");
        var data = {
            navText: ['<i class="zmdi zmdi-chevron-left"></i></i>', '<i class="zmdi zmdi-chevron-right"></i>'],
            responsive: {
                0: {
                    items: parseInt(_this.attr('data-xsmall-items')),
                },
                576: {
                    items: parseInt(_this.attr('data-small-items')),
                },
                768: {
                    items: parseInt(_this.attr('data-medium-items')),
                },
                992: {
                    items: parseInt(_this.attr('data-large-items')),
                },
            }
        };
        if (typeof _this.attr('data-loop') !== 'undefined') {
            data.loop = _this.attr('data-loop') == 'true' ? true : false;
        }
        if (typeof _this.attr('data-autoplay') !== 'undefined') {
            data.autoplay = _this.attr('data-autoplay') == 'true' ? true : false;
        }
        if (typeof _this.attr('data-dots') !== 'undefined') {
            data.dots = _this.attr('data-dots') == 'true' ? true : false;
        }
        if (typeof _this.attr('data-dotscontainer') !== 'undefined') {
            data.dotsContainer = _this.attr('data-dotscontainer') == 'true' ? _this.parent().find('.slider-nav .thumbs') : '';
        }
        if (typeof _this.attr('data-center') !== 'undefined') {
            data.center = _this.attr('data-center') == 'true' ? true : false;
        }
        if (typeof _this.attr('data-nav') !== 'undefined') {
            data.nav = _this.attr('data-nav') == 'true' ? true : false;
        }
        if (typeof _this.attr('data-rtl') !== 'undefined') {
            data.rtl = _this.attr('data-rtl') == 'true' ? true : false;
        }
        if (typeof _this.attr('data-margin') !== 'undefined') {
            data.margin = parseInt(_this.attr('data-margin'));
        }
        if (typeof _this.attr('data-autoplaytimeout') !== 'undefined') {
            data.autoplayTimeout = parseInt(_this.attr('data-autoplaytimeout'));
        }
        if (typeof _this.attr('data-smartspeed') !== 'undefined') {
            data.smartSpeed = parseInt(_this.attr('data-smartspeed'));
        }

        var owl = _this.owlCarousel(data);
    });
})(jQuery);