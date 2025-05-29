<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
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
   <style>
           body {
     font-family: 'Ubuntu', sans-serif;
      /* color: #555; */
    }
    .navbar-custom {
      padding: 15px 40px;
    }
    .nav-link {
      color: #5a5a5a !important;
      font-weight: 400;
      margin-right: 25px;
    }
    .nav-link.active {
      color: #005377 !important;
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
      height: 60px;
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
    font-family: 'Ubuntu', sans-serif;
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
   font-family: 'Ubuntu', sans-serif;
    font-size: 22px;
    font-weight: bold;
    line-height: 30px;
    color: #777777;
    width: 364px;
    text-align: left;
  }

  .info-card p {
   font-family: 'Ubuntu', sans-serif;
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
  width: max-content; /* Allow content to expand beyond container */
  animation: scroll 20s linear infinite;
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
    transform: translateX(-50%); /* Move by half of total width */
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

    }
   </style>
</head>

<body>
<!-- Responsive Navbar -->
<?php include 'include/navbar.php' ?>

<section class="hero_sec">
      <div class="container hero-content">
         <h1 class="ai" style="font-family: Inter;
    font-size: 90px;
    font-weight: 700;
    text-align: left;
    color: #fff;">
            Bringing Future to Pathology with AI
         </h1>
         <div>
            <h4 class="subtitle">Empowering Microscopy with Innovative Solutions</h4>
         </div>
         <!-- <a href="">CONTACT US</a> -->
      </div>
   </section>
   <section class="fir p-4">
<div class="container my-5 p-1">
  <div class="row g-4">
    <div class="col-md-4 d-flex">
      <div class="info-card equal-height w-100">
        <h5>Lower Costs,Smarter &amp; <br> Faster Diagnosis</h5>
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
<div class="container my-5" id="videoSection">
  <div class="ratio ratio-16x9">
    <video id="myVideo" muted poster="./images/videoimagebg.svg" controls>
      <source src="https://sigtuple.com/api/uploads/shonit_v6_f71e73a0_7294c56140.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</div>

   <section class="our_partner">
      <div class="container">
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

<section class="get_in_touch py-5" style="background: linear-gradient(to right, white 0%, hsla(210, 100%, 79%, 0.527) 40%, white 100%);">
  <div class="container">  
    <div class="row align-items-center text-center text-md-start">
      <div class="col-12 col-md-8 mb-3 mb-md-0">
        <h2 style="font-family: 'Ubuntu', sans-serif !important; color: #777777;">Want to know more about Artigence Healthcare</h2>
        <h2></h2>
      </div>
      <div class="col-12 col-md-4 text-center text-md-end">
        <a href="contact-us.html" class="boton-elegante mt-3 mt-md-4"><span>Get in touch</span></a>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<footer class="bg-light  py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div><img src="images/logo.svg" alt="Footer Logo" class="f-logo"></div>
      </div>
      <div class="col-md-4">
        <div class="footer-links">
          <a href="product.html"> Products </a>
          <a href="carer.html">Career</a>
          <a href="#">News &amp; Media</a>
          <a href="#">Research &amp; Publications</a>
          <a href="#">About Us</a>
          <a href="#">Contact Us</a>
        </div>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-4 text-end">
        <h5 style="text-align: left;" class="art">Artigence Healthcare Systems <br>Private Limited</h5>
        <h6 style="text-align: left; color: #777;" class="art mt-1">CIN - U62099MH2023PTC398192</h6>
        <p class="text-muted" style="width: 100%;">Plot No. 14/1, Serial No. UGF 14, Shree Ganesh Chamber, Dhantoli, Nagpur,
          Maharashtra, India - 440012</p>
        <div class="d-flex footer-icons justify-content-left">
          <div class="social-link"><a href="https://www.facebook.com/artigencehealthcare"><img src="images/footer/fb.svg" alt="Facebook"></a></div>
          <div class="ms-2 social-link"><a href="https://www.instagram.com/artigence_healthcare/"><img src="images/footer/instagram.svg" alt="Instagram"></a></div>
          <div class="ms-2 social-link"><a href="https://www.linkedin.com/company/artigence-healthcare/"><img src="images/footer/link.svg" alt="LinkedIn"></a></div>
          <div class="ms-2 social-link"><a href="#"><img src="images/footer/x.svg" style="height: 35px;" alt="X"></a></div>
        </div>
      </div>
    </div>
    <div class="row mt-4 thin-strip">
      <div class="col-md-4"></div>
      <div class="col-md-4 text-center">
        <p class="mt-3 mb-2 text-muted">All Content Copyright 2025 |
          <a href="privacy-policy.html" class="text-dark text-decoration-none">Privacy Policy</a> |
          <a href="terms.html" class="text-dark text-decoration-none">Terms of Use</a>
        </p>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/stellarnav.min.js"></script>
   <script>
     document.addEventListener('DOMContentLoaded', function () {
  const logoGrid = document.getElementById('logoGrid');
  
  // Clone all logo items and append them to create seamless loop
  const logoItems = logoGrid.querySelectorAll('.logo-item');
  logoItems.forEach(item => {
    const clone = item.cloneNode(true);
    logoGrid.appendChild(clone);
  });

  // Individual logo hover handling
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