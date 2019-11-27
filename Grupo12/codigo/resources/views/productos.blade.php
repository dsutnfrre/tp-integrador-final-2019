@extends('layouts.principal')
@section('content2')
                  <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                     <ul class="navbar-nav nav-pills nav-fill">
                        <li class="nav-item">
                           <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item active">
                           <a href="{!!URL::to('/productos')!!}" class="nav-link">Productos</a>
                        </li>
                        <li class="nav-item">
                           <a href="{!!URL::to('/nosotros')!!}" class="nav-link ">Nosotros</a>
                        </li>                        
                        <li class="nav-item">
                           <a href="{!!URL::to('/contacto')!!}" class="nav-link">Contacto</a>
                        </li>
                        <li class="nav-item dropdown ">
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
    <!--Gallery-->
         <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
               <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                  <h3 class="title mb-md-4 mb-sm-3 mb-3">Nuestros Productos</h3>
                  <p>Te ofrecemos Máxima seguridad, fácil instalación<br>y gran ahorro de energía</p>
               </div>
               <div class="row grid gallery-info">
                  <div class="col-lg-8 col-md-8 col-sm-8 gallery-grids">
                     <figure class="effect-apollo">
                        <img src="images/g1.jpg" alt="img15"/>
                        <figcaption>
                           <h6>Termotanques <span>solares</span></h6>
                           <p>Hasta un 80% de ahorro de 300 lts  para 1 a 7 usuarios</p>
                              <div class="outs_more-buttn">
                                 <a href="{!!URL::to('/info')!!}">+ Info</a>
                              </div>                          
                        </figcaption>
                     </figure>                     
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 gallery-grids">
                     <figure class="effect-apollo">
                        <img src="images/g2.jpg" alt="img15"/>
                        <figcaption>
                           <h6>Termotanques <span>a gas</span></h6>
                           <p>Comparación con termotanques con aislación de lana de vidrio: 35% de ahorro en calentamiento de agua, según norma NAG 314.</p>
                              <div class="outs_more-buttn">
                                 <a href="{!!URL::to('/info')!!}">+ Info</a>
                              </div> 
                           </a>
                        </figcaption>
                     </figure>
                  </div>
               </div>
               <div class="row grid gallery-info">
                  <div class="col-lg-4 col-md-4 col-sm-4 gallery-grids">
                     <figure class="effect-apollo">
                        <img src="images/g3.jpg" alt="img15"/>
                        <figcaption>
                           <h6>Calefones</h6>
                           <p>Sin llama piloto - 30%d de ahorro.</p>
                              <div class="outs_more-buttn">
                                 <a href="{!!URL::to('/info')!!}">+ Info</a>
                              </div> 
                           </a>
                        </figcaption>
                     </figure>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 gallery-grids">
                     <figure class="effect-apollo">
                        <img src="images/g4.jpg" alt="img15"/>
                        <figcaption>
                           <h6>Termotanques <span>Eléctricos</span></h6>
                           <p>Alta Eficiencia Energética - Conservan más tiempo el agua caliente encendiendo menos veces.</p>
                              <div class="outs_more-buttn">
                                 <a href="{!!URL::to('/info')!!}">+ Info</a>
                              </div> 
                           </a>
                        </figcaption>
                     </figure>
                  </div>
               </div>
               
            </div>
         </section>
   <!--//Gallery-->	  
  
@stop