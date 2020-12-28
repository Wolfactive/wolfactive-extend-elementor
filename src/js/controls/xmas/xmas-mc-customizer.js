jQuery( document ).ready(function($) {
  let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
  function showVideoPopup(){
      if(document.getElementById("btnParallaxShowPopupVideo")){
        var modal = document.getElementById("myModalPopupVideo");
        var btn = document.getElementById("btnParallaxShowPopupVideo");
        var closePopupovideo = document.getElementById("closeID");
        btn.onclick = function() {
            modal.style.display = "block";
            }
            closePopupovideo.onclick = function() {
            modal.style.display = "none";
            }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
      }
    
  }
  if(elementorEditorCheck){
    setInterval(showVideoPopup, 500);
  }
  if(!elementorEditorCheck){
    showVideoPopup();
  }  
  
})
