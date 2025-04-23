<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/stellarnav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <title>Artigence</title>
</head>

<body>
    <?php include('layout/header.php'); ?>
    <section class="hero_sec">
        <div class="container-fuild hero-content">
            <h1>
                Bringing Future to Pathology with AI
            </h1>
            <div>
                <h4 class="subtitle">Empowering Microscopy with Innovative Solutions</h4>
            </div>
            <!-- <a href="">CONTACT US</a> -->
        </div>
    </section>
    <section class="solutions">
        <div class="container-fuild" style="margin-left:200px;margin-right:200px">

            <div class="solutions_caard">
                <div class="s_card">
                    <h3>Lower Costs,Smarter & Faster Diagnosis</h3>
                </div>
                <div class="s_card">
                    <h3>Improved Pathologist Workflow </h3>
                </div>
                <div class="s_card">
                    <h3>All-in-one Solutions for Routine Microscopy
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fuild" style="margin-left:200px;margin-right:200px" id="videoSection">
        <video id="myVideo" muted poster="./images/videoimagebg.svg" controls>
            <source src="https://sigtuple.com/api/uploads/shonit_v6_f71e73a0_7294c56140.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <section class="our_partner">
        <div class="container-fuild">
            <div class="row">
                <div class="col-md-2 supported-by-text ">
                    Supported By
                </div>
                <div class="col-md-10">
                    <div class="scroll-container">
                        <div class="logo-grid" id="logoGrid">
                            <div class="logo-item">
                                <img src="images/supported-by/iiit-cie.png" alt="iiit cie">
                            </div>
                            <div class="logo-item">
                                <img src="images/supported-by/startup-india.webp" alt="startupindia">
                            </div>
                            <div class="logo-item">
                                <img src="images/supported-by/sisfs-web.jpg" alt="SEED FUND SCHEME">
                            </div>


                            <div class="logo-item">
                                <img src="images/supported-by/prymbjh4.png" alt="MAZUMDAR SHAW MEDICAL FOUNDATION ">
                            </div>

                            <div class="logo-item">
                                <img src="images/supported-by/dst-nidhi.jpg" alt="DST nidhi">
                            </div>


                            <div class="logo-item">
                                <img src="images/supported-by/nidhi-prayas.jpg" alt="nidhi-prayas">
                            </div>

                            <div class="logo-item">
                                <img src="images/supported-by/c-camp.png" alt="C Camp">
                            </div>



                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="get_in_touch">
        <div class="container-fuild">
            <div class="row">
                <div class="col-md-8">
                    <h2>Want to know more
                        about
                    </h2>
                    <h2>
                        Artigence
                        Healthcare
                    </h2>
                </div>
                <div class="col-md-4 text-center">
                    <button href="contact-us.html" class="boton-elegante mt-4 "><span>Get in touch</span></button>
                </div>

            </div>
        </div>
    </section>
    <?php include('layout/footer.php'); ?>



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
</body>

</html>