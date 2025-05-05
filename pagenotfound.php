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
             
             <button class="boton-elegante btn-sm" onclick="window.location.href='/'">Home</button></li>

            </div>
         </div>
      </section>
<?php
$content = ob_get_clean();

include __DIR__ . '/layout/main.php';