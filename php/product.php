<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'include/header.php' ?>

  <title>Artigence|Product</title>
  <style>
    .navbar-custom {
      padding: 15px 40px;
    }

    .nav-link {
      color: #777 !important;
      font-weight: 400;
      margin-right: 25px;
    }



    h5.art {
      font-size: 22px !important;
      font-style: unset;
      font-weight: 700;
      line-height: 1.2;
    }

    .btn-contact {
      padding: 10px 20px;
      border: 2px solid #0079ca;
      background-color: #0079ca;
      color: #ffffff;
      font-size: 1rem;
      cursor: var(--font-family);
      border-radius: 30px;
      transition: all 0.4s ease;
      outline: none;
      position: relative;
      overflow: hidden;
      font-weight: bold;
    }



    .navbar-toggler {
      border: none;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-nav .nav-item {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .info-card {
      font-family: var(--font-family);
      /* background: linear-gradient(to right, #0082d5, #ffffff); */
      background-color: #0082d5;
      color: white;
      border-radius: 25px;
      padding: 2rem;
      height: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    h1.lab {
      font-family: var(--font-family);
      font-size: 86px;
      font-weight: 800;
      text-align: center;
      color: #fff;
    }

    h4.subtitle.ti {
      font-family: var(--font-family);
      font-size: 40px !important;
      font-weight: 700;
      text-align: center;
      color: #fff;
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 130, 213, 0.3);
    }

    .info-card h5 {
      font-family: var(--font-family);
      font-size: 22px;
      font-weight: 500;
      line-height: 42px;
      color: rgb(255, 255, 255);
      width: 364px;
      text-align: left;
    }

    .info-card p {
      font-family: var(--font-family);
      margin-bottom: 0;
      font-size: 18px;
      font-weight: 400;
      line-height: 30px;
      color: rgb(255, 255, 255);
      text-align: left;
    }

    .gradient-btn {
      background: linear-gradient(301deg, transparent, #0079ca);
      border: none;
      color: #fff;
      text-align: left;
      /* margin: 10px; */
      padding: 1rem;
      height: 5rem;
      cursor: pointer;
      width: 100%;
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    .gradient-btn:hover,
    .gradient-btn.active {
      transform: scale(1.03);
      /*box-shadow: 0 0 10px rgba(0, 114, 198, 0.5);*/
      /*box-shadow: 1px 2px 1px 1px rgb(0 0 0 / 58%);*/
      box-shadow: 0 4px 8px #007bcd !important;
    }

    .image-box img {
      max-width: 100%;
      border-radius: 15px;
    }

    .read-more-btn {
      background-color: #0072c6;
      color: white;
      font-weight: bold;
      padding: 10px 25px;
      border-radius: 25px;
      border: none;
    }

    .read-more-btn:hover {
      background-color: #005a9c;
    }

    /* blood sample */
    .blood-title {
      font-size: 2.5rem;
      font-weight: 500;
      font-family: var(--font-family);
      text-transform: uppercase;
      text-align: center;
      color: rgb(0, 121, 202);
    }

    .blood-description {
      font-size: 1.5rem;
      font-family: var(--font-family);
      font-optical-sizing: auto;
      color: #777;
      margin-top: 15px;
      text-align: center;
    }

    .blood-finding-section-text {
      padding: 10px;
      color: #777;
      font-weight: 600;
      display: flex;
      font-family: var(--font-family);
      align-items: center;
      margin-left: 25%;
      height: 100%;
      text-align: center;
    }

    .finding {
      display: flex;
      justify-content: center;
      text-align: center;
      padding-bottom: 1rem;
      /* Add spacing between rows */
    }


    .finding img {
      width: 70px;
      height: 70px;
      /* border-radius: 50%; */
      object-fit: cover;
      margin-right: 15px;
    }

    .finding-content img {
      max-width: 100%;
      border-radius: 50px;
      transition: box-shadow 0.3s ease;
    }

    .finding h6 {
      margin: 0;
      font-weight: 100;
    }

    .finding-content h6 {
      margin-top: 10px;
      font-weight: 200;

    }

    .benefit-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background: linear-gradient(301deg, transparent, var(--primary-color));
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .finding-content img {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 3px solid transparent;
    }

    .finding-content:hover img {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px #1779b9;
    }

    p.mb-0.text-white-50 {
      font-family: var(--font-family);
      font-size: 16px;
      font-weight: 400;
      line-height: 24px;
      text-align: left;
      color: rgb(255, 255, 255) !important;
    }

    /* blood sample */
    h5.fw-bold.ru {
      font-family: var(--font-family);
      font-size: 24px;
      font-weight: 500;
      color: rgb(255, 255, 255);
      line-height: 36px;
      text-align: left;
    }

    .finding-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 12px;
      padding: 0.5rem;
      transition: all 0.3s ease;
    }

    .faq-item {
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
    }

    .accordion-header {
      background: #1779b9;
      border-radius: 8px;
      color: white;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .accordion-header:hover {
      /*background: linear-gradient(278.94deg, #d4f5d6 -4.61%, #d3e9f0 105.09%);*/
    }

    .faq-toggle {
      font-size: 1.2rem;
      font-weight: bold;
      transition: all 0.3s ease;
      color: #ffffff;
    }

    .faq-item .accordion-header.collapsed .faq-toggle {
      content: "+";
    }

    .faq-item .accordion-header:not(.collapsed) .faq-toggle {
      content: "×";
      transform: rotate(0deg);
    }

    .faq-item .collapse {
      border-top: 1px solid #f0f0f0;
    }

    .text-danger {
      color: #ff4444 !important;
    }

    /* Mobile: keep two findings in a row */
    @media only screen and (min-width: 320px) and (max-width: 768px) {
      .col-12.col-md-4.d-flex.flex-wrap.justify-content-center.justify-content-md-start {
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        gap: 10px;
      }

      .col-12.col-md-4.d-flex.flex-wrap.justify-content-center.justify-content-md-start>.col-6 {
        max-width: 50%;
        flex: 0 0 50%;
      }

      .btn-contact {
        margin-left: -26px !important;
      }

    }

    @media (min-width: 768px) {
      .equal-height {
        height: 100%;
        display: flex;
        flex-direction: column;
      }
    }

    @media (min-width: 992px) {
      .navbar-nav .nav-item {
        margin: 0;
      }
    }

    @media only screen and (min-width: 320px) and (max-width: 768px) {
      .blood-title {
        color: rgb(0, 121, 202);
        text-align: middle !important;
        font-family: var(--font-family);
        font-weight: 700px;

      }

      h1.lab {
        font-family: 'Ubuntu', sans-serif !important;
        font-size: 60px;
        font-weight: 800;
        text-align: center !important;
        color: #fff;
      }

      .blood-description {
        font-size: 16px;
        font-family: var(--font-family);
        font-optical-sizing: auto;
        color: #777;
        margin-top: 15px;
        /* text-align: center; */
        text-align: -webkit-center;
      }
    }
  </style>
</head>

<body>
  <!-- Responsive Navbar -->
  <?php include 'include/navbar.php' ?>
  <section class="hero_sec_1">
    <div class="container hero-content">
      <h1 class="lab" style="font-family: var(--font-family);">
        Empower Your Lab
      </h1>
      <div>
        <h4 class="subtitle ti" style="font-family: var(--font-family);">One Device, Infinite Microscopy Possibilities </h4>
      </div>
      <!-- <a href="">CONTACT US</a> -->
    </div>
  </section>
  <section>
    <div class="container">
      <div class="container">
        <div class="row ">
          <!-- Left Column: Buttons -->
          <div class="col-md-3 mt-4 mb-md-0 d-flex flex-md-column flex-row">
            <button id="bloodBtn" class="gradient-btn active mb-4 mb-md-4 me-2 me-md-0"
              onclick="changeImage('blood', this)" style="font-family: var(--font-family);">BLOOD</button>
            <button class="gradient-btn mb-4 mb-md-4 me-2 me-md-0" onclick="changeImage('urine', this)" style="font-family: var(--font-family);">URINE</button>
            <button class="gradient-btn mb-4 mb-md-0" onclick="changeImage('semen', this)" style="font-family: var(--font-family);">SEMEN</button>
          </div>

          <!-- Right Column: Image + Read More -->
          <div class="col-md-9 text-center">
            <div class="image-box mb-3 mt-2">
              <img id="sampleImage" src="images/blood.svg" alt="Sample">
            </div>
            <button class="read-more-btn">Read More</button>
          </div>
        </div>
      </div>
  </section>


  <section class="blood-section mt-4" id="blood-analysis" style=" padding: 1rem 0; background-color: #f9f9f9;">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Section -->
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h2 class="blood-title"><span class="blood-title-span" style="font-family: var(--font-family);">Blood Analysis</span></h2>
          <p class="blood-description" style="font-family: var(--font-family);">
            Analyse the Peripheral Blood Smear with cutting-edge AI technology and make the diagnosis easier
            and faster
          </p>
        </div>
        <!-- Right Section -->
        <div class="col-md-12">
          <div class="blood-finding-section">
            <div class="row">
              <div class="col-md-4 col-lg-4 col-sm-12">
                <h3 class="blood-finding-section-text" style="font-family: var(--font-family);"> Blood Findings</h3>
              </div>
              <div class="col-md-8 col-lg-8 col-sm-12">
                <div class="row">
                  <!-- Group 1: RBC + WBC 5-Part -->
                  <div class="col-12 col-md-4 d-flex flex-wrap justify-content-center justify-content-md-start">
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/blood/malaria.png" alt="Malaria">
                        <h6 style="font-family: var(--font-family);">Malaria</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/blood/platelet.jpg" alt="Platelet">
                        <h6>Platelet</h6>
                      </div>
                    </div>
                  </div>

                  <!-- Group 2: WBC Morph + Platelet -->
                  <div class="col-12 col-md-4 d-flex flex-wrap justify-content-center justify-content-md-start">
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/blood/rbc.png" alt="RBC">
                        <h6>RBC</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/blood/wbc.jpg" alt="WBC">
                        <h6> WBC</h6>
                      </div>
                    </div>
                  </div>

                  <!-- Group 3: Malaria centered -->

                </div>

              </div>
            </div>
          </div>

        </div>
  </section>
  <section class="blood-section mt-4" id="urine-analysis" style="    padding: 1rem 0; background-color: #f9f9f9;">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Section -->
        <div class="col-lg-12 col-md-4 col-sm-4">
          <h2 class="blood-title"><span class="blood-title-span">Urine Analysis</span></h2>
          <p class="blood-description">
            Elevate the Urine Microscopic Analysis with our state-of-the-art AI technology
          </p>
        </div>
        <!-- Right Section -->
        <div class="col-md-12">
          <div class="blood-finding-section">
            <div class="row">
              <div class="col-md-4">
                <h3 class="blood-finding-section-text"> Urine Findings</h3>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <!-- Group 1: RBC + WBC 5-Part -->
                  <div class="col-12 col-md-4 d-flex flex-wrap justify-content-center justify-content-md-start">
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/urine/urine_cast.png" alt="Urine Cast">
                        <h6>Urine Cast</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/urine/urine_crystals.png" alt="Urine Crystals">
                        <h6>Urine Crystals</h6>
                      </div>
                    </div>
                  </div>

                  <!-- Group 2: WBC Morph + Platelet -->
                  <div class="col-12 col-md-4 d-flex flex-wrap justify-content-center justify-content-md-start">
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/urine/urine_rbc.png" alt="Urine Rbc">
                        <h6>Urine Rbc</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/urine/urine_yeast.png" alt="Urine Yeast">
                        <h6>Urine Yeast</h6>
                      </div>
                    </div>
                  </div>

                  <!-- Group 3: Malaria centered -->

                </div>

              </div>
            </div>
          </div>

        </div>
  </section>
  <section class="blood-section mt-4" id="semen-analysis" style="padding: 1rem 0; background-color: #f9f9f9;">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Section -->
        <div class="col-lg-12 col-md-4 col-sm-4">
          <h2 class="blood-title"><span class="blood-title-span">Semen Analysis</span></h2>
          <p class="blood-description">
            Get comprehensive insights on the Semen Samples with robust AI technology
          </p>
        </div>
        <!-- Right Section -->
        <div class="col-md-12">
          <div class="blood-finding-section">
            <div class="row">
              <div class="col-md-4">
                <h3 class="blood-finding-section-text"> Semen Findings</h3>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <!-- Group 1: RBC + WBC 5-Part -->
                  <div class="col-12 col-md-4 d-flex flex-wrap justify-content-center justify-content-md-start">
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/semen/amorphous.BMP" alt="Amorphous">
                        <h6>Amorphous</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/semen/normal.BMP" alt="Normal">
                        <h6>Normal</h6>
                      </div>
                    </div>
                  </div>

                  <!-- Group 2: WBC Morph + Platelet -->
                  <div class="col-12 col-md-4 d-flex flex-wrap justify-content-center justify-content-md-start">
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/semen/pyriform.BMP" alt="Pyriform">
                        <h6>Pyriform</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 finding">
                      <div class="finding-content">
                        <img src="images/product/semen/tapered.BMP" alt="Tapered">
                        <h6>Tapered</h6>
                      </div>
                    </div>
                  </div>

                  <!-- Group 3: Malaria centered -->

                </div>

              </div>
            </div>
          </div>

        </div>
  </section>
  <section class="py-5"
    style="background: linear-gradient(to right, white 0%, hsla(210, 100%, 79%, 0.527) 40%, white 100%);">
    <div class="container">
      <h2 class="text-center mb-5 text-primary fw-bold" style="font-family: 'Ubuntu', sans-serif !important;    margin-bottom: 25px;
    font-size: 32px;
    font-weight: 500;
    line-height: 48px;
    color: rgb(0, 121, 202) !important;
    text-align: center;">
        Key Benefits & Features
      </h2>
      <div class="row justify-content-center g-4">

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 h-100 m-2 rounded-4 text-white benefit-card">
            <div class="mb-3"><img src="images/acceleration 1.png" alt="Accelerated Results" style="width: 72px;
    height: 72px;"></div>
            <h5 class="fw-bold ru">Accelerated Results</h5>
            <p class="mb-0 text-white-50">Get faster diagnostics with reduced turnaround time.</p>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 h-100 m-2 rounded-4 text-white benefit-card">
            <div class="mb-3"><img src="images/cloud 1.png" alt="Limitless Storage" style="width: 72px;
    height: 72px;"></div>
            <h5 class="fw-bold ru">Limitless Storage</h5>
            <p class="mb-0 text-white-50">Enjoy endless digital pathology storage, keeping all your data
              secure and accessible.</p>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 h-100 m-2 rounded-4 text-white benefit-card">
            <div class="mb-3"><img src="images/market-demand 1.png" alt="On-Demand Access" style="width: 72px;
    height: 72px;"></div>
            <h5 class="fw-bold ru">On-Demand Access</h5>
            <p class="mb-0 text-white-50">Access reports anytime, anywhere, for seamless workflow
              integration.</p>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 h-100 m-2 rounded-4 text-white benefit-card">
            <div class="mb-3"><img src="images/diagnostic-tool 1.png" alt="Enhanced Diagnostics" style="width: 72px;
    height: 72px;"></div>
            <h5 class="fw-bold ru">Enhanced Diagnostics</h5>
            <p class="mb-0 text-white-50">Simplify the identification of rare cases with advanced tools at
              your fingertips.</p>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 h-100 m-2 rounded-4 text-white benefit-card">
            <div class="mb-3"><img src="images/collaborate 1.png" alt="Collaborative Expertise" style="width: 72px;
    height: 72px;"></div>
            <h5 class="fw-bold ru">Collaborative Expertise</h5>
            <p class="mb-0 text-white-50">Enable remote collaboration on special cases, bringing the best
              minds together.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-5" style="background: linear-gradient(to right, white 0%, hsla(210, 100%, 79%, 0.527) 40%, white 100%);">
    <div class="container">
      <!--<h2 class="text-center mb-5" style="font-family: var(--font-family); font-size: 32px; font-weight: 500; line-height: 48px; color: rgb(0, 121, 202);">-->
      <!--  Frequently Asked Questions-->
      <!--</h2>-->

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">
            <!-- FAQ Item 1 -->
            <div class="faq-item mb-3">
              <div class="d-flex justify-content-between align-items-center p-3 accordion-header"
                data-bs-toggle="collapse"
                data-bs-target="#faq1"
                aria-expanded="false"
                aria-controls="faq1">
                <h5 class="mb-0" style="font-family: var(--font-family); font-weight: 400;">
                  Product Specifications
                </h5>
                <span class="faq-toggle">+</span>
              </div>
              <div id="faq1" class="collapse p-3 bg-white" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div style="font-family: var(--font-family); color: #555; line-height: 1.6; font-size: 16px;">
                  <p style="margin-bottom: 12px;"><strong>Components:</strong></p>
                  <ul style="list-style-type: none; padding-left: 0; margin-bottom: 12px;">
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span> Camera Unit
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span> Computing Unit
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span> Casing
                    </li>
                  </ul>
                </div>
                <div style="font-family: var(--font-family); color: #555; line-height: 1.6; font-size: 16px;">
                  <p style="margin-bottom: 12px;"><strong>Computing:</strong></p>
                  <ul style="list-style-type: none; padding-left: 0; margin-bottom: 12px;">
                    <li style="margin-bottom: 6px; position: relative;">
                      Processor
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>Quad-core 64-bit Arm Cortex -A76 CPU, running at 2.4GHz

                    </li>
                    <li style="margin-bottom: 6px; position: relative;">
                      Memory (RAM)
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>LPDDR4X-4267 8GB SDRAM

                    </li>
                  </ul>
                </div>
                <div style="font-family: var(--font-family); color: #555; line-height: 1.6; font-size: 16px;">
                  <p style="margin-bottom: 12px;"><strong>Camera:</strong></p>
                  <ul style="list-style-type: none; padding-left: 0; margin-bottom: 12px;">
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>Resolution: 12.3 megapixels
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>Sensor Size: 7.9 mm diagonal
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>Pixel Size: 1.55 um x 1.55 pm
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>0.5x Reduction Lens Adapter: Specific to Microscope Brand
                    </li>
                  </ul>
                </div>
                <div style="font-family: var(--font-family); color: #555; line-height: 1.6; font-size: 16px;">
                  <p style="margin-bottom: 12px;"><strong>External Interface :</strong></p>
                  <ul style="list-style-type: none; padding-left: 0; margin-bottom: 12px;">
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>4 x USB Type-A ports
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>1 x Gigabit Ethernet (RJ45) port
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>2 x Micro HDMI ports
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>1 x USB-C power input port (5V/5A)
                    </li>
                  </ul>
                </div>
                <div style="font-family: var(--font-family); color: #555; line-height: 1.6; font-size: 16px;">
                  <p style="margin-bottom: 12px;"><strong>Electrical Specification :</strong></p>
                  <ul style="list-style-type: none; padding-left: 0; margin-bottom: 12px;">
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span> Camera Unit
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span> Computing Unit
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span> Casing
                    </li>
                  </ul>
                </div>
                <div style="font-family: var(--font-family); color: #555; line-height: 1.6; font-size: 16px;">
                  <p style="margin-bottom: 12px;"><strong>External Interface :</strong></p>
                  <ul style="list-style-type: none; padding-left: 0; margin-bottom: 12px;">
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>Input Voltage: 100-240V AC, 50-60Hz
                    </li>
                    <li style="margin-bottom: 6px; position: relative; padding-left: 20px;">
                      <span style="position: absolute; left: 0; color: #0079ca;">•</span>Power Delivery Profiles: 5V/5A, 9V/3A, 12V/2.25A, 15V/1.8A (maximum 27W)
                    </li>

                  </ul>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'include/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellarnav.min.js"></script>
  <script>
    // Script to duplicate logos for continuous scrolling
    document.addEventListener('DOMContentLoaded', function() {
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
  <script>
    // Image paths for each sample type
    const sampleImages = {
      blood: "images/blood.svg", // BLOOD image
      urine: "images/urine.svg", // URINE image
      semen: "images/semen.svg" // SEMEN image
    };

    // This function changes the image and tracks which button is active
    function changeImage(sampleType, button) {
      // Remove 'active' class from all buttons
      const buttons = document.querySelectorAll('.gradient-btn');
      buttons.forEach(btn => btn.classList.remove('active'));

      // Add 'active' class to the clicked button
      button.classList.add('active');

      // Change the image
      document.getElementById('sampleImage').src = sampleImages[sampleType];
    }

    // This handles the Read More button click
    document.querySelector('.read-more-btn').addEventListener('click', function() {
      // Find which button is currently active
      const activeButton = document.querySelector('.gradient-btn.active');

      // Determine which section to scroll to
      let sectionId;
      if (activeButton.textContent === 'BLOOD') {
        sectionId = 'blood-analysis';
      } else if (activeButton.textContent === 'URINE') {
        sectionId = 'urine-analysis';
      } else if (activeButton.textContent === 'SEMEN') {
        sectionId = 'semen-analysis';
      }

      // Smooth scroll to that section
      if (sectionId) {
        document.getElementById(sectionId).scrollIntoView({
          behavior: 'smooth'
        });
      }
    });

    // Initialize with blood as default
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('bloodBtn').click();
    });
  </script>
  <script>
    // This script handles the FAQ toggle icons and accordion behavior
    document.addEventListener('DOMContentLoaded', function() {
      const faqItems = document.querySelectorAll('.accordion-header');

      faqItems.forEach(item => {
        item.addEventListener('click', function() {
          const toggleIcon = this.querySelector('.faq-toggle');
          const isCollapsed = this.classList.contains('collapsed');

          // Update all icons to plus first
          document.querySelectorAll('.faq-toggle').forEach(icon => {
            icon.textContent = '+';
          });

          // If this item is being opened, change its icon to X
          if (!isCollapsed) {
            toggleIcon.textContent = '×';
          }
        });
      });
    });
  </script>
</body>

</html>