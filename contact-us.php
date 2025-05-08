<?php
$pageTitle = 'Home | Contact Us';
ob_start(); ?>
<div class="contacus_wrapper">

   <section class="hero_contact">

      <div class="container-fuild">
         <div class="contact_header">
            <h1>Want to connect with us</h1>
            <p>Message us to learn more about how we are using AI in Healthcare to make an impact.</p>
         </div>
      </div>

   </section>


   <section class="reach_us">



      <div class="container-fuild">

         <div class="row align-items-center">
            <div class="col-md-6">
               <div class="contact-details">
                  <div>
                     <h2>Reach Us</h2>
                     <p>Email us at : info@artigence.ai</p>
                  </div>

                  <ul class="reach_us_list">
                     <li>
                        <h3>Registered Office
                        </h3>
                        <p>Plot No. 14/1, Serial No. UGF 14, Shree Ganesh Chamber, Dhantoli, Nagpur, Maharashtra -
                           440012
                           Ger Direction</p>
                     </li>

                     <li>
                        <h3>Operating Office
                        </h3>
                        <p> Mazumdar Shaw Medical Foundation, 258/A, Hosur Road, Bommasandra Industrial Area, Bengaluru,
                           Karnataka - 560099</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-6">
               <div class="get_in_touch contact_us">
                  <div>
                     <h2>get in touch</h2>
                     <p>Want to know more about Artigence Healthcare</p>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <form class="row">
                           <div class="col-6"><input type="text" placeholder="First Name"></div>
                           <div class="col-6"><input type="text" placeholder="Last Name"></div>
                           <div class="col-6"><input type="email" placeholder="Email"></div>
                           <div class="col-6"><input type="text" placeholder="Phone Number"></div>
                           <div class="col-6"><input type="text" placeholder="Organization"></div>
                           <div class="col-6"><input type="text" placeholder="Subject"></div>
                           <div class="col-12"><textarea name="" id="" placeholder="Message"></textarea></div>
                           <div class="col-12 text-center">
                              <button type="button" class="boton-elegante">Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>

               </div>
            </div>



         </div>
         <div class="row">
            <div class="col-lg-12 mt-4">
               <div class="map-header p-2 mt-2">
                 <h2>
                 Find Us
                 </h2>
               </div>
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1035.7398061477384!2d79.07775546960286!3d21.136675049663094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c1645a276467%3A0x378a08acab23e0d2!2sHealthCare%20Systems!5e1!3m2!1sen!2sin!4v1746173315975!5m2!1sen!2sin"
                  width="100%" height="450" style="border:0; border-radius:20px" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>

      </div>

   </section>

</div>

<?php
$content = ob_get_clean();

include __DIR__ . '/layout/main.php';