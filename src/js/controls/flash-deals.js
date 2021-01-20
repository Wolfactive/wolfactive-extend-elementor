jQuery(document).ready(function ($) {
    let elementorEditorCheck = document.querySelector(
      "body.elementor-editor-active"
    );
    function sliderFlashDealsInit() {
      let sliderFlashDeals = document.querySelector(".flash-deals-product");
      var $prev =
        '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="wa-gg-chevron-left"></i></button>';
      var $next =
        '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="wa-gg-chevron-right"></i></button>';
      if (sliderFlashDeals) {
        var $sliderFlashDeals = $(".flash-deals-product");
        var $moresliderFlashDeals = $(".flash-deals-product").toArray();
        $.map($moresliderFlashDeals, function ($item, $index) {
          var $showItem = $item.getAttribute("data-show-item");
          if (!$sliderFlashDeals.eq($index).hasClass(".slick-initialized")) {
            $sliderFlashDeals
              .eq($index)
              .not(".slick-initialized")
              .slick({
                dots: true,
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
                      dots: true,
                    },
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1,
                    },
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1,
                    },
                  },
                ],
              });
          }
        });
      }
    }
    if (elementorEditorCheck) {
      setInterval(sliderFlashDealsInit, 500);
    }
    if (!elementorEditorCheck) {
        sliderFlashDealsInit();
    }
  });
  