/**
 * Created by art on 08/11/15.
 */
$(document).ready(function(){
    $(window).scroll(function(){
        var st = $(this).scrollTop();
        $(".header_text").css({
            "transform" : "translate(0%, "+ st/2 +"%)"
        });

        $(".sect_2").css({
            "transform" : "translate(0%, -"+ st/20 +"%)"
        });
    })
});
