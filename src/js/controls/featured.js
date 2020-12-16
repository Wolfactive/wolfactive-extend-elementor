

jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
      function sliderFeaturedlInit () {
          let sliderFeatured= document.querySelector('.feature-slider');
          var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="wa-gg-chevron-left"></i></button>';
          var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="wa-gg-chevron-right"></i></button>';
          if(sliderFeatured){
              var $sliderFeatured =  $('.feature-slider');
              var $moresliderFeatured =  $('.feature-slider').toArray();
              $.map( $moresliderFeatured, function( $item,$index ) {
                var $showItem = $item.getAttribute("data-show-item");
                if(!$sliderFeatured.eq($index).hasClass('.slick-initialized')){
                  $sliderFeatured.eq($index).not('.slick-initialized').slick({
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
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                  ]
                  })
                  }
              })
              
          }
      }
      if(elementorEditorCheck){
        setInterval(sliderFeaturedlInit, 500);
      }
      if(!elementorEditorCheck){
        sliderFeaturedlInit();
      }  
      
    })