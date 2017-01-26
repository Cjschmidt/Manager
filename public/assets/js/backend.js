$(document).ready(function(){

    $('.left-menu .menu-header').on('click', function(){

        $(this).find('.menu-items').slideToggle(200);
        $(this).toggleClass('active');

    });

});