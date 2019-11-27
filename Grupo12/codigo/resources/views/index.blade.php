@extends('layouts.principal')
@section('content2')
                  <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                     <ul class="navbar-nav nav-pills nav-fill">
                        <li class="nav-item active">
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
   <div class="slider">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info">
                              <h4 style="color:#373e5c;">¿Por qué se arrugan<br>los dedos en el agua?<span></span></h4>
                              <div class="outs_more-buttn">
                                 <a href="{!!URL::to('/contacto')!!}">Contactanos Ahora</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h4 style="color:#373e5c;">¿Por qué cantamos <br>mejor en la ducha? <span></span> </h4>
                              <div class="outs_more-buttn">
                                 <a href="{!!URL::to('/contacto')!!}">Contactanos Ahora</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
                              <h4 style="color:#373e5c;">Máxima Seguridad y ahorro de energía<br>Para disfrutarlo<span></span></h4>
                              <div class="outs_more-buttn">
                                 <a href="{!!URL::to('/contacto')!!}">Contactanos Ahora</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
         </div>
         <div class="clearfix"></div>
@endsection

@section('content')

      <!-- services -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Nuestros Productos</h3>
               <p>A la hora de elegir un equipo de agua caliente para tu hogar o comercio, es fundamental que contemples tus necesidades a fin de optar por el que brinde mayor rendimiento con menor consumo de energía</p>
            </div>
            <div class="row">
               <div class="col-lg-7 col-md-7 ser-grid-wthree">
                  <div class="sub-ser-matter-agile">
                     <h4>Termotanques</h4>
                  </div >
                  <div class="ser-service-mid mb-3">
                     <h5>a Gas, Electricos, Solares y más</h5>
                  </div>
                  <p>Lanzamos los primeros termotanques alta eficiencia del mercado, que conservan más tiempo el agua caliente, encendiendo menos veces. Ahorrando hasta un 35% más que un termotanque tradicional.        
                  </p>
                  <div class="outs_more-buttn">
                     <a href="{!!URL::to('/contacto')!!}">Contactanos Ahora</a>
                  </div>
               </div>
               <div class="col-lg-5 col-md-5 ser-left-img">
                  <img src="images/ss1.jpg" class="img-fluid" alt="">
               </div>
            </div>
            <div class="row mt-lg-4 mt-md-4 mt-sm-4 mt-3">
               <div class="col-lg-5 col-md-5 ser-left-img">
                  <img src="images/g5.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-lg-7 col-md-7 ser-grid-wthree">
                  <div class="sub-ser-matter-agile">
                     <h4>Calefones</h4>
                  </div >
                  <div class="ser-service-mid mb-3">
                     <h5>Sin Llama piloto</h5>
                  </div>
                  <p>nuestros calefones no poseen llama piloto, solo encienden al abrir la canilla. Ahorrando hasta un 30%.      
                  </p>
                  <div class="outs_more-buttn">
                     <a href="{!!URL::to('/contacto')!!}">Contactanos Ahora</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//services -->
<!-- About-one -->
   <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Nuestros Servicios!</h3>
               <p>Contamos con Servicios Técnicos especializados en nuestros productos distribuidos por todo el país.</p>
            </div>
            <div class="row abt-colm pb-lg-4 pb-md-3 pb-3 text-center">
              
               <div class="col-lg-6 col-md-6 ile-abt-info">
                  <div class="about-w3layouts-icons">
                     <span class="fas fa-cogs"></span>
                  </div>
                  <h4 class="my-md-3 my-2">Reparación</h4>
                  <div class="info-sub-w3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
                     </p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 ile-abt-info">
                  <div class="about-w3layouts-icons">
                     <span class="fab fa-accusoft"></span>
                  </div>
                  <h4 class="my-md-3 my-2">Mantenimiento</h4>
                  <div class="info-sub-w3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
                     </p>
                  </div>
               </div>
            </div>
            <!-- //About-one -->
         </div>
      </section>
      
      
      <!-- Video -->
      <section class="video py-lg-4 py-md-3 py-sm-3 py-3" >
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="video-info ">
               <p class="" style="color:#373e5c; font-size:27px;">Trabajamos día a día para optimizar cada vez más el consumo, y así cuidar tu bolsillo y el medio ambiente. 			   
               </p>
            </div>
            <div class="button text-center">
               <a href="#small-dialog1" class="play-icon popup-with-zoom-anim"><span class="fa fa-play-circle" aria-hidden="true"></span></a>			
            </div>
            <div id="small-dialog1" class="mfp-hide tree_pop">
               <div class="agileits_modal_body">
                  <iframe src="http://www.rheem.com.ar/tutoriales-termotanques#termo_elec"></iframe>
               </div>
            </div>
         </div>
      </section>
      <!--//Video -->
      <!-- Team-->
      <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="testimonials">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Equipo de profesionales</h3>
               <p >Contamos con un excelente equipo de profesionales<br> con el objetivo de  brindar la mejor atención y servicio de mantenimiento y reparaciones</p>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t1.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3"  style="color:#259c84;">Equipo de Post Venta </h4>
                                 <p>Encargados de brindar buena atención y seguimiento de su satisfaccion con nuestros productos.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t2.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3"  style="color:#259c84;">Equipo de Servicio Tecnico</h4>
                                 <p>velit sagittis vehicula. Duis posuere 
                                    ex in mollis iaculis. Suspendisse tincidunt 
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t3.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3" style="color:#259c84;">Gerencia</h4>
                                 <p>velit sagittis vehicula. Duis posuere 
                                    ex in mollis iaculis. Suspendisse tincidunt 
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                
               </div>
            </div>
         </div>
      </section>
      <!--//clients -->
      
@endsection