window.onscroll = function(){
     scroll= document.documentElement.scrollTop;
     header = document.getElementById("header");
     if( scroll > 250){
         header.classList.add('nav__mod');
     }else if(scroll<250){
        header.classList.remove('nav__mod');
     }
}