$(document).ready(function(){

    $(window).scroll(function(){

        if($(this).scrollTop() > 40){
            $('#buttonTop').fadeIn();
        } else {
            $('#buttonTop').fadeOut();
        }
    });

    $('#buttonTop').click(function (){
        $('html,body').animate({scrollTop :0},0);
    });
});