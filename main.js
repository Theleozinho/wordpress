

   const btnMenu = document.querySelector('.ico-menu');
   const menu = document.querySelector('.menu');


   function menuMobile(){
    if(menu.classList.contains("menu-mobile")){ 
        menu.classList.remove("menu-mobile")
    }
    else{ 
        menu.classList.add("menu-mobile")
    }

} 

btnMenu.addEventListener('click', menuMobile);



