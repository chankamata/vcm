$('#brands').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    autoplay: true,
    autoplayTimeout: 10000, // Set autoplay speed to 5 seconds
    dots: true,
    autoplay: true,
    autoHeight: true, // Ensure all items have the same height
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 2
        }
    }
});