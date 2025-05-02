<?php
$pageTitle = 'Home | Career';
ob_start(); ?>
 <section class="career-sec">

<div class="container-fuild">
    <p>Artigence Healthcare is a place where we want to bring innovations to every corner of the healthcare world. Innovations that make great business too. </p>
    <span>If you find this interesting, we would love to have you onboard.</span>

    <div class="opening_list">
      <h2>Current Job Openings</h2>
      <p>Currently, there are no openings available. We’ll update this page as soon as new opportunities arise. In the meantime, you can visit our LinkedIn page for updates.</p>
    </div>
</div>

</section>
<?php
$content = ob_get_clean();

include __DIR__ . '/layout/main.php';