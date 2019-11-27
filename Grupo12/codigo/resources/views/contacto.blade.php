@extends('layouts.principal')
@section('content2')
                  <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                     <ul class="navbar-nav nav-pills nav-fill">
                        <li class="nav-item">
                           <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                           <a href="{!!URL::to('/productos')!!}" class="nav-link">Productos</a>
                        </li>
                        <li class="nav-item">
                           <a href="{!!URL::to('/nosotros')!!}" class="nav-link ">Nosotros</a>
                        </li>                        
                        <li class="nav-item active">
                           <a href="{!!URL::to('/contacto')!!}" class="nav-link">Contacto</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Asistencia Técnica
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{!!URL::to('/asistencia')!!}">Solicitar asistencia</a>
                              <a class="dropdown-item" href="{!!URL::to('/preguntas')!!}">Preguntas Frecuentes</a>
                              <a class="dropdown-item" href="{!!URL::to('/manuales')!!}">Manuales</a>
                           </div>
                        </li>
                     </ul>
                  </div>
@endsection
@section('content1')
   <!-- banner -->
      <div class="inner_page-banner one-img"></div>
   <!--//banner -->
   
@endsection
@section('content')
   <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Contacto</h3>
               <p>Esperamos tu consulta</p>
            </div>
            <!--contact-form-->
            <div class="row contact-right mt-lg-5 mt-md-4 mt-3">
               <div class="col-lg-4 col-md-5 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-map-marker-alt"></span>
                  </div>
                  <p>Browm 687, Resistencia, <br>Chaco, Argentina.</p>
               </div>
               <div class="col-lg-4 col-md-3 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-phone-volume"></span>
                  </div>
                  <p>+(054) 362 4565 32<br>+(054) 362 455 354</p>
               </div>
               <div class="col-lg-4 col-md-4 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-at"></span>
                  </div>
                  <p><a href="mailto:info@example.com">maxelec@gmail.com</a> 
                  </p>
               </div>
            </div>
         </div>
      </section>
   <!--contact-map -->
      <section>
         <div class="container-fluid">
            <div class="contact-form ">
               <div class="address_mail_footer_grids">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3540.4642719154763!2d-58.98073318494338!3d-27.454801982897113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1560893799490!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe> -->
               </div>
            </div>
         </div>
      </section>
   <!--//contact-map -->
   <!--contact-form -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="agile-info-para">
               <form action="#" method="post">
                  <div class="row agile-wls-contact-mid">
                     <div class="col-md-6 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Nombre" required="">
                     </div>
                     <div class="col-md-6 form-group contact-forms">
                        <input type="email" class="form-control" placeholder="Email" required="">
                     </div>
                  </div>
                  <div class="form-group contact-forms">
                     <textarea class="form-control" rows="3" placeholder="Escribe tu mensaje..." required=""></textarea>
                  </div>
                  <div class="text-left click-subscribe">
                     <button type="submit" class="btn contact-btn">Enviar</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
   <!--//contact-form-->
   
   </body>
</html>
@stop