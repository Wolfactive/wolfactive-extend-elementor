jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
    var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="gg-chevron-left"></i></button>';
    var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="gg-chevron-right"></i></button>';

    function tabQueryAjax (tab){
        let tabListGET = tab.target.parentElement;
        let tabContent = tabListGET.nextElementSibling;
        let tabContainer = tabListGET.parentElement;
        let tabCurrent = tabContainer.parentElement;
        let tabParent = tabCurrent.parentElement;
        let tabsCurrent = document.querySelectorAll('.wa-ella-product-tab');
        var count;
        if(tabsCurrent.length !== 0){
            for(let j = 0; j < tabsCurrent.length; j++){
                if(tabsCurrent[j] == tabParent){
                    count = j
                }
            }
        }
        console.log(count);
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
                        let $sliderAfter =  $('.wa-ella-product-tab .wa-ella-product-tab-contain-list').eq(count);
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
    function tabsClick(){
        let tabLists = document.querySelectorAll('.wa-ella-product-tab .wa-ella-product-tab-contain-tabs-list');
        if(tabLists.length !== 0){
            tabLists.forEach((tabList,index)=>{
                var tabs = Array.prototype.slice.call(tabList.children);
                if(tabs.length !== 0){ tabs.forEach((tab)=>{
                    tab.onclick = tabQueryAjax;
                });}
            })
        }
    }

    const sliderInit = () => {
        let slider = document.querySelector('.wa-ella-product-tab .wa-ella-product-tab-contain-list');
        if(slider){
            var $slider =  $('.wa-ella-product-tab .wa-ella-product-tab-contain-list');
            var $sliders =  $('.wa-ella-product-tab .wa-ella-product-tab-contain-list').toArray();
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
            tabsClick();
        }
    }

    if(elementorEditorCheck){
        setInterval(sliderInit, 500);
    }
    if(!elementorEditorCheck){
        sliderInit();
    }    
})
    