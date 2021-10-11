//evento click
var side__menu = document.getElementById("menu_side");
var btn_open= document.getElementById("btnOpen");
var body = document.getElementById("body");
document.getElementById('btnOpen').addEventListener('click',open_close_menu);
function open_close_menu(){
    body.classList.toggle("body__move");
    side__menu.classList.toggle("menu__side__move")

}
if(window.innerWidth<760){
    body.classList.add("body__move");
    side__menu.classList.add("menu__side__move")
}
window.addEventListener("resize",function(){
    if(window.innerWidth> 750){
        body.classList.remove("body__move");
        side__menu.classList.remove("menu__side__move");
    }
    if(window.innerWidth<750){
        body.classList.add("body__move");
        side__menu.classList.add("menu__side__move");
    }
});
function ubicacion(){
    window.open("https://goo.gl/maps/6k7ccdsd7ewK7y6x7");
}