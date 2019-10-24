<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Elevator Engineers LTD.</title>
      <link href="/fontEnd/css/bootstrap.min.css" rel="stylesheet">
      <link href="/fontEnd/css/font-awesome.min.css" rel="stylesheet">
      <link href="/fontEnd/css/animate.min.css" rel="stylesheet">
      <link href="/fontEnd/css/jquery.fancybox.css" rel="stylesheet">
      <link href="/fontEnd/css/owl.carousel.css" rel="stylesheet">
      <link href="/fontEnd/css/style_1.css" rel="stylesheet">
      <link rel="shortcut icon" href="/fontEnd/images/ico/logo2.png">
   </head>
   <body>

   <!-- Loader -->
   <div id="loader">
      <div class="centrize">
         <div class="v-center">
            <div id="mask"> <span></span> <span></span> <span></span> <span></span> <span></span> </div>
         </div>
      </div>
   </div>
   <!--/#Loader -->

   <!-- Back-To-Top -->
   <div class="container"> <a href="#" class="back-to-top text-center" style="display: inline;"> <i class="fa fa-angle-up"></i> </a> </div>
   <!--/#Back-To-Top-->
   @include('include.navbar')
   @include('include.slider')
            @yield('content')

         <!-- Footer -->
            <footer id="footer-top">
               <div class="container">
                  <div class="row  wow fadeInDown">
                     <div class="col-md-4 col-sm-4 col-xs-12 footer-box">
                        <h3>Opening Hours</h3>
                        <ul class="news-letter">
                           <li>
                              <p class="first-time">Monday - Friday<i class="fa fa-clock-o"><span>06.30 - 21.00</span></i></p>
                           </li>
                           <li>
                              <p class="first-time">Monday - Friday<i class="fa fa-clock-o"><span>06.30 - 21.00</span></i></p>
                           </li>
                           <li>
                              <p class="first-time">Monday - Friday<i class="fa fa-clock-o"><span>06.30 - 21.00</span></i></p>
                           </li>
                           <li>
                              <input type="search" placeholder="E-mail" class="subscibe">
                              <input type="submit" class="subbutton" value="Subscribe">
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-2 col-sm-2 col-xs-12 footer-box">
                        <h3>Our Services</h3>
                        <ul class="links">
                           <li><a href="#">Diagnostic Services</a></li>
                           <li><a href="#">Inspection Services</a></li>
                           <li><a href="#">All Performance</a></li>
                           <li><a href="#">Oil Quailty Repair</a></li>
                           <li><a href="#">Engine Mentinance</a></li>
                           <li><a href="#">Sespention</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3 col-sm-3 col-xs-12 footer-box">
                        <div class="unborder"><img  src="{{asset('fontEnd/images/logo2.png')}}" class="img-responsive" alt="logo"></div>
                        <ul class="adress">
                           <li>
                              <h4>Address</h4>
                           </li>
                           <li><i class="fa fa-map-marker"></i> 301,Auto Repair, United States</li>
                           <li>
                              <h4>Phone</h4>
                           </li>
                           <li><i class="fa fa-phone-square"></i>+0123 456 70 90 / +0123 456 70 90</li>
                           <li>
                              <h4>Email</h4>
                           </li>
                           <li><i class="fa fa-envelope-o"></i> <a href="#"> example@autrepair.com</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </footer>
            <div class="copyright dark">
               <div class="container">
                  <div class="row wow fadeInDown">
                     <div class="col-sm-12 text-center">
                        <p>&copy; 2019 <a target="_blank" href="#" title="Auto Repair HTML templates">Auto Repair</a>.
                           All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
      <!-- Go to top -->
      <script src="/fontEnd/js/jquery-2.1.4.js"></script>
      <script src="/fontEnd/js/bootstrap.min.js"></script>
      <script src="/fontEnd/js/jquery.fancybox.js"></script>
      <script src="/fontEnd/js/owl.carousel.min.js"></script>
      <script src="/fontEnd/js/viedobox_video.js"></script>
      <script src="/fontEnd/js/jquery.easing.min.js"></script>
      <script src="/fontEnd/js/hoverintent.min.js"></script>
      <script src="/fontEnd/js/jquery.mixitup.min.js"></script>
      <script src="/fontEnd/js/wow.min.js"></script>
      <script src="/fontEnd/js/main.js"></script>
      <script type="text/javascript">
         $(function () {

            var filterList = {

               init: function () {

                  // MixItUp plugin
                  // http://mixitup.io
                  $('#portfoliolist').mixitup({
                     targetSelector: '.portfolio',
                     filterSelector: '.filter',
                     effects: ['fade'],
                     easing: 'snap',
                     // call the hover effect
                     onMixEnd: filterList.hoverEffect()
                  });

               },

               hoverEffect: function () {

                  // Simple parallax effect
                  $('#portfoliolist .portfolio').hover(
                          function () {
                             $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                             $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                          },
                          function () {
                             $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                             $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                          }
                  );

               }

            };

            // Run the show!
            filterList.init();


         });
      </script>
   </body>
</html>
