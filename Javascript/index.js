const header = document.querySelector(".header"),
nav = document.querySelector(".nav"),
fromTop = header.offsetTop,
navHeight = header.offsetHeight;

function stickyNav() {
  var scroll = window.scrollY;

  if (scroll >= fromTop) {
    nav.classList.add('scrolled');
    document.querySelector(".bar1").classList.add("scrolled");
    document.querySelector(".bar2").classList.add("scrolled");
    document.querySelector(".bar3").classList.add("scrolled");
  }

  else if( scroll < fromTop ){
    nav.classList.remove('scrolled');
    document.querySelector(".bar1").classList.remove("scrolled");
    document.querySelector(".bar2").classList.remove("scrolled");
    document.querySelector(".bar3").classList.remove("scrolled");
  }

}

window.addEventListener('scroll', stickyNav);
