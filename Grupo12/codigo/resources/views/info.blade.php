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

      <section class="service-one py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Termotanques a Gas</h3>
               <p>Comparación con termotanques con aislación de lana de vidrio: 35% <br> de ahorro en calentamiento de agua, según norma NAG 314 (categoría A aún no implementada)</p>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6 service-inner-list">
                  <div class="ser-inner-agile">
                     <div class="ser-w3layouts-inner">
                        <img src="images/s2.jpg" alt=" " class="img-fluid">
                     </div>
                     <div class="ser-txt-inner">
                        <h4 class="py-3">LINEA AEE</h4>
                        <p>De colgar - Modelo: TGNC050RH Capacidad 50 (litros) - Altura total (mm) 870 - Diámetro (mm) 	510 - Consumo GN (Kcal/h) 3000 - Recuperación (L/h)  120 - Peso Vacío (kg) 26</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 service-inner-list">
                  <div class="ser-inner-agile">
                     <div class="ser-w3layouts-inner">
                        <img src="images/s1.jpg" alt=" " class="img-fluid">
                     </div>
                     <div class="ser-txt-inner">
                        <h4 class="py-3">LINEA AEE</h4>
                        <p>De pie - Modelo: TGNC050RH Capacidad 80 (litros) - Altura total (mm) 1091 - Diámetro (mm) 	510 - Consumo GN (Kcal/h) 3400 - Recuperación (L/h)  144 - Peso Vacío (kg) 32</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 service-inner-list">
                  <div class="ser-inner-agile">
                     <div class="ser-w3layouts-inner">
                        <img src="images/s3.jpg" alt=" " class="img-fluid">
                     </div>
                     <div class="ser-txt-inner">
                        <h4 class="py-3">TERMOTAMBO DUAL GAS/ELÉCTRICO</h4>
                        <p>Modelo: 250 LITROS Capacidad 250 (litros) - Altura total (mm) 1580 - Diámetro (mm) 	664 - Consumo GN (Kcal/h) 12000 - Recuperación (L/h)  420 - Potencia eléctrica (Kw)	4 - Peso Vacío (kg) 125</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection
