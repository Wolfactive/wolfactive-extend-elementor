import LazyLoad from "vanilla-lazyload";
import Flickity from 'flickity';
import { tns } from 'tiny-slider/src/tiny-slider'
import addthis from 'addthis-snippet';
import baguetteBox from 'baguettebox.js';
import "flickity-sync";
import { carouselSlider } from "./main/component/carousel";
import {trendingFiveItems,
    trendingrtlFiveItems,
    trendingThreeItems,
    trendingrtlThreeItems,
    trendingTwoItems,
    sliderOneItem,
    trendingOneItemsFade,
    trendingSixItems,
    trendingFourItems,
    sliderIconCollection,
    customizeSlider2,
    customizeSlider,
    trendingThreeLoopItems,sliderCustomItem,sliderCustomItemVertical
    } from "./main/component/trending-slider";
import { lightBox } from "./main/component/lightbox";
import { changeColorProductItem } from './main/component/product-item/change-color';
import { widgetProductSlider } from './main/component/widgets/product-slider';
import { widgetToggle } from './main/component/widgets/widget-toggle';
import { qualityHandle } from './main/component/quality';
import CustomizeSliderThumbNav from './main/component/class/customize-slider';
import CustomizeSliderThumbNavVertical from './main/component/class/customize-slider-nav-vertical';
import { countDownMc } from "./main/component/count-down/mc-custom-countdown";
import { fetchLoadMore } from "./main/component/loadmore-fetch";
import "./main/component/carousel";
import "./main/component/trending-slider";
import './main/component/product-category/category-mansory';
import "./main/component/menu-decoration/mega-menu";
import "./main/page/homepage";
import "./main/component/navbar";
import "./main/component/product-category/handle";
import "./main/component/footer";
import "./main/component/datmlem";
import "./main/component/portfolio-lightbox";
import "./main/page/contact-validate";
import "./main/page/product-single";
import "./main/page/password";
import "./main/component/live-search/live-search";
import "./main/component/filter-product";
import "./main/component/notification-design-by-marcus/notifications";
import './main/component/back-top-top';
import './main/component/new-letter';
import './main/component/count-down/count-down';
import "../../node_modules/flickity-fade";
import './main/component/product-item/wish-list';
import "./main/component/new-arrival/tab";
import "./main/component/new-arrival/tab-home9";
import "./main/component/product-item/quick-view";
import "./main/component/form-login"; 
import "./main/component/menu_vertical_10";
import "./main/fix/huynpm";
import "./main/component/product-item/viewing";
import "./main/component/trending/loadmore";
import "./main/component/nam";
import "./main/component/scroll-to-element";
import "./main/page/single-fullwidth-style";
import "./main/component/newsletter";
import "./main/component/fbt/fbt";
import "./main/page/frequently-single";
import "./main/component/mc-recent";
/*VARIABLES*/
var iframe = document.querySelectorAll('iframe');
var img = document.querySelectorAll('img');
var video = document.querySelectorAll('video');
var protocol = window.location.protocol;
var hostname = window.location.hostname;
// Detect size device or size of resize
let widthResize = window.innerWidth;
let widthDevice = window.outerWidth;
let customizeNavFullWidth = document.querySelector('.product-full-width .ella-single-product-contain .ella-single-product-col .product .product-details__image-gallery-async');
let bannerSliderHome9 = document.querySelectorAll('.product-list__content .product-list__banners');
var mzOptions = {};
/*VARIABLES*/
/*Local Storage*/
function LuuVaoLocalStorage(array, nameArray) {
    localStorage.removeItem(nameArray);
    var jsonData = JSON.stringify(array);
    localStorage.setItem(nameArray, jsonData);
}
/*nameArray là dạng string, array là biến array cần lưu vào*/
function LayLocalStorage(nameArray) {
    var jsonData = localStorage.getItem(nameArray);
    if (!jsonData) { localStorage = []; return; }
    return JSON.parse(jsonData);
}
/*nameArray là dạng string, array là biến array cần lưu local vào*/
/*Local Storage*/
/* Resposive lazy load*/
function iframeResposive() {
    for (let i = 0; i < iframe.length; i++) {
        iframe[i].classList.add('lazy');
    }
}

function imgResposive() {
    for (let i = 0; i < img.length; i++) {
        img[i].classList.add('lazy');
    }
}

function videoResposive() {
    for (let i = 0; i < video.length; i++) {
        video[i].classList.add('lazy');
    }
}
iframe ? iframeResposive() : {};
img ? imgResposive() : {};
video ? videoResposive() : {};
new LazyLoad({ elements_selector: ".lazy" });
/* Resposive lazy load*/

/* Carousel */
// wishListProductItem();
changeColorProductItem();

/*Widget Javascript */
widgetToggle();
widgetProductSlider(tns);


var config = {
    pubid: 'ra-5f4f30f2bff1a529'
};
var share = {
    passthrough: {
        twitter: {
            via: "TWITTER USERNAME"
        }
    }
};
addthis(config, share);
carouselSlider('.carousel__list',tns);
if(!document.querySelector('.ella-homepage-template-10')){
    trendingFiveItems('.new-arrival-slider-parttern-trending',tns,2,0,true);
}else if(document.querySelector('.ella-homepage-template-10')){
    trendingFourItems('.new-arrival-slider-parttern-trending',tns,2,0,true)
}
if(!document.querySelector('.ella-homepage-template-9')){
    trendingFiveItems('.slider-brands',tns,1,0,false);
}
if(bannerSliderHome9){
    bannerSliderHome9.forEach(item =>{
            let slider = tns({
                container: item,
                items: 1,
                controlsText: ['<i class="gg-chevron-left"></i>','<i class="gg-chevron-right"></i>'],
                arrowKeys: true,    
                mouseDrag: true,
                loop: false,
                nav: true,
                // mode: 'gallery',
                navPosition : 'bottom',
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                speed: 1000,
            });
    })
}
// trendingOneItemsFade('.product-list__content .product-list__banners',tns);
trendingSixItems('.slider-instagram',tns,2,0,false);
trendingFiveItems('.ella-homepage-template-1 .slider-instagram',tns,2,0,false);
trendingFiveItems('.ella-homepage-template-2 .slider-instagram',tns,2,0,false);
trendingFiveItems('.ella-homepage-template-3 .slider-instagram',tns,2,0,false);
trendingFiveItems('.ella-homepage-template-4 .slider-instagram',tns,2,0,false);
trendingFiveItems('.ella-homepage-template-5 .slider-instagram',tns,2,0,false);
trendingFiveItems('.ella-homepage-template-6 .slider-instagram',tns,2,0,false);
trendingFiveItems('.ella-homepage-template-9 .slider-instagram',tns,2,0,false);
trendingFiveItems('.ella-homepage-template-8 .slider-instagram',tns,2,0,false);
trendingFiveItems('.ella-homepage-template-10-vertical .slider-instagram',tns,2,0,false);
sliderCustomItem('.ella-homepage-template-12 .slider-instagram',tns,2,2.5,false,true,7,7,5,4,2);
sliderCustomItem('.ella-homepage-template-13 .slider-instagram',tns,2,2.5,false,true,7,7,5,4,2);
sliderCustomItem('.ella-homepage-template-14 .slider-instagram',tns,2,2.5,false,true,7,7,5,4,2);
trendingSixItems('.ella-homepage-template-7 .slider-brands',tns,1,0,false);
lightBox('.slider-instagram',baguetteBox);
trendingFiveItems('.new-arrival__slider',tns,2,0,true);
// trendingFiveItems('.slider-collection',tns,2,0,false);
trendingFiveItems('.new-arrival-slider-parttern',tns,2,0,true);
trendingSixItems('.ella-homepage-template-7 .new-arrival-slider-parttern',tns,2,0,true);
// trendingThreeItems('.last-post-slider',tns,1,0,true);
sliderCustomItem('.last-post-slider',tns,1,15,true,true,3,3,3,2,1);
sliderCustomItem('.ella-homepage-template-7 .policy_ella .row-divide',tns,1,0,false,true,3,3,3,2,1);
sliderCustomItem('.ella-homepage-template-10 .mc_container_ten .policy_ella .row-divide',tns,1,0,false,true,4,4,3,2,1);
sliderCustomItem('.policy_ella_slider .row-divide',tns,1,0,false,true,3,3,3,2,1);
sliderCustomItem('.footer-layout-template-03 .footer-container .policy_ella .row-divide',tns,1,0,false,true,3,3,3,2,1);
sliderCustomItem('.ella-homepage-template-12 .policy_ella .row-divide',tns,1,0,false,true,3,3,3,2,1);
sliderCustomItem('.ella-homepage-template-13 .policy_ella .row-divide',tns,1,0,false,true,3,3,3,2,1);
sliderCustomItem('.ella-homepage-template-10 .wa-slider-collect',tns,2,0,true,true,3,3,3,2,1);
trendingrtlThreeItems('.product-list__shows',tns,2,20,true);
trendingThreeItems('.product-list__shows.row-features-2',tns,2,0,true);
trendingFiveItems('.slider-product-show-bottom-sbc',tns,2,0);
trendingTwoItems('.text-wh.glide__slides',tns,1,0,true);
trendingFiveItems('.slider-flash-deals',tns,2,0,true);
if(document.querySelector('.elementor-widget-wolfactive_blog')){
    console.log(true);
}

// Single Slider
let checkFullWidthProductSingle = document.querySelector('.ella-single-product-default.product-full-width');
if(!checkFullWidthProductSingle){
    // trendingThreeItems('.carousel-main',tns,1,0,true);
    if(document.querySelector('.ella-vertical-tab-nosidebar-left-thumb') || document.querySelector('.ella-vertical-tab-nosidebar-right-thumb'))
    {
        let sliderNavVertical = new CustomizeSliderThumbNavVertical('.ella-gallery__contain','.product-details__image-gallery-async.carousel-nav',tns);
    } else {
        let sliderCustomize = new CustomizeSliderThumbNav('.carousel-main','.product-details__image-gallery-async',tns,16,5,5,4,4);
    }
    trendingThreeLoopItems('.product-details__image-gallery-template-gallery-slider .carousel-main',tns,1,0,true);
    sliderOneItem('.product-details__image-gallery-template-gallery .carousel-main',tns,1,0,true,false);
}
trendingOneItemsFade('.lookbook-product-carousel__contain',tns);
if(!document.querySelector('.rtl .slider-collection')){
    trendingFiveItems('.slider-collection',tns,2,0,false);
} else trendingrtlFiveItems('.rtl .slider-collection',tns,2,0,false);
qualityHandle();
sliderCustomItem('.ella-collection--slider--list',tns,1,0,false,true,2,2,2,2,1);

trendingSixItems('.ella-homepage-template-7 .slider-collection',tns,2,0,false);
countDownMc("clockCD", "cdDays", "cdHours", "cdMinus", "cdSecs");
countDownMc("salTime", "numDays", "numHours", "numMin", "numSec");
countDownMc("clockFD", "fdDays", "fdHours", "fdMinus", "fdSecs");

// check size of mobile
if( widthResize >= 1200 || widthDevice >= 1200){
    let recentViewModalRoot = document.querySelector('.recent-view');
    let recentViewModalRootClose = document.querySelector('.recent-view--button');
    
    if(recentViewModalRoot && recentViewModalRootClose){
        recentViewModalRoot.classList.add('active');
        recentViewModalRootClose.classList.add('unactive');
    }
    sliderCustomItemVertical('.product-full-width .carousel-nav',tns,2,10,false,false,5,5,5,5,5);
    sliderCustomItemVertical('.product-full-width .related__container .products',tns,2,10,false,false,3,3,3,'','');
}else{
    let recentViewModalRoot = document.querySelector('.recent-view');
    let recentViewModalRootClose = document.querySelector('.recent-view--button');
    if(recentViewModalRoot && recentViewModalRootClose){
        recentViewModalRootClose.classList.add('active');
        recentViewModalRoot.classList.add('unactive');
    }
    if(customizeNavFullWidth){
        customizeNavFullWidth.remove();
    } 
    sliderCustomItem('.product-full-width .related__container .products',tns,1,0,true,true,'','',4,3,2,180);
}

window.addEventListener("resize", () =>{
    // Detect size device or size of resize
    let widthResize = window.innerWidth;
    let widthDevice = window.outerWidth;
    // check size of mobile
    if( widthResize >= 1200 || widthDevice >= 1200){
        let recentViewModalRoot = document.querySelector('.recent-view');
        let recentViewModalRootClose = document.querySelector('.recent-view--button');
        
        if(recentViewModalRoot && recentViewModalRootClose){
            recentViewModalRootClose.classList.remove('active');
        recentViewModalRoot.classList.remove('unactive');
        recentViewModalRoot.classList.add('active');
            recentViewModalRootClose.classList.add('unactive');
        }
    }else{
        let recentViewModalRoot = document.querySelector('.recent-view');
        let recentViewModalRootClose = document.querySelector('.recent-view--button');
        if(recentViewModalRootClose){
            recentViewModalRootClose.classList.remove('unactive');
            recentViewModalRootClose.classList.add('active');
        }
        recentViewModalRoot.classList.remove('active');
        recentViewModalRoot.classList.add('unactive');
        sliderCustomItem('.product-full-width .related__container .products',tns,1,0,true,true,'','',4,3,2,180);
    }
})
fetchLoadMore('.new-arrival-loadmore .new-arrival__container','.new-arrival-loadmore .btn[aria-label="show-more-new-arrival"]');  
