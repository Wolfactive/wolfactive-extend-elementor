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
        rect = location.getBoundingClientRect(),
        loca = {
            top: rect.top + document.body.scrollTop,
            left: rect.left + document.body.scrollLeft
        },
        body = document.querySelector('body'),
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
    body.insertAdjacentHTML('beforeend',modal);
    modalDOM = body.querySelector('.wa-ella-product-modal-info');
    if(locate == 'left'){
        modalDOM.style.top = `${loca.top - 100}px`;
        modalDOM.style.left = `${loca.left}px`;
        modalDOM.style.transform = `translateX(-100%)`;
    };
    if(locate == 'right'){
        modalDOM.style.top = `${loca.top - 100}px`;
        modalDOM.style.left = `${loca.left}px`;
        modalDOM.style.transform = `translateX(24px)`;
    }
    closeButton = modalDOM.querySelector('.close-modal-product .btn');
    closeButton && (closeButton.onclick = () =>{ modalDOM.remove()})
} 
export default ajaxProductCreateModal