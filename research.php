<?php
$pageTitle = 'Home | Research';
ob_start(); ?>
    <section class="news_banner">
        <img src="./images/News.png" alt="news_img">
      </section>
<?php
$content = ob_get_clean();

include __DIR__ . '/layout/main.php';