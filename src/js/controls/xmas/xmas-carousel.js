jQuery(document).ready(function ($) {
    let elementorEditorCheck = document.querySelector(
      "body.elementor-editor-active"
    );
    function sliderXmasInit() {
      let sliderXmas = document.querySelector(".carousel-xmas-contain");
      var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 33"><g id="7f9a1925-e8c7-4614-8787-3c6095a9f6e1" data-name="Layer 2"><g id="c9b7920a-81fa-4bfe-ad13-4da717c6854b" data-name="Layer 1"><g id="c2d982ff-0cf6-4220-b365-47f30d708fea" data-name="e4eb89a6-f885-43b8-9259-0d6b1516fab0"><g id="f51d455e-6b9c-4c4e-96db-a5004582beda" data-name="8e584754-6657-46f1-a9d8-2cfd6623b552"><polygon points="0 16.5 2.1 18.5 17 33 17 29.3 5.9 18.5 3.8 16.5 5.9 14.5 17 3.7 17 0 2.1 14.5 0 16.5"></polygon></g></g></g></g></svg></button>';
    var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 17 33" xml:space="preserve"><g id="e4eb89a6-f885-43b8-9259-0d6b1516fab0"><g id="_x38_e584754-6657-46f1-a9d8-2cfd6623b552"><g><polygon points="14.9,14.5 0,0 0,3.7 11.1,14.5 13.2,16.5 11.1,18.5 0,29.3 0,33 14.9,18.5 17,16.5 "></polygon></g></g></g></svg></button>';
      if (sliderXmas) {
        var $sliderXmas = $(".carousel-xmas-contain");
        var $moresliderXmas = $(".carousel-xmas-contain").toArray();
        $.map($moresliderXmas, function ($item, $index) {
          if (!$sliderXmas.eq($index).hasClass(".slick-initialized")) {
            $sliderXmas
              .eq($index)
              .not(".slick-initialized")
              .slick({
                dots: true,
                infinite: true,
                speed: 1000,
                slidesToShow: 1,
                slidesToScroll: 1,
                nextArrow: $next,
                prevArrow: $prev,
                autoplay: true,
                autoplaySpeed: 3000,
                fade: true,
                responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      infinite: true,
                      dots: true,
                    },
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                    },
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
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
      setInterval(sliderXmasInit, 500);
    }
    if (!elementorEditorCheck) {
        sliderXmasInit();
    }
  });
  