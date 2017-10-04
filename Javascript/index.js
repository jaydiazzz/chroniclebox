$(function(){$(document).scroll(function(){var $nav=$(".nav, .bar1, .bar2, .bar3");var $header=$("header");$nav.toggleClass('scrolled',$(this).scrollTop()>$header.height())})})
