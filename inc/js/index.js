
$(document).ready(function () {
    $('#brands').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 5000,
        autoplayTimeout: 5000, // Small timeout for smooth continuous scroll
        autoplayHoverPause: false, // Disable pause on hover for continuous scroll
        slideTransition: 'linear', // Linear transition for smooth effect
        responsive: {
            0: {
                items: 3
            },
            576: {
                items: 4
            },
            768: {
                items: 5
            },
            992: {
                items: 6
            },
            1200: {
                items: 7
            },
            1441: {
                items: 9
            }
        }
    });
});
$(document).ready(function () {
    $('#personalities').owlCarousel({
        loop: false, // Disable looping
        rewind: true, // Enable rewinding to the first item
        nav: false,
        dots: false,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout: 3000,
        mouseDrag: false, // Disable mouse dragging
        responsive: {
            0: {
                items: 1
            }
        }
    });
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
$(document).ready(function () {
    $('#services').owlCarousel({
        loop: false,
        rewind: true,
        margin: 20,
        nav: true,
        autoplay: true,
        autoplayTimeout: 10000, // Set autoplay speed to 5 seconds
        dots: false,
        autoplay: true,
        autoHeight: true, // Ensure all items have the same height
        responsive: {
            0: {
                items: 1
            },
            1200: {
                items: 2
            }
        }
    });

    // Move the dots to the desired location if the screen width is 992px or more
    function moveNav() {
        if ($(window).width() >= 992) {
            var nav = $('#services .owl-nav');
            $('section.index_services .header_content').append(nav);
        }
    }

    // Initial call
    moveNav();

    // Recheck on window resize
    $(window).resize(function () {
        moveNav();
    });
    $('section.index_services .owl-nav button.owl-prev span').replaceWith(`
      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
        <g clip-path="url(#clip0_2062_3241)">
        <path d="M9.33246 12.0048L17.7497 3.5872C17.9814 3.35598 18.1089 3.04683 18.1089 2.7172C18.1089 2.38738 17.9814 2.07841 17.7497 1.84683L17.0121 1.10963C16.7807 0.877683 16.4714 0.75 16.1417 0.75C15.8121 0.75 15.5031 0.877683 15.2715 1.10963L5.24953 11.1315C5.01703 11.3638 4.88972 11.6742 4.89063 12.0042C4.88972 12.3357 5.01685 12.6457 5.24953 12.8782L15.2622 22.8904C15.4938 23.1223 15.8028 23.25 16.1326 23.25C16.4622 23.25 16.7712 23.1223 17.0029 22.8904L17.7403 22.1532C18.2201 21.6734 18.2201 20.8923 17.7403 20.4126L9.33246 12.0048Z" fill="#F2F7E0"/>
        </g>
        <defs>
            <clipPath id="clip0_2062_3241">
            <rect width="22.5" height="22.5" fill="white" transform="translate(0.25 0.75)"/>
            </clipPath>
        </defs>
        </svg>
    `);
    $('section.index_services .owl-nav button.owl-next span').replaceWith(`
             <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
        <g clip-path="url(#clip0_2062_3241)">
        <path d="M9.33246 12.0048L17.7497 3.5872C17.9814 3.35598 18.1089 3.04683 18.1089 2.7172C18.1089 2.38738 17.9814 2.07841 17.7497 1.84683L17.0121 1.10963C16.7807 0.877683 16.4714 0.75 16.1417 0.75C15.8121 0.75 15.5031 0.877683 15.2715 1.10963L5.24953 11.1315C5.01703 11.3638 4.88972 11.6742 4.89063 12.0042C4.88972 12.3357 5.01685 12.6457 5.24953 12.8782L15.2622 22.8904C15.4938 23.1223 15.8028 23.25 16.1326 23.25C16.4622 23.25 16.7712 23.1223 17.0029 22.8904L17.7403 22.1532C18.2201 21.6734 18.2201 20.8923 17.7403 20.4126L9.33246 12.0048Z" fill="#F2F7E0"/>
        </g>
        <defs>
            <clipPath id="clip0_2062_3241">
            <rect width="22.5" height="22.5" fill="white" transform="translate(0.25 0.75)"/>
            </clipPath>
        </defs>
        </svg>
    `);
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
