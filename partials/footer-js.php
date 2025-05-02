

<script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
    <script>
        // Script to duplicate logos for continuous scrolling
        document.addEventListener('DOMContentLoaded', function () {
            const logoGrid = document.getElementById('logoGrid');

            // Individual logo hover handling
            const logoItems = logoGrid.querySelectorAll('.logo-item');
            logoItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    logoGrid.style.animationPlayState = 'paused';
                });

                item.addEventListener('mouseleave', () => {
                    logoGrid.style.animationPlayState = 'running';
                });
            });
        });
    </script>
    <script>
        jQuery('.stellarnav').stellarNav({
            theme: 'plain',
            breakpoint: 991,
            menuLabel: '',
            position: 'right',

        });

        const videoSection = document.getElementById('videoSection');
        const video = document.getElementById('myVideo');
        const playButton = document.getElementById('playButton');

        // Mouse over: Hide play button and play video
        videoSection.addEventListener('mouseover', () => {
            playButton.classList.add('hidden');
            video.play();
        });

        // Mouse out: Show play button and pause video
        videoSection.addEventListener('mouseout', () => {
            playButton.classList.remove('hidden');
            video.pause();
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