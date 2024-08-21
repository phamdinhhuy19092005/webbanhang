$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            }, 
            200: {
                items: 1
            }, 
            300: {
                items: 2
            }, 
            400: {
                items: 2
            },
            600: {
                items: 2
            },
            700: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
});