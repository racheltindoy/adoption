$(document).ready(function() {

// --------- animate.min.css ---------
    new WOW().init(); 
// --------- wow end ---------



$('.hamburger_con').click(function() {
    // $('#nav_area').toggleClass("d_block animate__animated animate__slideInDown animate__faster");

    if($('#nav_area').hasClass('animate__slideInDown')) {
        $('#nav_area').removeClass('animate__slideInDown');
        $('#nav_area').addClass('animate__slideOutUp');
        
    } else {
        $('#nav_area').addClass('d_block animate__animated animate__slideInDown animate__faster');
        $('#nav_area').removeClass('animate__slideOutUp');
    }
});



$( window ).resize(function() {
    // remove navigation classes for responsive
    if($(window).width() > 800) {
        if($('#nav_area').hasClass('animate__animated')) {
            $('#nav_area').removeClass('d_block animate__animated animate__slideInDown animate__faster');
        }
    }
});
    
});