const modalProductContent = (item) =>{
    return`
        <a href="${item.permalink}" class="modal__content-product-item--thumbnail">
            <div class="modal__content-product-item--thumb">
                ${item.thumbnail}
                <div class="modal__content-product-item--control">
                    <div class="modal__content-product-item--btn">
                        <div href="${item.permalink}" class="btn">
                            buy now
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="modal__content-product-item--information">
            <div class="modal__content-product-item--collection">
                <a href="${item.cat_link}" class="cat-link">${item.cat}</a>
            </div>
            <a href="${item.permalink}" class="product-item__title">
                ${item.title}
            </a>
            <div class="modal__content-product-item--price">
                ${item.price}
            </div>
            <a href="${item.cat_link}" class="view-product">
                Details
            </a>
        </div>
    `;
}

const ajaxProductCreateModal = (data,location) =>{
    // render Item product info
    const html = data
    .map(item =>{return modalProductContent(item)})
    .join('');
    let locate = location.getAttribute('data-location'),
        postion = location.getAttribute('data-position'),
        closeButton,modalDOM;
    // create modal information
    const modal = `
        <div class="wa-ella-product-modal-info">
            <div class="close-modal-product">
                <button class="btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="modal__content-product-item--contain">
                ${html}
            </div>
        </div>
    `;
    location.insertAdjacentHTML('beforeend',modal);
    modalDOM = location.querySelector('.wa-ella-product-modal-info');
    locate == 'left' && (modalDOM.style.right = `${postion}%`);
    if(locate == 'right'){
        modalDOM.style.left = `0`;
        modalDOM.style.transform = `translateX(28px)`;
    }
    closeButton = modalDOM.querySelector('.close-modal-product .btn');
    closeButton && (closeButton.onclick = () =>{ modalDOM.remove()})
} 
export default ajaxProductCreateModal