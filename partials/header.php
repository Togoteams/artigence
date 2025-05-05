<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
      <div class="container-fuild" style="margin-left:200px;margin-right:200px">
         <div class="row align-items-center">
            <div class="col-md-3 col-sm-4 col-6">
               <div class="logo">
                  <a href="index.php">
                     <img src="./images/logo-symbol.svg" alt="logo" class="logo-img">
                  </a>
               </div>
            </div>
            <div class="col-md-9 col-sm-8 col-6">
               <div class="stellarnav">
                  <ul>
                     <li><a class="nav-link <?= ($currentPage == 'product.php') ? 'active' : '' ?>" href="product.php">PRODUCTS</a></li>
                     <li><a class="nav-link  <?= ($currentPage == 'research.php') ? 'active' : '' ?>" href="research.php">RESEARCH</a></li>
                     <li><a class="nav-link <?= ($currentPage == 'career.php') ? 'active' : '' ?>" href="career.php">CAREER</a></li>
                     <li><a class="nav-link <?= ($currentPage == 'news.php') ? 'active' : '' ?>" href="news.php">NEWS </a></li>
                     <li>
                        <div class="button-section">
                           <button class="boton-elegante btn-sm" onclick="window.location.href='contact-us.php'">Contact us</button></li>
                        </div>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </header>