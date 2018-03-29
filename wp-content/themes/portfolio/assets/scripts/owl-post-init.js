$( document ).ready(function() {
    $('#post-carousel').owlCarousel({
        loop: true,
        nav: true,
        items: 1,
        autoplay: true,
        navText: ['<i class="material-icons">chevron_left</i>','<i class="material-icons">chevron_right</i>'],
        lazyLoad: true
    });
});
