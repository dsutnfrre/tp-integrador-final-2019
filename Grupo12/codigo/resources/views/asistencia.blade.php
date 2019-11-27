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
                        <li class="nav-item">
                           <a href="{!!URL::to('/contacto')!!}" class="nav-link">Contacto</a>
                        </li>
                        <li class="nav-item dropdown active">
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
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Asistencia Técnica</h3>
               <p>puede comunicarse por Telefono, email, o ingrese su reclamo en el formulario y <br> lo estaremos atendiendo a la brevedad</p>
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
   <!--contact-form -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="agile-info-para">
               <form action="#" method="post">
                  <div class="row agile-wls-contact-mid">
                     <div class="col-md-8 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Apellido y Nombre" required="">
                     </div>   
                        <div class="col-md-4 form-group contact-forms">
                            <input type="text" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="DNI"maxlength="8"/>  
                        </div>                  
                  </div>
                  <div class="row agile-wls-contact-mid">
                        <div class="col-md-4 form-group contact-forms">
                                <input type="text" class="form-control" placeholder="Ciudad">
                        </div>
                        <div class="col-md-4 form-group contact-forms">
                                <input type="text" class="form-control" placeholder="Provincia" >
                        </div>
                        <div class="col-md-4 form-group contact-forms">
                                <input type="text" class="form-control" placeholder="País">
                        </div>
                  </div>
                  <div class="row agile-wls-contact-mid">
                        <div class="col-md-5 form-group contact-forms">
                                <input type="text" class="form-control" placeholder="Telefono" required="">
                        </div>   
                        <div class="col-md-7 form-group contact-forms">
                                <input type="email" class="form-control" placeholder="Email" required="">
                        </div>                     
                  </div>                 
                  <div class="row agile-wls-contact-mid">
                        <div class="col-md-4 form-group contact-forms">
                                <input type="number" class="form-control" placeholder="Número Producto">
                        </div>  
                        <div class="col-md-4 form-group contact-forms">
                            <select  class="form-control">
                                <option selected>Tipo Producto...</option>
                                <option>Termotanques</option>
                                <option>Calefones</option>
                            </select>     
                        </div>                        
                  </div>
                  
                  
                </div>
                  <div class="form-group contact-forms">
                     <textarea class="form-control" rows="3" placeholder="Descripción del problema..." required=""></textarea>
                  </div>
                  <div class="row agile-wls-contact-mid">
                        <div class="col-md-6 form-group contact-forms">
                            
                            <button type="submit" class="btn contact-btn" data-toggle="modal" data-target="#myModal">Enviar Formulario</button>
                        </div>
                        <div class="col-md-6 form-group contact-forms">
                            <button type="submit" class="btn contact-btn" onclick="window.location.href='{!!URL::to('/')!!}'">Cancelar Formulario</button>

                        </div>
                  </div>
                  
                 
               </form>
            </div>
         </div>
      </section>
   <!--//contact-form-->
   
   </body>
   <!-- The Modal -->
   <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Solicitud Enviada</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
             Su solicitud ah sido enviada, a la brevedad nos estaremos comunicando.Gracias
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.location.href='{!!URL::to('/asistencia')!!}'">Cerrar</button>
            </div>

          </div>
        </div>
      </div>
</html>
@stop