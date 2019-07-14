$(document).ready(function(){
    $('.side_nav_link').click(function(){

$('.side_nav_link').removeClass('active');
$(this).addClass('active');
    
});//for side nav

    $('.top_nav_link').click(function(){

        $('.top_nav_link').css("opacity","1");
        $(this).css("opacity",".5");
            
    });//for top nav

$(document).click(function(e){
    if(!$(e.target).is('.top_nav_item,.top_nav_link,.top_nav_link i,.side_nav_link')){
        $('.top_nav_link').css("opacity","1");
        $('.side_nav_link').removeClass('active');
    }
});//document after click
    
});