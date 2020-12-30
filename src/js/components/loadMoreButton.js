const buttonForEach = (item) =>{
    let button = item.querySelector('button[aria-label="load-more-button-product-list"]');
    let products = Array.prototype.slice.call(item.querySelectorAll('.wa-ella-product-list-contain-item'));
    
    let row = parseInt(item.getAttribute('data-plus'));
    let show = parseInt(item.getAttribute('data-item')),i;
    button.onclick = () => {
        if(show < products.length){
            for( i = 0 ; i < products.length; i++){
                if(i >= show){
                    products[i].classList.remove('d--none');
                } 
                if(i == products.length - 1){
                    button.remove();
                } 
                if(i == (show + row - 1)){
                    item.setAttribute('data-item',(show + row));
                    break;
                } 
            }
        }
    }
}

const loadMoreButton = () =>{
    let loadMores = document.querySelectorAll('.wa-ella-product-list.product-list--loadmore');
    if(loadMores.length > 0){
        loadMores.forEach(buttonForEach)
    }
}

export default loadMoreButton