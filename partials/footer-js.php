

<script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
    
    <script>
        jQuery('.stellarnav').stellarNav({
            theme: 'plain',
            breakpoint: 991,
            menuLabel: '',
            position: 'right',

        });

        

        $('#part_slide').owlCarousel({
            loop: true,
            rtl: false,
            // direction: rtl,
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 2000,
            autoplayHoverPause: true,
            margin: 50,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    </script>