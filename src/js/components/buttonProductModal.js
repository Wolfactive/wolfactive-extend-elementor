import ajaxGetProductInfo from "./ajaxGetProductInfo";
import ajaxProductCreateModal from "./ajaxProductCreateModal";

let carouselDOM = document.querySelectorAll(
    ".wa-ella-carousel, .wa-ella-multi-block-banner-default, .wa-ella-mt-block-banner-three-box, .wa-ella-multi-block-banner-no-space, .wa-ella-multi-block-banner-have-content, .wa-lookbook-custom"
  ),
  parrentCache;

async function asyncCallProductInfo(item) {
  const dataCache = await ajaxGetProductInfo(item);
  ajaxProductCreateModal(dataCache, item);
}

if (carouselDOM) {
  if (carouselDOM.length !== 0) {
    carouselDOM.forEach((itemBtn, index) => {
      let buttons = itemBtn.querySelectorAll(
          ".wa-ella-carousel-item-image-button"
        ),
        modalDOM;
      if (buttons.length !== 0) {
        buttons.forEach((item) => {
          item.children[0].onclick = () => {
            modalDOM = document.querySelector(".wa-ella-product-modal-info");
            modalDOM && modalDOM.remove();
            asyncCallProductInfo(item);
          };
        });
      }
    });
  }
}
