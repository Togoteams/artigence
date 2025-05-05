<?php
$pageTitle = 'Home | Career';
ob_start(); ?>
<section class="career-sec py-5 bg-light">
  <div class="container-fuild">
    <div class="text-center mb-5">
      <h1 class="mb-3  fw-bold">Join Artigence Healthcare</h1>
      <p class="lead text-muted">
        We are on a mission to bring innovation to every corner of the healthcare world—innovation that drives meaningful impact and makes great business sense.
      </p>
      <p class="text-muted">
        If this excites you, we’d love to welcome you aboard.
      </p>
    </div>

    <div class="opening_list p-4 bg-white rounded shadow-sm text-center">
      <h2 class="mb-3 text-secondary">Current Job Openings</h2>
      <p class="mb-4 text-muted">
        Currently, there are no openings available. We’ll update this page as soon as new opportunities arise.
      </p>
      <button href="https://www.linkedin.com/company/artigence-healthcare" class="boton-elegante btn-sm" target="_blank">
        Visit our LinkedIn for Updates
      </button>
    </div>
  </div>
</section>

<?php
$content = ob_get_clean();

include __DIR__ . '/layout/main.php';