$('#brands').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    autoplay: true,
    autoplayTimeout: 10000,
    dots: true,
    autoplay: true,
    autoHeight: true,
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 2
        }
    }
});

jQuery(document).ready(function () {
    var isColImageInitialized = false;
    var isImageInitialized = false;

    function handleLoadMoreColImage() {
        if (isColImageInitialized) return;
        var perPage = 2;
        var increment = 1;

        jQuery('.wrapper .col-image').slice(perPage).hide();
        jQuery('#loadMore').on('click', function () {
            var visibleItems = jQuery('.wrapper .col-image:visible').length;
            jQuery('.wrapper .col-image').slice(visibleItems, visibleItems + increment).slideDown();
            if (jQuery('.wrapper .col-image:visible').length === jQuery('.wrapper .col-image').length) {
                jQuery(this).fadeOut();
            }
        });

        isColImageInitialized = true;
    }

    function handleLoadMoreImage() {
        if (isImageInitialized) return;
        var perPage = 4;
        var increment = 1;

        jQuery('.wrapper .d-flex.col-image .image').slice(perPage).hide();
        jQuery('#loadImage').on('click', function () {
            var visibleItems = jQuery('.wrapper .d-flex.col-image .image:visible').length;
            jQuery('.wrapper .d-flex.col-image .image').slice(visibleItems, visibleItems + increment).slideDown();
            if (jQuery('.wrapper .d-flex.col-image .image:visible').length === jQuery('.wrapper .d-flex.col-image .image').length) {
                jQuery(this).fadeOut();
            }
        });

        isImageInitialized = true;
    }

    function handleMediaQueries() {
        if (window.matchMedia("(min-width: 768px)").matches) {
            handleLoadMoreColImage();
        } else if (window.matchMedia("(max-width: 767px)").matches) {
            handleLoadMoreImage();
        }
    }

    handleMediaQueries();

    jQuery(window).on('resize', function () {
        handleMediaQueries();
    });
});

// Load More Button
jQuery(document).ready(function () {
    // Set the number of initially loaded images and increment for each click
    var perPage, increment;
    if (window.innerWidth >= 1200) {
        perPage = 21;
        increment = 7;
    } else if (window.innerWidth >= 390) {
        perPage = 12;
        increment = 3;
    } else {
        perPage = 6;
        increment = 2;
    }

    // Hide images greater than the initial number
    jQuery('.client .brand-logo .image:gt(' + (perPage - 1) + ')').hide();

    // Handle the "Load More" button click
    jQuery('#loadbrand').click(function () {
        var visibleCount = jQuery('.client .brand-logo .image:visible').length;
        // Show the next set of images based on the increment value
        jQuery('.client .brand-logo .image:lt(' + (visibleCount + increment) + ')').slideDown();
        // Hide the "Load More" button if all images are visible
        if (jQuery('.client .brand-logo .image:visible').length === jQuery('.client .brand-logo .image').length) {
            jQuery('#loadbrand').hide();
        }
    });
});
