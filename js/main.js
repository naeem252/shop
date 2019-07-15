$(document).ready(function(){
    $('.side_nav_link').click(function(){

$('.side_nav_link').removeClass('active');
$(this).addClass('active');
    
});//for side nav

    $('.top_nav_link').click(function(){

        $('.top_nav_link').removeClass('active_t');
        // $(this).toggleClass("active_t");
        if(!$(this).hasClass('active_t')){
            $(this).addClass('active_t');
        }
        
        else if($(this).hasClass('active_t')){
            console.log(5555);
        }
    });//for top nav

    // user sub
//    $('.user_sub').hide();
var slide=false;
    $('#user').click(function(){
        if(!slide){
            $('.user_sub').css('transform',"scaleY(1)");
            // setTimeout(()=>$('.user_sub').css('transform',"translateY(10px)"),300);
            slide=true;
        }else if(slide){
            // $('.user_sub').css('transform',"translateY(0px)");
            // setTimeout(()=>,300);
            $('.user_sub').css('transform',"scaleY(0)")
            
         
            slide=false;
        }


    });

$(document).click(function(e){
    if(!$(e.target).is('.top_nav_item,.top_nav_link,.top_nav_link i,.side_nav_link')){
        $('.top_nav_link').removeClass('active_t');
        $('.side_nav_link').removeClass('active');
        $('.user_sub').css("transform","scaleY(0)");
        slide=false;
    }
});//document after click
    
});