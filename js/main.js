jQuery(document).ready(function($){
    $('.post-grid').delegate('.post','mouseenter',function(e){
        var details = $(this).find('.details'),
            title = $(this).find('.title');
        
        details.stop().animate({ height: 227, paddingTop: 40 }, 500 );
    });
    
    $('.post-grid').delegate('.post','mouseleave',function(e){
        var details = $(this).find('.details'),
            title = $(this).find('.title');
        
        details.stop().animate({ height: 60, paddingTop: 10 }, 500 );
    });

    /* Trim excerpt to few lines */

    $('.post-grid .post .details .title, .blog-list .title ').dotdotdot({
        height : 40
    });

    $('.post-grid .post .details .excerpt ').dotdotdot({
        height : 80
    });

    $('.post-list .post .excerpt, .post-list .post .title ').dotdotdot({
        height : 50
    });
});