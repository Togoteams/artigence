<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.svg" alt="Logo" class="logo-img">
      </a>

      <!-- Hamburger Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
        aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav align-items-lg-center">
            <li class="nav-item">
            <a class="nav-link <?php if($current=='index.php') echo 'active'; ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($current=='product.php') echo 'active'; ?>" href="product.php">Products</a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link <?php if($current=='career.php') echo 'active'; ?>" href="career.php">Career</a>
          </li>
     
          <li class="nav-item ms-lg-3">
            <a class="btn btn-contact" href="contact.php">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
