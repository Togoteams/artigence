<?php
$pageTitle = 'Artigence | Product';
ob_start(); ?>
<link rel="stylesheet" href="css/product.css" type="text/css">

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
    background: linear-gradient(301deg, transparent, #0079ca);
    border: none;
    color: #fff;
    text-align: left;
    padding: 1rem;
    height: 5rem;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
    transition: background 0.3s ease;
  }


  .tab-button.active,
  .tab-button:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px var(--primary-color);
    border: none;
  }

  .tab-content img {
    max-width: 100%;
    border-radius: 10px;
    height: 18rem;
  }

  .left-panel {
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

  .highlight-section {
    animation: pulse-highlight 1.5s ease-out;
  }
</style>


<section class="hero_sec p-4">
        <div class="container-fuild hero-content">
            <h1>
               Empower Your Lab
            </h1>
            <div>
                <h4 class="subtitle">One Device, Infinite Microscopy Possibilities</h4>
            </div>
            <!-- <a href="">CONTACT US</a> -->
        </div>
    </section>
<section class="lab_analysis mt-5 ">
  <div class="container-fuild">
    <div class="row">
      <!-- Sidebar Tabs -->
      <div class="col-md-3 left-panel">
        <button class="tab-button mb-4 active" onclick="showTab('one')">
          <div class="main-title">BLOOD</div>
        </button>
        <button class="tab-button mb-4" onclick="showTab('two')">
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
          <div>
            <button href="#blood-analysis" class="boton-elegante btn-sm mt-3"
              onclick="scrollToSection(event, 'blood-analysis')">Read More</button>

          </div>


        </div>
        <div id="two" class="tab-content d-none">
          <img src="/images/product/urine.svg">
          <div>
            <button href="#urine-analysis" class="boton-elegante btn-sm mt-3"
              onclick="scrollToSection(event, 'blood-analysis')">Read More</button>
          </div>


        </div>
        <div id="three" class="tab-content d-none">
          <img src="/images/product/semen.svg">
          <div>
            <button href="#semen-analysis" class="boton-elegante btn-sm mt-3"
              onclick="scrollToSection(event, 'blood-analysis')">Read More</button>
          </div>


        </div>

      </div>
    </div>
  </div>


</section>

<section class="blood-section mt-4" id="blood-analysis">
  <div class="container-fuild">
    <div class="row align-items-center">
      <!-- Left Section -->
      <div class="col-md-12">
        <h2 class="blood-title"><span class="blood-title-span">Blood Analysis</span></h2>
        <p class="blood-description">
          Analyse the Peripheral Blood Smear with cutting-edge AI technology and make the diagnosis easier and faster
        </p>
      </div>
      <!-- Right Section -->
      <div class="col-md-12">
        <div class="blood-finding-section">
          <div class="row">
            <div class="col-md-4">
              <h3 class="blood-finding-section-text"> Blood Findings</h3>
            </div>
            <div class="col-md-8">

              <div class="row">
                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="7-part">
                    <h6>RBC Morphological Analysis</h6>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="NRBC">
                    <h6>WBC 5-Part Differential Count</h6>

                  </div>
                </div>

                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="RBC">
                    <h6>WBC Morphological Analysis</h6>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="Platelet">
                    <h6>Platelet Clumping Detection</h6>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="Platelet">
                    <h6>Malaria Species Detection</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="blood-section mt-4" id="urine-analysis">
  <div class="container-fuild">
    <div class="row align-items-center">
      <!-- Left Section -->
      <div class="col-md-12">
        <h2 class="blood-title">Urine Analysis</h2>
        <p class="blood-description">
          Elevate the Urine Microscopic Analysis with our state-of-the-art AI technology
        </p>
      </div>

      <!-- Right Section -->
      <div class="col-md-12">
        <div class="blood-finding-section">
          <div class="row">
          <div class="col-md-4">
              <h3 class="blood-finding-section-text">Urine Findings</h3>
            </div>
            <div class="col-md-8">
              <!-- Unrine Findings -->
              <div class="row">
                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="7-part">
                    <h6>RBC</h6>
                  </div>
                </div>
  
                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="NRBC">
                    <h6>Epithelial Cells</h6>
  
                  </div>
                </div>
  
                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="RBC">
                    <h6>Casts</h6>
                  </div>
                </div>
  
                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="Platelet">
                    <h6>WBC</h6>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 finding">
                  <div class="finding-content">
                    <img src="/images/product/rbc-analysis.png" alt="Platelet">
                    <h6>Crystals</h6>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="blood-section mt-4" id="semen-analysis">
  <div class="container-fuild">
    <div class="row align-items-center">
      <!-- Left Section -->
      <div class="col-md-12">
        <h2 class="blood-title">Semen Analysis</h2>
        <p class="blood-description">
          Get comprehensive insights on the Semen Samples with robust AI technology
        </p>
      </div>

      <!-- Right Section -->
      <div class="col-md-12">
        <div class="blood-finding-section">
        <div class="row">
          <div class="col-md-4">
            <h3 class="blood-finding-section-text">Semen Findings</h3>
          </div>
          <div class="col-md-8">
              <!-- Blood Findings -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-lg-3 finding">
            <div class="finding-content">
              <img src="/images/product/rbc-analysis.png" alt="7-part">
              <h6>Sperm Count</h6>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-lg-3 finding">
            <div class="finding-content">
              <img src="/images/product/rbc-analysis.png" alt="NRBC">
              <h6>Sperm Motility</h6>

            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-lg-3 finding">
            <div class="finding-content">
              <img src="/images/product/rbc-analysis.png" alt="RBC">
              <h6>Sperm Defects</h6>
            </div>
          </div>


        </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="key_benefits">
  <div class="container-fuild text-center">
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
<script>
  function showTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('d-none'));
    document.getElementById(tabId).classList.remove('d-none');
    document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
    event.currentTarget.classList.add('active');
  }
</script>
<script>
  function scrollToSection(event, id) {
    event.preventDefault(); // prevent default anchor behavior
    const section = document.getElementById(id);
    if (section) {
      section.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
      section.classList.add('highlight-section');
      setTimeout(() => section.classList.remove('highlight-section'), 1500);
    }
  }
</script>
<?php
$content = ob_get_clean();

include __DIR__ . '/layout/main.php';