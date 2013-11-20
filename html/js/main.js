jQuery(document).ready(function($){
    $('.post-grid').delegate('.post','mouseenter',function(e){
        var details = $(this).find('.details'),
            title = $(this).find('.title');
        
        details.stop().animate({ height: 228, paddingTop: 40 }, 500 );
    });
    
    $('.post-grid').delegate('.post','mouseleave',function(e){
        var details = $(this).find('.details'),
            title = $(this).find('.title');
        
        details.stop().animate({ height: 50, paddingTop: 10 }, 500 );
    });
});