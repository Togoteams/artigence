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
  <link rel="stylesheet" href="css/product.css" type="text/css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <title>Product</title>
</head>
<style>
  /* Hide all tabs initially */
  .blood_analysis_content {
    display: none;
    /* Initially hidden */
    opacity: 0;
    transform: translateX(100%);
    /* Start off-screen */
    transition: transform 0.4s ease-in-out, opacity 0.4s;
    width: 100%;
  }

  /* When tab is active, slide it into view */
  .blood_analysis_content.active {
    /* Ensure the element is visible before animation */
    opacity: 1;
    animation: slideIn 0.4s ease-in-out forwards;
  }

  /* Hide class for exit animation */
  .blood_analysis_content.hide {

    animation: slideOut 0.4s ease-in-out forwards;
  }

  .tab-button {
    background: linear-gradient(to right, #1c1c1e, #2e2e2f);
    border: none;
    color: #fff;
    text-align: left;
    padding: 1rem;
    margin-bottom: 0.5rem;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
    transition: background 0.3s ease;
  }

  .tab-button.active,
  .tab-button:hover {
    background: linear-gradient(to right, #4c4c4f, #636366);
  }

  .tab-content img {
    max-width: 100%;
    border-radius: 10px;
  }

  .left-panel {
    border-right: 1px solid #444;
    padding-right: 2rem;
  }

  .right-panel {
    padding-left: 2rem;
  }

  .sub-heading {
    font-size: 0.8rem;
    color: #aaa;
  }

  .main-title {
    font-size: 1rem;
    font-weight: bold;
  }
</style>

<body>
  <?php include('layout/header.php'); ?>


  <section class="lab_analysis">
    <div class="container-fuild">
      <h4 class="bottom-para">Empower Your Lab <br> One Device, Infinite Microscopy Possibilities </h4>
      <div class="row">
        <!-- Sidebar Tabs -->
        <div class="col-md-3 left-panel">
          <button class="tab-button active" onclick="showTab('one')">
            <div class="main-title">BLOOD</div>
          </button>
          <button class="tab-button" onclick="showTab('two')">
            <div class="main-title">URINE </div>
          </button>
          <button class="tab-button" onclick="showTab('three')">
            <div class="main-title">SEMEN</div>
          </button>

        </div>

        <!-- Content Area -->
        <div class="col-md-9 right-panel">
          <div id="one" class="tab-content">
            <img src="/images/product/blood.svg" alt="Blood">
          </div>
          <div id="two" class="tab-content d-none">
            <img src="/images/product/urine.svg">
          </div>
          <div id="three" class="tab-content d-none">
            <img src="/images/product/semen.svg">
          </div>

        </div>
      </div>
    </div>


  </section>

  <section class="blood-section">
  <div class=" container-fuild">
    <div class="row align-items-center">
      <!-- Left Section -->
      <div class="col-md-6">
        <h2 class="blood-title">Blood Analysis</h2>
        <p class="blood-description">
          Analyse the Peripheral Blood Smear with cutting-edge AI technology and make the diagnosis easier and faster
        </p>
      </div>

      <!-- Right Section -->
      <div class="col-md-6">
        <p class="text-muted mb-4">AI100 with <span style="color:red">Shonit</span> gives an accurate</p>

        <!-- Blood Findings -->
        <div class="row">
          <div class="col-6 finding">
            <img src="/assets/images/7part.png" alt="7-part">
            <div>
              <h6>7-part</h6>
              <small>DC</small>
            </div>
          </div>

          <div class="col-6 finding">
            <img src="/assets/images/nrbc.png" alt="NRBC">
            <div>
              <h6>NRBC</h6>
              <small>Flagging</small>
            </div>
          </div>

          <div class="col-6 finding">
            <img src="/assets/images/rbc.png" alt="RBC">
            <div>
              <h6>RBC</h6>
              <small>Characterization</small>
            </div>
          </div>

          <div class="col-6 finding">
            <img src="/assets/images/platelet.png" alt="Platelet">
            <div>
              <h6>Platelet</h6>
              <small>Estimation</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



  <section class="key_benefits">
    <div class="container text-center">
      <div class="benefits_title">Key Benefits & Features</div>
      <div class="row justify-content-center">
        <div class="col-md-3 feature-card">
          <img src="./images/acceleration 1.png" alt="">
          <h5>Accelerated Results</h5>
          <p>Get faster diagnostics with reduced turnaround time.</p>
        </div>
        <div class="col-md-3 feature-card">
          <img src="./images/cloud 1.png" alt="">
          <h5>Limitless Storage</h5>
          <p>Enjoy endless digital pathology storage, keeping all your data secure and accessible.</p>
        </div>
        <div class="col-md-3 feature-card">
          <img src="./images/market-demand 1.png" alt="">
          <h5>On-Demand Access</h5>
          <p>Access reports anytime, anywhere, for seamless workflow integration.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 feature-card">
          <img src="./images/diagnostic-tool 1.png" alt="">
          <h5>Enhanced Diagnostics</h5>
          <p>Simplify the identification of rare cases with advanced tools at your fingertips.</p>
        </div>
        <div class="col-md-3 feature-card">
          <img src="./images/collaborate 1.png" alt="">
          <h5>Collaborative Expertise</h5>
          <p>Enable remote collaboration on special cases, effortlessly bringing the best minds together.</p>
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
    jQuery('.stellarnav').stellarNav({
      theme: 'plain',
      breakpoint: 991,
      menuLabel: '',
      position: 'right',

    });
  </script>

  <script>
    function showTab(tabId) {
      document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('d-none'));
      document.getElementById(tabId).classList.remove('d-none');
      document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
      event.currentTarget.classList.add('active');
    }
  </script>
</body>

</html>