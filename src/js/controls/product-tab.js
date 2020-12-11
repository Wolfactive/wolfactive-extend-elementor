jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
    let $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="fa fa-angle-left"></i></button>';
    let $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="fa fa-angle-right"></i></button>';

    const tabQueryAjax = tab =>{
        console.log(tab)
        let tabListGET = document.querySelector('.wa-ella-product-tab .wa-ella-product-tab-contain-tabs-list');
        let tabContent = document.querySelector('.wa-ella-product-tab .wa-ella-product-tab-contain-slider');
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
                        tabContent.innerHTML = `<div class="wa-ella-product-tab-contain-list">${response}</div>`;
                        let $sliderAfter =  $('.wa-ella-product-tab .wa-ella-product-tab-contain-list');
                        let $showPCAfter = $sliderAfter.attr("data-show-pc") || 4;
                        let $showTabletAfter = $sliderAfter.attr("data-show-tablet") || 3;
                        if(!$sliderAfter.hasClass('.slick-initialized')){
                            $sliderAfter.not('.slick-initialized').slick({
                                slidesToShow: parseInt($showPCAfter),
                                slidesToScroll: 1,
                                infinite: true,
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
                                            slidesToScroll: 2
                                        }
                                    }
                                ],
                            })
                        }
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

    const tabForEach = tab =>{ tab.onclick = tabQueryAjax;}

    const tabsClick = () =>{
        let tabList = document.querySelector('.wa-ella-product-tab .wa-ella-product-tab-contain-tabs-list');
        if(tabList){
            var tabs = Array.prototype.slice.call(tabList.children);
            if(tabs.length !== 0){ tabs.forEach(tabForEach);}
        }
    }

    const sliderInit = () => {
        let slider = document.querySelector('.wa-ella-product-tab .wa-ella-product-tab-contain-list');
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
                tabsClick();
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
    