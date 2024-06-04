// Grab values from the HTML/PHP sections
let dropdown = document.querySelector('.menu'),
submenu = document.querySelector('.sub-menu'),
buttonClick = document.querySelector('.check-button'),
hamburger = document.querySelector('.menu-icon');

buttonClick.addEventListener( 'click', () => {
    console.log("Clicky")
    dropdown.classList.toggle( 'show-dropdown' );
    submenu.classList.toggle( 'show-dropdown' );
    hamburger.classList.toggle( 'animate-button' );
})