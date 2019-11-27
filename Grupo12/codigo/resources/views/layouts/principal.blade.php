<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>MAXELEC.SA</title>
      <!--meta tags -->

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Renovate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      
      <!--//meta tags ends here-->
      <!--booststrap-->
      {!!Html::style('css/bootstrap.min.css')!!}
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"> -->
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      {!!Html::style('css/fontawesome-all.min.css')!!}
      <!-- <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all"> -->
      <!-- //font-awesome icons -->
      {!!Html::style('css/popup-box.css')!!}
      <!-- <link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" /> -->
      <!-- //pop-ups-->
      {!!Html::style('css/style.css')!!}
      <!-- <link href="css/style.css" rel='stylesheet' type='text/css' media="all"> -->
      <!--//stylesheets-->
      {!!Html::style('//fonts.googleapis.com/css?family=Raleway:400,500,600')!!}
      {!!Html::style('//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700')!!}
      <!-- <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet"> -->
      <!-- <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"> -->
   </head>
   <body>
      <div class="header-outs" id="header">
         <div class="header-w3layouts" style="background: rgba(107, 104, 104, 0.5607843137254902);">
            <div class="container-fluid">
               <div class="row headder-contact" style="background: #3b3bb1;" >
                     <div class="hedder-up col-lg-12 col-md-8 col-sm-6" style="text-align: left;">
                        <h1><a class="navbar-brand" href="{!!URL::to('/')!!}">MAXELEC.SA</a></h1>
                        </div> 
                        <div class="hedder-up  col-lg-8 col-md-8 col-sm-6" style="text-align: left;">
                           <h6 style="color: #c7cace;">Termotanques y Calefones</h6>
                        </div>
                        <div class="hedder-up  col-lg-4 col-md-4 col-sm-6" style="text-align: right;">
                           <a style="color: #c7cace;" href="{!!URL::to('/log')!!}">Acceder</a> 
                        </div>
                                                                  
               </div>
               <nav class="navbar navbar-expand-lg navbar-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  @yield('content2')
               </nav>
               <div class="clearfix"> </div>
            </div>
         </div>         
         @Yield('content1')
      </div>
      @Yield('content')
      <!--footer-->
      <footer class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
         <section>
                        <div class="icons mt-lg-4 mt-3 text-center">
                           <ul>
                              <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                              <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                              <li><a href="#"><span class="fas fa-rss"></span></a></li>
                              <li><a href="#"><span class="fab fa-vk"></span></a></li>
                           </ul>
                        </div>
         </section>
      </footer>
      <div class="copy-agile-right text-center py-3">
         <h2 class="my-3"><a href="{!!URL::to('/index')!!}">MAXELEC.sa</a></h2>
         <p> 
            © 2019 MAXELEC Todos los derechos Reservados | Diseñado por <a href="http://www.W3Layouts.com" target="_blank">Equipo de Diseño de Sistemas</a>
         </p>
      </div>
      <!--//footer-->
      <!--js working-->
      {!!Html::script('js/jquery-2.2.3.min.js')!!}
      <!-- <script src='js/jquery-2.2.3.min.js'></script> -->
      <!--//js working--> 
      <!--responsiveslides banner-->
      {!!Html::script('js/responsiveslides.min.js')!!}
      <!-- <script src="js/responsiveslides.min.js"></script> -->
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->		  
      <!--About OnScroll-Number-Increase-JavaScript -->
      {!!Html::script('js/jquery.waypoints.min.js')!!}
      {!!Html::script('js/jquery.countup.js')!!}
      <!-- <script src="js/jquery.waypoints.min.js"></script> -->
      <!-- <script src="js/jquery.countup.js"></script> -->
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!--pop-up-box video-->
      {!!Html::script('js/jquery.magnific-popup.js')!!}
      <!-- <script src="js/jquery.magnific-popup.js"></script> -->
      <script>
         $(document).ready(function() {
         $('.popup-with-zoom-anim').magnificPopup({
         type: 'inline',
         fixedContentPos: false,
         fixedBgPos: true,
         overflowY: 'auto',
         closeBtnInside: true,
         preloader: false,
         midClick: true,
         removalDelay: 300,
         mainClass: 'my-mfp-zoom-in'
         });
         
         });
      </script>
      <!-- //pop-up-box video -->
      <!-- start-smoth-scrolling -->
      {!!Html::script('js/move-top.js')!!}
      {!!Html::script('js/easing.js')!!}
      <!-- <script src="js/move-top.js"></script> -->
      <!-- <script src="js/easing.js"></script> -->
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      {!!Html::script('js/bootstrap.min.js')!!}
      <!-- <script src="js/bootstrap.min.js"></script> -->
      <!-- //bootstrap working-->
   </body>
</html>