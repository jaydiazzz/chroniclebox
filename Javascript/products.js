var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;

    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 10000); // Change image every 2 seconds
    var one = document.getElementsByClassName("1");
    var two = document.getElementsByClassName("2");
    var three = document.getElementsByClassName("3");
    if(document.querySelector(".first").style.display == "block"){
      one.classList.remove("active");
      two.classList.remove("active");
      three.classList.remove("active");
      one.classList.add('active');
    } else if(document.querySelector(".second").style.display == 'block'){
      one.classList.remove("active");
      two.classList.remove("active");
      three.classList.remove("active");
      two.classList.add('active');
    } else if(document.querySelector(".third").style.display == 'block'){
      one.classList.remove("active");
      two.classList.remove("active");
      three.classList.remove("active");
      three.classList.add('active');
    }

    else{
      document.querySelector('.dot').classList.remove('active');
    }
};
