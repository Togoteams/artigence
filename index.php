<?php
$pageTitle = 'Home | Artigence';
ob_start(); ?>
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
<?php
$content = ob_get_clean();

include __DIR__ . '/layout/main.php';
