const menuButton = document.getElementById('menuBtn');
const menu = document.getElementById('dropdown-menu');

menuButton.addEventListener('click', () => {
    menu.classList.toggle("display_JS");
});
