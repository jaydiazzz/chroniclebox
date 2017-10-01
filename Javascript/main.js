function myFunction(x) {
    x.classList.toggle("change");
};

$('.container').on('click', function() {
    $('.nav').toggleClass('open', 300, 'easeOutQuad');
});

// THIS IS THE LOADING FUNCTION

function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1000);

    function checkReady() {
        if ('#cb'[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
};

function show(id, value) {
    document.getElementById(id).style.opacity = value ? '1' : '0';
};

onReady(function () {
    show('body', true);
    show('cb', false);
    $("#cb").css("z-index", -10);
    $("#body").height(100 + "%");
});

jQuery(document).ready(function(){
   jQuery('#hideshow').on('click', function(event) {        
        jQuery('#mc_embed_signup').toggle('show');
    });
});
	       
jQuery(document).ready(function(){
   jQuery('.hideshow').on('click', function(event) {        
        jQuery('#mc_embed_signup').toggle('hide');
    });
});