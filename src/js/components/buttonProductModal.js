import ajaxGetProductInfo from './ajaxGetProductInfo';
import ajaxProductCreateModal from './ajaxProductCreateModal';

let carouselDOM = document.querySelector('.wa-ella-carousel'),dataCache,parrentCache;

async function asyncCall(item) {
    const result = await ajaxGetProductInfo(item);
    return result;
}

if(carouselDOM){
    let buttons = carouselDOM.querySelectorAll('.wa-ella-carousel-item-image-button');
    if(buttons.length !== 0){
        buttons.forEach(item =>{
            item.children[0].onclick = () =>{
                parrentCache = item;
                dataCache = asyncCall(item);
                ajaxProductCreateModal(dataCache,item)
            };
        })
    }
}