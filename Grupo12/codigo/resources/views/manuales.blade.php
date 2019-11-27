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
<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Manuales y videos  tutoriales</h3>
            </div>
            <div class="row">
                <div class="col-lg-12 w3layouts-right-side-img">
                    <div class="row mt-lg-3 mt-md-2 mt-2">
                        <div class="col-lg-12 col-md-8 col-sm-5 text-left about-inner-icon"> 
                            <span class="far fa-hand-point-right" style="padding-top: 15px;">  
                                 
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse01" aria-expanded="true" aria-controls="collapse01" class="collapsed" style="color:#3b3bb1; fot-size:20px;">
                                Manuales de termotanques electricos
                                </a>
                            </span>
                            <div id="collapse01" class="collapse" role="tabpanel" aria-labelledby="heading01" style="height: 0px;">
                                <div class="card-block">
                                    <a href="http://www.rheem.com.ar/assets/pdf/manuales/Manual_Rheem_electrico_AEE-v2.pdf" target="_blank" download="" style="color:#3b3bb1; margin-left: 70px; font-size:16px;">- AEE Eléctrico.</a>
                                    
                                </div>
                                <div class="card-block">
                                <a href="http://www.rheem.com.ar/assets/pdf/manuales/Manual_termo_Electrico_Rheem.pdf" target="_blank" download="" style="color:#3b3bb1; margin-left: 70px; font-size:16px;">- Clásico Eléctrico.</a>                                    
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-3 mt-md-2 mt-2">
                        <div class="col-lg-12 col-md-8 col-sm-5 text-left about-inner-icon"> 
                            <span class="far fa-hand-point-right" style="padding-top: 15px;">  
                                 
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse02" aria-expanded="true" aria-controls="collapse02" class="collapsed" style="color:#3b3bb1; fot-size:20px;">
                                Manuales de termotanques a Gas
                                </a>
                            </span>
                            <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="heading01" style="height: 0px;">
                                <div class="card-block">
                                    <a href="http://www.rheem.com.ar/assets/pdf/manuales/Manual_Rheem_Gas_AEE-v2.pdf" target="_blank" download="" style="color:#3b3bb1; margin-left: 70px; font-size:16px;">- AEE Gas.</a>
                                    
                                </div>
                                <div class="card-block">
                                <a href="http://www.rheem.com.ar/assets/pdf/manuales/Manual_termo_Electrico_Rheem.pdf" target="_blank" download="" style="color:#3b3bb1; margin-left: 70px; font-size:16px;">- Clásico Gas.</a>                                    
                                </div>                              
                            </div>
                        </div>
                    </div>
                    
                    
                    
                   
                </div>
            </div>
            
         </div>
      </section>
 @stop