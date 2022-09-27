$(document).ready(function(){
    $("#departments,#doctor_profile").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3   
    })
    $(".services i").mouseenter(function(){
       $(this).parent().parent().find("p").show();
    }
    )
    $(".services i").mouseleave(function(){
        $(this).parent().parent().find("p").hide();
     }
     )
});

