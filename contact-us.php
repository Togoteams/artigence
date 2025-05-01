<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="css/stellarnav.min.css" type="text/css">
      <link rel="stylesheet" href="css/style.css" type="text/css">
      <link rel="stylesheet" href="css/responsive.css" type="text/css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"  />
      <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
      <title>Contact us</title>
   </head>
   <body>
   <?php include('layout/header.php'); ?>

      <div class="contacus_wrapper">

         <section class="hero_contact">

            <div class="container">
               <div class="contact_header">
                  <h1>Want to connect with us</h1>
                  <p>Message us to learn more about how we are using AI in Healthcare to make an impact.</p>
                  <img src="images/blue_arrow.svg" alt="" class="position_img">
               </div>


               <div class="get_in_touch contact_us">
                  <h2>get in touch</h2>
                  <p>Want to know more about Artigence Healthcare</p>

                  <form class="row">
                     <div class="col-6"><input type="text" placeholder="First Name"></div>
                     <div class="col-6"><input type="text" placeholder="Last Name"></div>
                     <div class="col-12"><input type="text" placeholder="Organization"></div>
                     <div class="col-12"><input type="email" placeholder="Email"></div>
                     <div class="col-12"><input type="text" placeholder="Phone Number"></div>
                     <div class="col-12"><input type="text" placeholder="Subject"></div>
                     <div class="col-12"><textarea name="" id="" placeholder="Message"></textarea></div>
                     <div class="col-12">
                        <input type="submit" class="boton-elegante btn-sm" value="submit">
                     </div>
                  </form>
               </div>
            </div>
            
         </section>


         <section class="reach_us">

            <h2>Reach Us</h2>
            <p><img src="images/msg_icon.svg" alt="">Email us at : info@artigence.ai</p>

            <div class="container">

               <div class="row align-items-center">
                  <div class="col-lg-7">
                     <div id="map"></div>
                  </div>

                  <div class="col-lg-5">
                     <ul class="reach_us_list">
                        <li><h3>Maharashtra
                          </h3><p> Registered Office: Plot No. 14/1, Serial No. UGF 14, Shree Ganesh Chamber, Dhantoli, Nagpur, Maharashtra - 440012
                           Ger Direction</p><a href="">Ger Direction</a></li>

                           <li><h3>Karnataka
                           </h3><p>Incubated At: Mazumdar Shaw Medical Foundation, 258/A, Hosur Road, Bommasandra Industrial Area, Bengaluru,
                              Karnataka - 560099</p><a href="">Ger Direction</a></li>
                     </ul>
                  </div>
               </div>

            </div>

         </section>

      </div>


      <?php include('layout/footer.php'); ?>

      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/stellarnav.min.js"></script>
      <script>
          jQuery('.stellarnav').stellarNav({
         theme: 'plain',
         breakpoint: 991,
         menuLabel: '',
         position: 'right',
         
         });
         
         $('#part_slide').owlCarousel({
         loop:true,
         autoplay:true,
         autoplayTimeout:2000,
         smartSpeed:2000,
         autoplayHoverPause:true,
         margin:50,
         nav:false,
         dots:false,
         responsive:{
         0:{
          items:1
         },
         600:{
          items:3
         },
         1000:{
          items:5
         }
         }
         });
         
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTtsEnlb1cYJ9lpaJZIkJ2jaBgHsn2e30"></script>
      <script>
         function initMap() {
            var mapOptions = {
                  center: new google.maps.LatLng(25.940577, 50.2579348),
                  zoom: 8,
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
         }
         google.maps.event.addDomListener(window, 'load', initMap);
      </script>
   </body>
</html>