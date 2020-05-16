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
    resizeHeader();
    jQuery(window).resize(() => {
        checkWindowForMenu();
        resizeHeader();
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
    if (jQuery(window).width() <= 1000) {
       jQuery('.blog-header').addClass('closed');
       jQuery('.header-hand').addClass('closed');
    }
}

function resizeHeader() {
    let scaleFactor = (window.innerHeight / 1080) + 0.05;
    jQuery('.header-resizer').css('transform', 'scale('+scaleFactor+')');
}
