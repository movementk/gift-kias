
(function($) {
    /* 헤더 네비게이션 관련 이벤트 */
    $(document).on('mouseenter focusin', '#header .container #nav > ul > li > a', function() {
        $('body').addClass('nav-expanded');
    });
    $(document).on('mouseleave', '#header', function() {
        $('body').removeClass('nav-expanded');
        $('#header #nav > ul > li').removeClass('active');
    });
    $(document).on('mouseenter', '#header #nav > ul > li', function(e) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    /* 모바일, 테블릿 네비게이션 관련 이벤트 */
    $(document).on('click', '#header #btn-nav-open', function() {
        $('body').addClass('nav-opened');
    });
    $(document).on('click', '#nav-aside .nav-backdrop, #nav-aside #btn-nav-close', function() {
        $('body').removeClass('nav-opened');
    });
    $(document).on('click', '#nav-aside .nav-body > ul > li > a', function(e) {
        if ($(this).parent().hasClass('selected')) {
            $(this).parent().removeClass('selected');
        } else {
            $(this).parent().siblings('.selected').removeClass('selected');
            $(this).parent().addClass('selected');
        }
        e.preventDefault();
    });
    // 퀵배너 및 탑 관련
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 150) {
            $('#quick-top').show('slow');
        } else {
            $('#quick-top').hide('slow');
        }
    });
    
    // 퀵 탑 관련
    $(document).on('click', '#quick-top .top', function(e) {
        $('html, body').stop().animate({
            scrollTop: 0
        });
        e.preventDefault();
    });
})(jQuery);