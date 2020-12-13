jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');

    function sliderBannerInit(){
        let sliderBanner = document.querySelector('.wa-ella-product-tab-with-banner .wa-ella-product-tab-with-banner-container-image-list');
        var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="fa fa-angle-left"></i></button>';
        var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="fa fa-angle-right"></i></button>';
        if(sliderBanner){
            var $sliderBanner =   $('.wa-ella-product-tab-with-banner .wa-ella-product-tab-with-banner-container-image-list');
            var $slidersBanner =  $('.wa-ella-product-tab-with-banner .wa-ella-product-tab-with-banner-container-image-list').toArray();
            $.map( $slidersBanner, function( $item,$index ) {
                $sliderBanner.eq($index).not('.slick-initialized').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    infinite: true,
                    speed: 300,
                    nextArrow: $next,
                    prevArrow: $prev,
                    dots: true,
                })
            });
        }
    }

    function sliderProductInit(){
        let slider = document.querySelector('.wa-ella-product-tab-with-banner .wa-ella-product-tab-with-banner-container-product-contain-products');
        var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="fa fa-angle-left"></i></button>';
        var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="fa fa-angle-right"></i></button>';
        if(slider){
            var $slider =   $('.wa-ella-product-tab-with-banner .wa-ella-product-tab-with-banner-container-product-contain-products');
            var $sliders =  $('.wa-ella-product-tab-with-banner .wa-ella-product-tab-with-banner-container-product-contain-products').toArray();
            $.map( $sliders, function( $item,$index ) {
                let $showPC = $item .getAttribute("data-show-pc") || 4;
                let $showTablet = $item .getAttribute("data-show-tablet") || 3;
                $slider.eq($index).not('.slick-initialized').slick({
                    slidesToShow: parseInt($showPC),
                    slidesToScroll: 1,
                    infinite: true,
                    speed: 300,
                    nextArrow: $next,
                    prevArrow: $prev,
                    dots: true,
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
            });
        }
    }

    function sliderInit () {
        sliderBannerInit();
        sliderProductInit();
    }

    if(elementorEditorCheck){
        setInterval(sliderInit, 500);
    }
    if(!elementorEditorCheck){
        sliderInit();
    }    
})
    