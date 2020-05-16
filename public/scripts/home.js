jQuery(document).ready(() => {

    checkVisibilityNews();

    let homepageArray = [];
    jQuery(".slide-container img").each(function() {
       homepageArray.push(jQuery(this));
    });
    window.setTimeout(() => {
        advanceSlide(homepageArray, 1);
    }, 30000);

    jQuery(window).on('scroll', () => {
        checkVisibilityNews();
    });

});

function advanceSlide(slideArray, slideToSetActive) {
   jQuery('.slide-container').addClass('closed');


   window.setTimeout(() => {
       jQuery('.slide-container .active').removeClass('active');
       slideArray[slideToSetActive].addClass('active');
       jQuery('.slide-container').removeClass('closed');
   }, 1100);

   if (slideToSetActive === 2) {
        slideToSetActive = 0;
   } else {
        slideToSetActive += 1;
   }

   window.setTimeout(() => {
        advanceSlide(slideArray, slideToSetActive);
   }, 30000);

}

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
