

jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
      function sliderXmasPolicyInit () {
          let sliderXmasPolicy = document.querySelector('.policy_xmas');
          var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="wa-gg-chevron-left"></i></button>';
          var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="wa-gg-chevron-right"></i></button>';
          if(sliderXmasPolicy){
              var $sliderXmasPolicy =  $('.policy_xmas');
              var $moresliderXmasPolicy =  $('.policy_xmas').toArray();
              $.map( $moresliderXmasPolicy, function( $item,$index ) {
                var $showItem = $item.getAttribute("data-show-item");
                if(!$sliderXmasPolicy.eq($index).hasClass('.slick-initialized')){
                  $sliderXmasPolicy.eq($index).not('.slick-initialized').slick({
                      dots: false,
                  infinite: true,
                  speed: 1000,
                  slidesToShow: parseInt($showItem),
                  slidesToScroll: 1,
                  nextArrow: $next,
                  prevArrow: $prev,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                      }
                    },
                    {
                      breakpoint: 768,
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
        setInterval(sliderXmasPolicyInit, 500);
      }
      if(!elementorEditorCheck){
        sliderXmasPolicyInit();
      }  
      
    })