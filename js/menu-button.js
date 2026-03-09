window.addEventListener('load', function () {

  let $btn = document.querySelector('.toggle-menu-button');
  let $menu = document.querySelector('.header-site-menu');
  let $mask = document.querySelector('#mask');

  $btn.onclick = () => {
    $menu.classList.toggle("is-show");
    $mask.classList.toggle("is-show");  
  };

  $mask.onclick = () => {
    $menu.classList.remove("is-show");
    $mask.classList.remove("is-show"); 
  };
});