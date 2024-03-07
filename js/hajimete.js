$(function() {
    $('.navToggle').click(function() {
        $('body').toggleClass('active');

        if ($('body').hasClass('active')) {
            $('.spNavul').addClass('active');
        } else {
            $('.spNavul').removeClass('active');
        }
    });
    
     $('.spNavul a[href^=#]').click(function(){
        $('.spNavul').removeClass('active');
        $('body').removeClass('active');
    });

      $('a[href^=#]').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
    
        $(".menu li").hover(function() {
        $(this).children('ul').show();
    }, function() {
        $(this).children('ul').hide();
    });
    
});



