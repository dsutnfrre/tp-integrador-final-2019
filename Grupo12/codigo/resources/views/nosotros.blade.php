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
                        <li class="nav-item active">
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
   <!--about-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Nuestra Historia</h3>
               <p>Quienes Somos y cual es nuestra misión</p>
            </div>
            <div class="row">
               <div class="col-lg-5 w3layouts-left-img">
                  <img src="images/ss2.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-lg-7 w3layouts-right-side-img">
                  
                  <div class="row mt-lg-4 mt-md-3 mt-3">
                     <div class="col-lg-3 col-md-4 col-sm-3 text-center about-inner-icon">
                        <span class="fas fa-angle-double-right"></span>
                     </div>
                     <div class="col-lg-9 col-md-8 col-sm-9 about-inner-agile-grids">
                        <h4 >Quienes Somos</h4>
                        <p>MaxElec nació hace 15 años junto con Víctor Giménez, que es gerente general y fundador.
                           La idea de iniciarse en la venta de un solo producto, en particular termotanques,
                           en aquella época ofrecían un solo modelo de termotanques, y más que nada para tener impacto a nivel provincial, 
                           luego con el tiempo fueron creciendo y ahora están distribuyendo a nivel regional NEA.
                        </p>
                     </div>
                  </div>
                  <div class="row mt-lg-4 mt-md-3 mt-3">
                     <div class="col-lg-3 col-md-4 col-sm-3 text-center about-inner-icon">
                        <span class="fas fa-angle-double-right"></span>
                     </div>
                     <div class="col-lg-9 col-md-8 col-sm-9 about-inner-agile-grids">
                        <h4>Nuestra Misión</h4>
                        <p> Potenciar en el grupo humano que compone la Empresa los valores éticos y de respeto hacia el concepto de excelencia en las labores realizadas, promoviendo el desarrollo personal, la iniciativa y la motivación.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-lg-5 mt-md-4 mt-3">
               <div class="col-lg-7 w3layouts-right-side-img">
                  <div class="row mt-lg-4 mt-md-3 mt-3">
                     <div class="col-lg-3 col-md-4 col-sm-3 text-center about-inner-icon">
                        <span class="fas fa-spinner"></span>
                     </div>
                     <div class="col-lg-9 col-md-8 col-sm-9 about-inner-agile-grids">
                        <p>Observar que las tareas complementarias de la fabricación y la comercialización sean todas las necesarias para el eficiente funcionamiento del negocio y realizadas por personas con la adecuada calificación
                        </p>
                     </div>
                  </div>
               
                  <div class="row mt-lg-4 mt-md-3 mt-3">
                     <div class="col-lg-3 col-md-4 col-sm-3 text-center about-inner-icon">
                        <span class="fas fa-spinner"></span>
                     </div>
                     <div class="col-lg-9 col-md-8 col-sm-9 about-inner-agile-grids">
                        
                        <p>Atender a nuestros clientes externos e internos con la convicción de que será a través de su satisfacción que lograremos alcanzar los objetivos propuestos. Brindar un servicio de ventas y de asistencia técnica de excelencia.
                        </p>
                     </div>
                  </div>
                  <div class="row mt-lg-4 mt-md-3 mt-3">
                     <div class="col-lg-3 col-md-4 col-sm-3 text-center about-inner-icon">
                        <span class="fas fa-spinner"></span>
                     </div>
                     <div class="col-lg-9 col-md-8 col-sm-9 about-inner-agile-grids">
                        
                        <p>Promover que todas las decisiones tomadas y las acciones realizadas por los miembros de la organización contribuyan positivamente en el resultado final de la operación, obteniendo de esta manera el mejor rendimiento para la inversión de los accionistas, facilitando las decisiones para el futuro crecimiento de la Empresa y consolidando un futuro mejor para nosotros y la comunidad.
                        </p>
                     </div>
                  </div>
                  
               </div>
               <div class="col-lg-5 w3layouts-left-img">
                  <img src="images/ss1.jpg" class="img-fluid" alt="">
               </div>
            </div>
         </div>
      </section>
   <!--//about-->
 @stop