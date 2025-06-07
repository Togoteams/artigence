<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
   <?php include 'include/header.php' ?>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>Artigence</title>

  <style>
    @font-face {
      font-family: 'Graphik-bold';
      src: url('fonts/Graphik-Bold.woff2') format('woff2'),
        url('fonts/Graphik-Bold.woff') format('woff');
      font-weight: bold;
      font-style: normal;
    }

    body {
      /*font-family: var(--font-family);*/
      font-family: 'Noto Sans', sans-serif !important;
      /* color: #555; */
    }

    .navbar-custom {
      padding: 1px 40px;
    }

    .nav-link {
      color: #5a5a5a !important;
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
      cursor: povar(--font-family);
      border-radius: 30px;
      transition: all 0.4s ease;
      outline: none;
      position: relative;
      overflow: hidden;
      font-weight: bold;
    }

    .logo-img {
      height: 80px;
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

    .fir.p-4 {
      background: url('images/red-blood-cells-white-background-modified.png');
      background-repeat: no-repeat;
      background-size: cover;
      object-fit: cover;
      /* filter: blur(0px); */
    }

    .info-card {
      font-family: 'Noto Sans', sans-serif !important;
      /*background: linear-gradient(to right, #ea4d4d82, #dfdfdfcc, #595555cc);*/
      background: rgb(255 255 255 / 54%);
      /*background: linear-gradient(to right, #8d8d8d82, #dfdfdfcc);*/
      /* background: linear-gradient(to right, #0082d5, #ffffff); */
      /*background-color: #0082d5;*/
      color: white;
      border-radius: 25px;
      padding: 2rem;
      height: 100%;
      box-shadow: 10px 10px 10px rgb(0 0 0 / 10%);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 130, 213, 0.3);
    }

    .info-card h5 {
      font-family: 'Noto Sans', sans-serif !important;
      font-size: 22px;
      font-weight: bold;
      line-height: 30px;
      color: #777777;
      width: 364px;
      text-align: left;
    }

    .connect-subtext {
      font-family: 'Noto Sans', sans-serif !important;
      font-size: 20px;
      font-weight: 500;
      line-height: 40.2px;
      text-align: center;
      margin: 4px auto;
      height: 150px;
      max-width: 100%;



      color: #777;
    }

    .info-card p {
      font-family: 'Noto Sans', sans-serif !important;
      margin-bottom: 0;
      font-size: 18px;
      font-weight: 400;
      line-height: 30px;
      color: #777777;
      text-align: left;
      margin-top: 13px;
    }

    .scroll-container {
      overflow: hidden;
      width: 100%;
    }

    .logo-grid {
      display: flex;
      width: max-content;
      /* Allow content to expand beyond container */
      /*animation: scroll 20s linear infinite;*/
    }

    .logo-item {
      flex: 0 0 auto;
      margin: 0 20px;
      display: flex;
      align-items: center;
    }

    .logo-item img {
      max-height: 60px;
      width: auto;
      object-fit: contain;
    }

    @keyframes scroll {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
        /* Move by half of total width */
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

    /* Mobile: keep two findings in a row */
    @media only screen and (min-width: 320px) and (max-width: 768px) {
      .btn-contact {
        margin-left: -26px !important;
      }

      .regulatory-section {
        /*margin-top: 70% !important;*/
      }

      section.connect-section.text-white {
        background: linear-gradient(to right, white 0%, hsla(210, 100%, 79%, 0.527) 40%, white 100%);
        height: 500px;
      }
    }

    .hover-card {
      position: relative;
      overflow: hidden;
      border-radius: 12px;
      background-size: cover;
      background-position: center;
      height: 300px;
      transition: transform 0.3s ease-in-out;
      cursor: pointer;
      margin: -12px;
    }

    .hover-card:hover {
      transform: scale(1.02);
    }

    .hover-overlay {
      position: absolute;
      inset: 0;
      background-color: rgba(0, 0, 0, 0.5);
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hover-card:hover .hover-overlay {
      opacity: 1;
    }

    .hover-text {
      color: white;
      font-size: 1.5rem;
      font-weight: 600;
    }

    @media (max-width: 767px) {
      .hover-card {
        height: 200px;
        margin-bottom: 15px;
      }
    }
  </style>
</head>

<body>
  <!-- Responsive Navbar -->
  <?php include 'include/navbar.php' ?>

  <section class="hero_sec">
    <div class="container hero-content">
      <h1 class="ai" style="font-family:  'Noto Sans', sans-serif !important;
    font-size: 90px;
    font-weight: 700;
    text-align: left;
    color: #fff;">
        Bringing Future to Pathology with AI
      </h1>
      <div>
        <h4 class="subtitle" style="font-family: 'Noto Sans', sans-serif !important;">Empowering Microscopy with Innovative Solutions</h4>
      </div>
      <!-- <a href="">CONTACT US</a> -->
    </div>
  </section>
  <section>
    <div class="container">
      <div class="col-md-12 text-center">
        <h1 style="font-family:  'Noto Sans', sans-serif !important;
    font-size: 52px;
    font-weight: 700; padding:20px; color: #777;">Our AI Assists</h1>
      </div>
    </div>
  </section>
  <section>
    <div class="container py-4">
      <div class="row g-1" style="margin-top: -10px;">
        <div class="col-md-4 col-12">
          <div class="hover-card" data-aos="fade-up-right" style="background-image: url('images/our-al-assist-in/blood.png');">
            <div class="hover-overlay">
              <span class="hover-text">BLOOD</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="hover-card" data-aos="fade-up-right" style="background-image: url('images/our-al-assist-in/urine.png');">
            <div class="hover-overlay">
              <span class="hover-text">URINE</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="hover-card" data-aos="fade-up-right" style="background-image: url('images/our-al-assist-in/semen.png');">
            <div class="hover-overlay">
              <span class="hover-text">SEMEN</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="connect-section text-white">
    <div class="container">
      <div class=" px-3 py-3 text-center">

        <p class="fw-semibold connect-subtext mb-0" style="font-family: 'Noto Sans', sans-serif !important;">
          Artigence Copilot transforms the pathologist’s experience. Artigence Copilot is a plug-and-play digital microscopy platform that modernizes routine microscopy analysis and report generation using cutting-edge AI — all without overhauling your existing lab setup.
        </p>
      </div>
    </div>
  </section>
  <section class="regulatory-section py-4">
    <div class="container">
      <h1 class="c_section-title" style="font-family: 'Noto Sans', sans-serif !important;">
        <i class="fas fa-shield-alt me-3"></i>
        Regulatory Compliance
      </h1>

      <div class="row g-4">
        <!-- Compliant With Section -->
        <div class="col-lg-12">
          <div class="c_compliance-card" data-delay="0.2">
            <div class="c_card-header">
              <h3 class="c_card-title" style="font-family:  'Noto Sans', sans-serif !important;">
                <i class="fas fa-check-circle c_status-icon"></i>
                Compliant With
              </h3>
            </div>
            <div class="card-body p-0">
              <div class="c_compliance-item">
                <div class="d-flex align-items-center">
                  <div class="c_compliance-logo c_hipaa-logo">
                    <img src="/images/HIPAA-civil.png" style="width:120px">
                  </div>
                  <div class="c_compliance-text">
                    <div class="c_compliance-name" style="font-family: 'Noto Sans', sans-serif !important;">HIPAA Compliance</div>
                    <p class="c_compliance-desc" style="font-family: 'Noto Sans', sans-serif !important;">Health Insurance Portability and Accountability Act - Ensuring patient data privacy and security</p>
                  </div>
                </div>
                <div class="c_progress-indicator"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Applied For Section -->
        <div class="col-lg-12">
          <div class="c_compliance-card mb-3" data-delay="0.2">
            <div class="c_card-header">
              <h3 class="c_card-title" style="font-family:  'Noto Sans', sans-serif !important;">
                <i class="fas fa-check-circle c_status-icon"></i>
                Applied For
              </h3>
            </div>
            <div class="card-body p-0">
              <div class="c_compliance-item">
                <div class="d-flex align-items-center">
                  <div class="c_compliance-logo c_hipaa-logo">
                    <img src="/images/eh-CDSCO-Logo.png" style="width:120px">
                  </div>
                  <div class="c_compliance-text">
                    <div class="c_compliance-name" style="font-family: 'Noto Sans', sans-serif !important;">CDSCO Approval</div>
                    <p class="c_compliance-desc" style="font-family: 'Noto Sans', sans-serif !important;">Central Drugs Standard Control Organization - Indian regulatory authority for pharmaceuticals</p>
                  </div>
                </div>
                <div class="c_progress-indicator"></div>
                <div class="d-flex align-items-center mt-3">
                  <div class="c_compliance-logo c_hipaa-logo">
                    <img src="/images/what-is-iso.png" style="width:60px">
                  </div>
                  <div class="c_compliance-text">
                    <div class="c_compliance-name" style="font-family:var(--font-family)">ISO Certification</div>
                    <p class="c_compliance-desc" style="font-family:var(--font-family)">International Organization for Standardization - Quality management systems certification</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  


  <section class="our_partner">
    <div class="container">
      <div class="row">
        <div class="col-md-3 supported-by-text ">
          Supported By
        </div>
        <div class="col-md-9">
          <div class="scroll-container">
            <div class="logo-grid" id="logoGridSupported" style="animation-duration: 30s;">
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

  <section class="our_partner">
    <div class="container">
      <div class="row">
        <div class="col-md-3 supported-by-text ">
          Collaborated With
        </div>
        <div class="col-md-9">
          <div class="scroll-container">
            <div class="logo-grid" id="logoGridCollaborated" style="animation-duration: 10s;">
              <div class="logo-item">
                <img src="images/collaborated/SIMS-RH-Logo.png" alt="SIMS-RH">
              </div>
              <div class="logo-item">
                <img src="images/collaborated/plus-one.webp" alt="Plus One">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="fir p-4">
    <div class="container my-5 p-1">
      <div class="row g-4">
        <div class="col-md-4 d-flex">
          <div class="info-card equal-height w-100">
            <h5>Lower Costs, Smarter &amp; <br> Faster Diagnosis</h5>
            <p>Replace expensive manual labor with AI automation that speeds up routine microscopy and cuts down operational costs.</p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="info-card equal-height w-100">
            <h5>Improved Pathologist <br> Workflow</h5>
            <p>Let pathologists focus on decision-making by automating repetitive tasks like cell detection, classification, and report generation.</p>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="info-card equal-height w-100">
            <h5>All-in-one Solutions for <br> Routine Microscopy</h5>
            <p>One compact device. Multiple applications — Blood, Urine, Semen, and more. Expandable and future-ready.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="get_in_touch py-5" style="background: linear-gradient(to right, white 0%, hsla(210, 100%, 79%, 0.527) 40%, white 100%);">
    <div class="container">
      <div class="row align-items-center text-center text-md-start">
        <div class="col-12 col-md-8 mb-3 mb-md-0">
          <h2 style="font-family: var(--font-family); color: #777777;">Ready to experience the future of pathology?</h2>
          <h2></h2>
        </div>
        <div class="col-12 col-md-4 text-center text-md-end">
          <a href="contact-us.html" class="boton-elegante mt-3 mt-md-4"><span>Get in touch</span></a>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <?php include 'include/footer.php' ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellarnav.min.js"></script>
  <script>
    // Initialize AOS animation library
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 120
      });
    });
  </script>
  <script>
    // ...existing code...
    document.addEventListener('DOMContentLoaded', function() {
      function setupLogoGrid(gridId) {
        const logoGrid = document.getElementById(gridId);
        if (!logoGrid) return;
        // Clone all logo items and append them to create seamless loop
        const logoItems = logoGrid.querySelectorAll('.logo-item');
        logoItems.forEach(item => {
          const clone = item.cloneNode(true);
          logoGrid.appendChild(clone);
        });
        // Individual logo hover handling
        logoGrid.querySelectorAll('.logo-item').forEach(item => {
          item.addEventListener('mouseenter', () => {
            logoGrid.style.animationPlayState = 'paused';
          });
          item.addEventListener('mouseleave', () => {
            logoGrid.style.animationPlayState = 'running';
          });
        });
      }
      setupLogoGrid('logoGridSupported');
      setupLogoGrid('logoGridCollaborated');
    });
    // ...existing code... 
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
    // Animate cards on page load
    window.addEventListener('load', function() {
      const cards = document.querySelectorAll('.c_compliance-card');

      cards.forEach((card, index) => {
        setTimeout(() => {
          card.classList.add('c_animate-in');
        }, index * 200);
      });
    });

    // Intersection Observer for scroll animations
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('c_animate-in');
        }
      });
    }, observerOptions);

    document.querySelectorAll('.c_compliance-card').forEach(card => {
      observer.observe(card);
    });
  </script>
</body>

</html>