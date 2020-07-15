const MENU_TOGGLE = document.querySelector('.menu-toggle');
const MENU_SECTION = document.querySelector('.menu-section');
const BACK_TOP = document.querySelector('.to-top');
const HEADER = document.querySelector('header');

let show = true;

/* Sticky menu */
window.addEventListener('scroll', () => {
  HEADER.classList.toggle('sticky', window.scrollY > 30);

  BACK_TOP.classList.toggle('visible', window.scrollY > 300);
});

/*Menu Responsivo */
MENU_TOGGLE.addEventListener('click', () => {

  document.body.style.overflowY = show ? 'hidden' : 'initial';

  MENU_SECTION.classList.toggle('on', show);
  show = !show;
});

/* to-top */
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
