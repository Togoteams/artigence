<?php
$pageTitle = 'Home | Research';
ob_start(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<section class="news-banner-section py-5 d-flex align-items-center justify-content-center">
  <div class="container text-center">
    <div class="coming-soon-box shadow p-4 rounded-4 bg-white animate__animated animate__fadeInUp">
      <img src="./images/coming-soon-focus.svg" alt="Coming Soon" class="img-fluid mb-4" style="max-width: 120px;">
      <h1 class="display-6 fw-semibold text-dark">We're Working on Something Awesome!</h1>
      <p class="lead text-muted">Exciting features are on the way. Stay tuned!</p>
    </div>
  </div>
</section>

<?php
$content = ob_get_clean();

include __DIR__ . '/layout/main.php';