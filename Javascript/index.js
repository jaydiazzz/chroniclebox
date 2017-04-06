$(function () {
  $(document).scroll(function () {
	  var $nav = $(".nav");
	  var $header = $("header");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $header.height());
	});
});

$(function () {
  $(document).scroll(function () {
	  var $nav = $(".bar1,.bar2,.bar3");
	  var $header = $("header");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $header.height());
	});
});

function myFunction(x) {
    x.classList.toggle("change");
}

$('.container').on('click', function() {
    $('nav').toggleClass('open', 300, 'easeOutQuad');
});
