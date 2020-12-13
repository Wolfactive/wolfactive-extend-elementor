jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
    let $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="fa fa-angle-left"></i></button>';
    let $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="fa fa-angle-right"></i></button>';
    
    function tabQueryAjax (tab){
        let tabListGET = tab.target.parentElement;
        let tabTop = tabListGET.parentElement;
        let tabListContain = tabTop.nextElementSibling;
        let tabContent = tabListContain.children[1].children[0].children[0];
        let tabParent = tabTop.parentElement;
        let tabsCurrent = document.querySelectorAll('.wa-ella-product-tab-with-banner');
        var count;
        if(tabsCurrent.length !== 0){
            for(let j = 0; j < tabsCurrent.length; j++){
                if(tabsCurrent[j] == tabParent){
                    count = j
                }
            }
        }
        if(tabListGET){
            let tabsGET = Array.prototype.slice.call(tabListGET.children);
            for(let i = 0; i < tabsGET.length; i++) {
                tabsGET[i].classList.remove('active');
            }
        }
        tab.target.classList.add('active');
        tabContent.innerHTML = "";
        tabContent.innerHTML += `<p class="loading" style="margin:20px 0px;text-align:center;font-size:13px; font-weight:400">Loading ... please wait ...</p>`;
        let dataAjax = tab.target.getAttribute('data-product');
        if(dataAjax) {
            setTimeout(() =>{
                jQuery.ajax({
                    type: "post",
                    dataType: "html",
                    async: false,
                    url: apiObject.rootapiurl,
                    data: {
                        action: "ella_api_tab",
                        products: dataAjax
                    },
                    success: function (response) {
                        let loading = document.querySelector('.loading');
                        loading.remove();
                        tabContent.innerHTML = `<div class="wa-ella-product-tab-with-banner-container-product-contain-products">${response}</div>`;
                        let $sliderAfter =  $('.wa-ella-product-tab-with-banner .wa-ella-product-tab-with-banner-container-product-contain-products').eq(count);
                        console.log($sliderAfter);
                        let $showPCAfter = tabContent.getAttribute("data-show-pc") || 4;
                        let $showTabletAfter = tabContent.getAttribute("data-show-tablet") || 3;
                        $sliderAfter.not('.slick-initialized').slick({
                            slidesToShow: parseInt($showPCAfter),
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                            speed: 300,
                            nextArrow: $next,
                            prevArrow: $prev,
                            responsive: [
                                {
                                breakpoint: 1024,
                                    settings: {
                                        slidesToShow: parseInt($showTabletAfter),
                                        slidesToScroll: 1,
                                    }
                                },
                                {
                                breakpoint: 480,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2,
                                    }
                                }
                            ],
                        })
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(
                            "The following error occured: " + textStatus,
                            errorThrown
                        );
                    },
                });
            },500)
        }
    }
    
    function tabInitProductSlider(){
        let tabLists = document.querySelectorAll('.wa-ella-product-tab-with-banner .wa-ella-product-tab-with-banner-top-tab');
        if(tabLists.length !== 0){
            tabLists.forEach((tabList,index)=>{
                var tabs = Array.prototype.slice.call(tabList.children);
                if(tabs.length !== 0){ tabs.forEach((tab)=>{
                    tab.onclick = tabQueryAjax;
                });}
            })
        }
    }

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
            tabInitProductSlider();
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
    