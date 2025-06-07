<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artigence|Research</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

  <!-- Custom Styles & Fonts -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/stellarnav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/responsive.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet"> 

  <style>
     body {
     font-family: var(--font-family);
      /* color: #555; */
    }
    .navbar-custom {
      padding: 15px 40px;
    }
    .nav-link {
      color: #5a5a5a !important;
      font-weight: 400;
      margin-right: 25px;
    }
    .nav-link.active {
      color: #005377 !important;
    }
    h5.art {
    font-size: 22px !important;
    font-style: unset;
    font-weight: 700;
    line-height: 1.2;
}
    .btn-contact {
      background-color: #007bcd;
      color: white;
      font-weight: 600;
      border-radius: 30px;
      padding: 8px 25px;
    }
    .logo-img {
      height: 60px;
    }
    .navbar-toggler {
      border: none;
    }
    .navbar-toggler:focus {
      box-shadow: none;
    }
    .navbar-nav .nav-item {
      margin-top: 10px;
      margin-bottom: 10px;
    }
    @media (min-width: 992px) {
      .navbar-nav .nav-item {
        margin: 0;
      }
    }
  </style>
</head>
<body>

<!-- Responsive Navbar -->
<?php include 'include/navbar.php' ?>

<!-- News Image Section -->
<!-- Coming Soon Section -->
<section class="py-5 text-center" style="background-color: #fff;">
  <div class="container">
    <img src="images/coming-soon-focus.svg" alt="Working on something" class="img-fluid mb-4" style="max-width: 120px;">
    <h2 class="fw-bold text-dark">We're Working on Something Awesome!</h2>
    <p class="text-muted fs-5 mt-2">Exciting features are on the way. Stay tuned!</p>
  </div>
</section>


<!-- Footer -->
<?php include 'include/footer.php' ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
