jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
    function sliderInit () {
        let slider = document.querySelector('.wa-ella-product-tab .wa-ella-product-tab-contain-list');
        var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="fa fa-angle-left"></i></button>';
        var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="fa fa-angle-right"></i></button>';
        if(slider){
            var $slider =  $('.wa-ella-product-tab .wa-ella-product-tab-contain-list');
            var $showPC = $slider.attr("data-show-pc") || 4;
            var $showTablet = $slider.attr("data-show-tablet") || 3;
            if(!$slider.hasClass('.slick-initialized')){
                $slider.not('.slick-initialized').slick({
                slidesToShow: parseInt($showPC),
                slidesToScroll: 1,
                infinite: true,
                speed: 300,
                nextArrow: $next,
                prevArrow: $prev,
                responsive: [
                    {
                    breakpoint: 1024,
                        settings: {
                            slidesToShow: parseInt($showTablet),
                            slidesToScroll: 1,
                        }
                    },
                    {
                    breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ],
            })
            }
        }
    }

    if(elementorEditorCheck){
        setInterval(sliderInit, 500);
    }
    if(!elementorEditorCheck){
        sliderInit();
    }    
})
    