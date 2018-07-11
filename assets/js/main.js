(function($){
    // jumbotrons visual Slider
    $(window).ready(function(){
        $('.jumbotrons').slick({
            autoplay: true,
            dots: true,
            infinite: true,
            autoplaySpeed: 5000,
            cssEase: 'linear',
            pauseOnHover: false,
            pauseOnFocus: false,
        });
    });
    $('.jumbotrons').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide.visual-list').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active.visual-list').addClass('action'); 
            /*console.log('init'); */
        }, 500);
    });
    $('.jumbotrons').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active.visual-list').addClass('action'); 
            /*console.log('init'); */
        }, 500);
    });

    // support-business
    /*$(window).ready(function(){
        $('.support-business').slick({
            autoplay: false,
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
            {
                breakpoint: 1200,
                settings: {
                    autoplay: false,
                    slidesToShow: 2.5,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay: false,
                    dots: false,
                    infinite: false,
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay: false,
                    dots: false,
                    infinite: false,
                }
            }
            ]
        });
    });*/
    
    // support-business
    $(window).ready(function(){
        $('.goodpeople-news').slick({
            autoplay: false,
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: '<button class="slick-prev"><i class="icon-left-open-big"></i></button>',
            nextArrow: '<button class="slick-next"><i class="icon-right-open-big"></i></button>',
            responsive: [
            {
                breakpoint: 1200,
                settings: {
                    autoplay: false,
                    slidesToShow: 1.5,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: false,
                    dots: false,
                    infinite: false,
                    prevArrow: '<button class="slick-prev"><i class="icon-left-open-big"></i></button>',
                    nextArrow: '<button class="slick-next"><i class="icon-right-open-big"></i></button>',
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: false,
                    dots: false,
                    infinite: false,
                    prevArrow: '<button class="slick-prev"><i class="icon-left-open-big"></i></button>',
                    nextArrow: '<button class="slick-next"><i class="icon-right-open-big"></i></button>',
                }
            }
            ]
        });
    });

    // Campaign review Slider
    $(window).ready(function(){
        $('.review-slide').slick({
            dots: false,
            infinite: true,
            autoplaySpeed: 5000,
            cssEase: 'linear',
            pauseOnHover: false,
            pauseOnFocus: false,
        });
    });

    // global-business
    $(window).ready(function(){
        $('.global-business').slick({
            autoplay: false,
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [
            {
                breakpoint: 1200,
                settings: {
                    autoplay: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: false,
                    dots: true,
                }
            }
            ]
        });
    });

    // sns 리스트 스크롤바 
    $(window).on('load',function() {
        $('.scoll-event').mCustomScrollbar();
    });
    
    // campaign d-day event
    $(window).on('load scroll', function() {
        $('.campaign-item').each(function(index, elem) {
            if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 2)) {
                $(elem).addClass('on');
            }
            $('.on .state-bar').each(function(){
                $(this).css('width',$(this).attr('data-state')+'%');
            });
        });
    });
    
    // main modal popup
    /*$('#mainPopup').modal('show');*/
    $('#mainPopup .modal-dialog .modal-content .modal-body ul').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        autoplaySpeed: 5000,
        cssEase: 'linear',
        pauseOnHover: false,
        pauseOnFocus: false,
        prevArrow: '<button class="slick-prev"><i class="icon-left-open-big"></i></button>',
        nextArrow: '<button class="slick-next"><i class="icon-right-open-big"></i></button>',
    });
})(jQuery);