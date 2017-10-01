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
    
    if($(".first").css('display') == 'block'){
      $('.1, .2, .3').removeClass('active');
      $('.1').addClass('active');
    } else if($(".second").css('display') == 'block'){
      $('.1, .2, .3').removeClass('active');
      $('.2').addClass('active');
    } else if($(".third").css('display') == 'block'){
      $('.1, .2, .3').removeClass('active');
      $('.3').addClass('active');
    }
    
    else{
      $('.dot').removeClass('active')
    }
};
