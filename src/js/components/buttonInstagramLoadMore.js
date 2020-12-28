const buttonInstagramLoadMore = () =>{
    let instagramContain = Array.prototype.slice.call( document.querySelectorAll('.wa-ella-instagram-plush')),
        instaItems,plusButton,i,dataIndex,dataShow;
    if(instagramContain.length !== 0){
        instagramContain.forEach(insta => {
            instaItems = insta.querySelectorAll('.xmas-image-instagram');
            plusButton = insta.querySelector('.infinite-scrolling-instagram>a');
            dataShow = parseInt(insta.getAttribute('data-show'));
            try {
                plusButton.onclick = () =>{
                    dataIndex = parseInt(insta.getAttribute('data-index'));
                    if(dataShow < (instaItems.length - dataIndex + 2)){
                        for(i = 0; i < instaItems.length ; i++){
                            if( i > dataIndex && i <= (dataIndex + dataShow)){
                                instaItems[i].classList.remove('d--none')
                            }
                            if(i > (dataIndex + dataShow)){
                                break;
                            }
                            if(i == (dataIndex + dataShow)){
                                insta.setAttribute('data-index',(dataIndex + dataShow));
                            }
                            if(i == instaItems.length - dataIndex +1){
                                plusButton.style.opacity =  "0.55";
                            }
                        }
                    }
                }
            } catch (e) {
                console.log(e)
            }
        })
    }
}

export default buttonInstagramLoadMore