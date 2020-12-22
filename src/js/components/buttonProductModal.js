import ajaxGetProductInfo from './ajaxGetProductInfo';
import ajaxProductCreateModal from './ajaxProductCreateModal';

let carouselDOM = document.querySelector('.wa-ella-carousel'),parrentCache;


async function asyncCallProductInfo(item) {
    const dataCache = await ajaxGetProductInfo(item);
    ajaxProductCreateModal(dataCache,item);
}

if(carouselDOM){
    let buttons = carouselDOM.querySelectorAll('.wa-ella-carousel-item-image-button'),modalDOM;
    if(buttons.length !== 0){
        buttons.forEach(item =>{
            modalDOM = item.querySelector('.wa-ella-product-modal-info');
            modalDOM && (modalDOM.remove());
            item.children[0].onclick = () =>{
                asyncCallProductInfo(item);
            };
        })
    }
}