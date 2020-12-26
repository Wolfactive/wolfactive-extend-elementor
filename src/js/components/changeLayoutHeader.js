const changeLayoutHeader = () =>{
    let carouselCheckHeaderFloat = document.querySelector('.wa-ella-carousel[class*="header--float"]'); 
    let headerDOM = document.querySelector('header');
    if(carouselCheckHeaderFloat && headerDOM){
        if(headerDOM.classList.contains('header-template-03')){
            if(!headerDOM.classList.contains('header--float')){
                let classFloat = carouselCheckHeaderFloat.getAttribute('data-header');
                let logoSource = carouselCheckHeaderFloat.getAttribute('data-logo');
                let iconSource = carouselCheckHeaderFloat.getAttribute('data-icon');
                let logo = headerDOM.querySelector('.header__center-container .header__center-mid.header__logo>a>img');
                let cartIcon = headerDOM.querySelector('.header__center-right-item.header__shopping-cart>a>img');
                headerDOM.classList.add(classFloat);
                logo.setAttribute('src',logoSource);
                cartIcon.setAttribute('src',iconSource);
            }
        }
    }
}

export default changeLayoutHeader