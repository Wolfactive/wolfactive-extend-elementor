const changeLayoutHeader = () =>{
    let carouselCheckHeaderFloat = document.querySelector('.wa-ella-carousel[class*="header--float"], .wa-ella-parallax-section-one[class*="header--float"]'); 
    let carouselCheckHeaderBoxed = document.querySelector('.wa-ella-carousel[class*="header--float"], .wa-ella-parallax-section-one[class*="header--boxed"]'); 
    let headerDOM = document.querySelector('header');
    if(carouselCheckHeaderFloat && headerDOM){
        if(headerDOM.classList.contains('header-template-03') || headerDOM.classList.contains('header-template-01')){
            if(!headerDOM.classList.contains('header--float')){
                if(headerDOM.classList.contains('header-template-01')){
                    let classFloat = carouselCheckHeaderFloat.getAttribute('data-header');
                    let logoSource = carouselCheckHeaderFloat.getAttribute('data-logo');
                    let logo = headerDOM.querySelector('.navbar-template-01 .navbar-logo>a');
                    let logoHTML = `
                    <img width="90" height="41" src="${logoSource}" class="attachment-thumbnail size-thumbnail lazy loading" alt="" loading="lazy" data-ll-status="loading">
                    `;
                    headerDOM.classList.add(classFloat);
                    logo.insertAdjacentHTML('beforeend',logoHTML);
                    carouselCheckHeaderFloat.style.paddingTop = "35px";
                }
                if(headerDOM.classList.contains('header-template-03')){
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
        if(carouselCheckHeaderBoxed && headerDOM){
            let classBoxed = carouselCheckHeaderFloat.getAttribute('data-header');
            let background = carouselCheckHeaderFloat.getAttribute('data-outter');
            let boxContain = carouselCheckHeaderFloat.getAttribute('data-boexed');
            let container = headerDOM.querySelectorAll('.header__container, .navbar__contain');
            headerDOM.classList.add(classBoxed);
            headerDOM.style.backgroundColor = background;
            container.forEach(item => {
                item.style.maxWidth = boxContain;
            })
        }
    }
}

export default changeLayoutHeader