<?php
$pageTitle = 'Home | Research';
ob_start(); ?>
     <section class="page_not_found">
         <div class="container">
            <img src="./images/404.svg" alt="404_img">
            <div class="url">
             artigence.ai/books
            </div>
            <div class="home-button">
             <a class="btn btn-primary" href="/">
              Home
             </a>
            </div>
         </div>
      </section>
<?php
$content = ob_get_clean();

include __DIR__ . '/layout/main.php';