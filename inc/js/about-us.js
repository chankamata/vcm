$(document).ready(function () {
    var setEqualHeightPerSlide = function () {
        if ($(window).width() >= 992) {
            var maxHeight = 0;
            // Find the max height of all items in the current set of slides
            $('#core-values .owl-item').each(function (index) {
                var itemHeight = $(this).outerHeight();
                if (itemHeight > maxHeight) {
                    maxHeight = itemHeight;
                }
            });
            // Set the max height to all items in the current set of slides
            $('#core-values .owl-item').css('height', maxHeight);
        } else {
            $('#core-values .owl-item').css('height', ''); // Reset heights for smaller screens
        }
    };

    $('#core-values').owlCarousel({
        loop: false, // Disable looping
        rewind: true, // Enable rewinding to the first item
        nav: false,
        dots: true,
        autoplay: true,
        margin: 30,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout: 8000,
        autoHeight: true,
        mouseDrag: false, // Disable mouse dragging
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2
            }
        },
        onInitialized: setEqualHeightPerSlide,
        onResized: setEqualHeightPerSlide,
        onTranslated: setEqualHeightPerSlide
    });

    $(window).on('resize', setEqualHeightPerSlide);
});


$(document).ready(function () {
    $('#testimonial').owlCarousel({
        loop: false, // Disable looping
        rewind: true, // Enable rewinding to the first item
        nav: false,
        dots: true, // Enable dots
        autoplay: true,
        autoplayTimeout: 10000, // Set autoplay speed to 5 seconds
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoHeight: true, // Ensure all items have the same height
        mouseDrag: false, // Disable mouse dragging
        responsive: {
            0: {
                items: 1
            }
        }
    });

    // Move the dots to the desired location if the screen width is 992px or more
    function moveDots() {
        if ($(window).width() >= 992) {
            var dots = $('#testimonial .owl-dots');
            $('.testimonial_content').append(dots);
        }
    }

    // Initial call
    moveDots();

    // Recheck on window resize
    $(window).resize(function () {
        moveDots();
    });
});
document.addEventListener('DOMContentLoaded', function () {
    // Function to animate the counting
    function animateCount(element) {
        const target = parseInt(element.getAttribute('data-target'), 10);
        let count = 0;
        const increment = target / 200; // Adjust this to change the animation speed

        function updateCount() {
            count += increment;
            if (count >= target) {
                element.textContent = target;
            } else {
                element.textContent = Math.ceil(count);
                requestAnimationFrame(updateCount);
            }
        }

        updateCount();
    }

    // Select all elements with the class 'count' and animate them
    const counters = document.querySelectorAll('.count');
    counters.forEach(counter => {
        animateCount(counter);
    });
});