import changeLayoutHeader from '../components/changeLayoutHeader';
let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
const parallaxInit = () =>{
    let parallaxCheck = document.querySelector('.elementor-widget-wolfactive_parallax');
    if(parallaxCheck){
        changeLayoutHeader();
    }
}

if(elementorEditorCheck){
    setInterval(parallaxInit, 500);
}
if(!elementorEditorCheck){
    parallaxInit();
}  