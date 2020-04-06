jQuery(document).ready(() => {

    checkVisibilityNews();

    jQuery(window).on('scroll', () => {
        checkVisibilityNews();
    });
});

function checkVisibilityNews() {

    if (jQuery(".news-container").inView()) {
        let delay = 0.25;

        jQuery(".news").each((index, item) => {
            jQuery(item).css('animation', 'fade-up 0.4s '+delay+'s ease forwards');

            window.setTimeout(() => {
                jQuery(item).addClass('done');
            }, (delay*1000) + 400);

            delay += 0.1;
        });
    }

}
