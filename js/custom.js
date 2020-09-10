//custom js

//viewport
var inScreen = document.querySelectorAll('.inScreen');

onScroll = () => {
  for (var item of inScreen) {
    elementVisible(item);
  }
}

elementVisible = (el) => {
  let top = el.offsetTop;
  let height = el.offsetHeight;
  let bottom = top + height;

  let IsOverBottom = top > (window.pageYOffset + window.innerHeight);
  let IsBeforeTop = bottom < window.pageYOffset;

  if (!IsOverBottom && !IsBeforeTop) {
    el.classList.add("slideUp");
  }
}

window.addEventListener("scroll", onScroll);


//.mobile ul.sub-menu
let hiddenMenu = document.querySelector('.mobile-menu ul.sub-menu');
let parentLink = hiddenMenu.parentNode.querySelector('a');
hiddenMenu.style.display = 'none';

menu_worker = (e) => {
    let foundHiddenUL = e.target.parentNode.querySelector('ul');
    foundHiddenUL.style.display = 'block';
}

parentLink.addEventListener('mouseenter', menu_worker);