jQuery.fn.inView = function() {
    var elementTop = jQuery(this).offset().top;
    var elementBottom = elementTop + jQuery(this).outerHeight();

    var viewportTop = jQuery(window).scrollTop();
    var viewportBottom = viewportTop + jQuery(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

jQuery(document).ready(() => {
    checkVisibility();

    jQuery(document).scroll(() => {
        checkVisibility();
    });

    jQuery('li').mouseenter(function() {
        let numChildren = jQuery(this).children('.sub-menu').children().length;
        console.log(numChildren);
        jQuery(this).children('.sub-menu').addClass('active');
        jQuery(this).children('.sub-menu').css('height', 40*numChildren);
    });
    jQuery('.blog-nav').mouseleave(function() {
        jQuery('.sub-menu').removeClass('active');
        jQuery('.sub-menu').css('height', '0px');
    });

    checkWindowForMenu();
    jQuery(window).resize(() => {
        checkWindowForMenu();
    });
    jQuery('.header-hand').click((e) => {
       jQuery('.blog-header').toggleClass('closed');
       jQuery(e.target).toggleClass('closed');
    });
});

function checkVisibility() {
    jQuery(".container *").each(function() {
        if (jQuery(this).inView()) {
            jQuery(this).css('animation', 'fade-up 0.4s 0.2s ease forwards');
        }
    });
}
function checkWindowForMenu() {
    if (jQuery(window).width() <= 1500) {
       jQuery('.blog-header').addClass('closed');
       jQuery('.header-hand').addClass('closed');
    }
}

// jQuery('a').mouseenter(function(e) {
//     jQuery(this).append(
//         "<svg class='squiggle-link' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:ev='http://www.w3.org/2001/xml-events' viewBox='0 0 150 150'><style type='text/css'>.squiggle,.squiggle-r{stroke-dasharray:580;stroke-dashoffset:580;}.squiggle{animation:shift 1s ease forwards}.squiggle-r{animation:shift-r 1s ease forwards;}@keyframes shift {from {stroke-dashoffset:580;}to {stroke-dashoffset:0;}} @keyframes shift-r {from {stroke-dashoffset:0;}to {stroke-dashoffset:580;}}</style><path fill='none' stroke='#333' stroke-width='2' class='squiggle' d='m51.969 64.477c-5 8-12 14-19 19-7 5-17 10-25 4-2-1-3-3-4-5 0-2 1-4 3-5 2-1 4-1 6-2 2 0 5-1 7-1 10 0 20 2 29 5 5 1 10 3 14 4 5 1 10 2 15 2 10 1 21 2 31 2 5 0 10 0 15-1 4-1 9-2 13-4 3-2 7-5 8-9 0-4-3-6-6-7-4-1-8 0-12 1-4 1-9 3-12 5-8 5-15 12-21 19-2 2-3 4-5 5-1 1 1 3 2 2 6-7 13-15 21-20 7-5 16-10 26-9 3 0 8 2 7 6-2 4-6 6-10 8-10 3-20 3-30 2-10-1-21-2-31-3-10-2-20-4-30-7-9-2-19-4-29-3-4 1-9 1-11 5-2 4 0 8 3 10 7 6 17 4 24-1 8-4 15-10 21-17 1-2 3-3 4-5 1-1-1-2-2-1l0 0z'/></svg>"
//     );
// })
// .mouseleave(function() {
//     jQuery('path').removeClass('squiggle');
