const menuButton = document.getElementById('menuBtn');
const menu = document.getElementById('dropdown-menu');

menuButton.addEventListener('click', () => {
    menu.classList.toggle("display_JS");
});


/** 
if(menuButton == null){
    alert("Code didn't work either");
}
else if(menu == null){
    alert("Code didn't work");
}
else{
    alert("Everything works. There's no need to worry.")
}**/