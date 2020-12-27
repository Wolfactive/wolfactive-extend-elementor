

jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
      function sliderBrandlInit () {
          let sliderBrand = document.querySelector('.wa-ella-slider-brand, .wa-ella-slider-brand-mobile');
          var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="wa-gg-chevron-left"></i></button>';
          var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="wa-gg-chevron-right"></i></button>';
          if(sliderBrand){
              var $sliderBrand =  $('.wa-ella-slider-brand, .wa-ella-slider-brand-mobile');
              var $moresliderBrand =  $('.wa-ella-slider-brand, .wa-ella-slider-brand-mobile').toArray();
              $.map( $moresliderBrand, function( $item,$index ) {
                var $showItem = $item.getAttribute("data-show-item");
                if(!$sliderBrand.eq($index).hasClass('.slick-initialized')){
                  if(sliderBrand.classList.contains('wa-ella-slider-brand-mobile')){
                    let widthResize = window.innerWidth;
                    let widthDevice = window.outerWidth;
                    if( widthResize <= 576 || widthDevice <= 576){
                      $sliderBrand.eq($index).not('.slick-initialized').slick({
                        responsive: [
                          {
                            breakpoint: 480,
                            settings: {
                              slidesToShow: 2,
                              slidesToScroll: 1,
                              dots: false,
                              infinite: false,
                              speed: 300,
                              nextArrow: $next,
                              prevArrow: $prev,
                            }
                          }
                        ]
                      })
                    }
                    window.addEventListener("resize", () =>{
                      let widthResize = window.innerWidth;
                      let widthDevice = window.outerWidth;
                      if( widthResize <= 576 || widthDevice <= 576){
                        $sliderBrand.eq($index).not('.slick-initialized').slick({
                          responsive: [
                            {
                              breakpoint: 480,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                dots: false,
                                infinite: false,
                                speed: 300,
                                nextArrow: $next,
                                prevArrow: $prev,
                              }
                            }
                          ]
                        })
                      }
                    })
                  }
                  if(!sliderBrand.classList.contains('wa-ella-slider-brand-mobile')){
                    $sliderBrand.eq($index).not('.slick-initialized').slick({
                      dots: false,
                      infinite: false,
                      speed: 300,
                      slidesToShow: parseInt($showItem),
                      slidesToScroll: 1,
                      nextArrow: $next,
                      prevArrow: $prev,
                      responsive: [
                        {
                          breakpoint: 1024,
                          settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                          }
                        },
                        {
                          breakpoint: 600,
                          settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                          }
                        },
                        {
                          breakpoint: 480,
                          settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                          }
                        }
                      ]
                    })
                  }
                }
              })
              
          }
      }
      if(elementorEditorCheck){
        setInterval(sliderBrandlInit, 500);
      }
      if(!elementorEditorCheck){
        sliderBrandlInit();
      }  
      
    })