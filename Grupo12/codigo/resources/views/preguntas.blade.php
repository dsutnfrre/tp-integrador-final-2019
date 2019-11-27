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
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Preguntas Frecuentes</h3>
            </div>
            <div class="row">
                <div class="col-lg-12 w3layouts-right-side-img">
                    <div class="row mt-lg-3 mt-md-2 mt-2">
                        <div class="col-lg-12 col-md-8 col-sm-5 text-left about-inner-icon"> 
                            <span class="far fa-hand-point-right" style="padding-top: 15px;">   
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse01" aria-expanded="true" aria-controls="collapse01" class="collapsed" style="color:#3b3bb1; fot-size:20px;">
                                ¿Por qué comprar un termotanque?
                                </a>
                            </span>
                            <div id="collapse01" class="collapse" role="tabpanel" aria-labelledby="heading01" style="height: 0px;">
                                <div class="card-block">
                                    <p style="color:#3b3bb1; margin-left: 70px; font-size:16px;"> Porque es el equipo que te proporcionará mas confort.<br>
                                        Puede atender consumos simultáneos su funcionamiento no  depende de la mayor o menor presión de agua la disponibilidad de agua caliente  no depende de la presión de gas. su vida útil es muy prolongada es la forma más  segura de generar agua 
                                        caliente las aguas duras lo afectan mucho menos que  cualquier otro sistema su instalación es sencilla.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-3 mt-md-2 mt-2">
                        <div class="col-lg-12 col-md-8 col-sm-5 text-left about-inner-icon"> 
                            <span class="far fa-hand-point-right" style="padding-top: 15px;">   
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse02" aria-expanded="true" aria-controls="collapse02" class="collapsed" style="color:#3b3bb1; fot-size:20px;">
                                ¿Por qué es importante la acumulación del termotanque?
                                </a>
                            </span>
                            <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="heading01" style="height: 0px;">
                                <div class="card-block">
                                    <p style="color:#3b3bb1; margin-left: 70px; font-size:16px;"> La acumulación es la capacidad en litros que puede mantener un termotanque en reserva a la temperatura deseada. Es el valor más relevante de los termotanques. Por ejemplo: 50, 80, 120 litros.
                                        Como el agua caliente “acumulada” en el termotanque está a una temperatura (50 a 70ºC), mayor que la de “uso confortable” (40ºC), la misma se mezcla con agua fría, obteniendo de esta manera un 50 a 100% más de agua lista para usar.
                                        A poco de iniciar el consumo, enciende el quemador y, con él, la regeneración de agua caliente, conocida como “recuperación”.
                                        Cabe aclarar que mientras el agua “acumulada” está a una temperatura cercana a los 70ºC, la “recuperada” lo está (dependiendo de la temperatura de entrada) a 25/40ºC.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-3 mt-md-2 mt-2">
                        <div class="col-lg-12 col-md-8 col-sm-5 text-left about-inner-icon"> 
                            <span class="far fa-hand-point-right" style="padding-top: 15px;">   
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse03" aria-expanded="true" aria-controls="collapse03" class="collapsed" style="color:#3b3bb1; fot-size:20px;">
                                ¿Qué mantenimiento debo hacerle al termotanque?
                                </a>
                            </span>
                            <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="heading01" style="height: 0px;">
                                <div class="card-block">
                                    <p style="color:#3b3bb1; margin-left: 70px; font-size:16px;"> Si el termotanque está instalado en una zona de aguas duras, 
                                        lo que puede ocasionar problemas de sarro, es recomendable drenar 2 a 3 veces por año alrededor 
                                        de 20 litros de agua por la válvula de descarga. Esto ayuda a disminuir la formación de depósitos 
                                        de sarro en la zona inferior del tanque. Los depósitos de sarro reducen el rendimiento y la vida útil 
                                        de su termotanque. Para asegurar la óptima protección de su unidad contra la corrosión solicite anualmente 
                                        la verificación del estado del ánodo de magnesio. De esta forma podrá reemplazarlo cuando el mismo esté 
                                        consumido más de un 50% y evitar así el avance de la corrosión en las paredes del tanque.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-3 mt-md-2 mt-2">
                        <div class="col-lg-12 col-md-8 col-sm-5 text-left about-inner-icon"> 
                            <span class="far fa-hand-point-right" style="padding-top: 15px;">   
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse04" aria-expanded="true" aria-controls="collapse04" class="collapsed" style="color:#3b3bb1; fot-size:20px;">
                                ¿Cómo elijo el termotanque ideal para a mi casa?
                                </a>
                            </span>
                            <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="heading01" style="height: 0px;">
                                <div class="card-block">
                                    <p style="color:#3b3bb1; margin-left: 70px; font-size:16px;"> Recuerde, a mayor capacidad del termotanque mayor confort.

                                        El mayor tamaño no involucra necesariamente mayor consumo de gas. Un termo de mayor capacidad tiene más pérdidas de calor que uno de menor capacidad y consumirá más que uno de menor capacidad pero entregará más agua caliente.
                                        Usted puede fácilmente calcular la capacidad necesaria para satisfacer sus necesidades de agua caliente, para ello debe tener en cuenta varios factores:

                                        1) cantidad de habitantes
                                        2) modalidad de baño (duchas, inmersión)
                                        3)presión del agua (si tiene instaladas bombas presurizadoras), entre otros.
                                        SEPA COMO ELEGIR SU TERMOTANQUE
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-3 mt-md-2 mt-2">
                        <div class="col-lg-12 col-md-8 col-sm-5 text-left about-inner-icon"> 
                            <span class="far fa-hand-point-right" style="padding-top: 15px;">   
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse05" aria-expanded="true" aria-controls="collapse05" class="collapsed" style="color:#3b3bb1; fot-size:20px;">
                                Consejos y datos útiles
                                </a>
                            </span>
                            <div id="collapse05" class="collapse" role="tabpanel" aria-labelledby="heading01" style="height: 0px;">
                                <div class="card-block">
                                    <p style="color:#3b3bb1; margin-left: 70px; font-size:16px;"> Busque asesoramiento antes de comprar. Un producto elegido de acuerdo a sus necesidades gastará sólo la energía necesaria.
                                        Cuando reemplace su antiguo termotanque o calefón por uno nuevo elija el modelo con mayor índice de eficiencia. Lo que ahorre en la compra del producto puede multiplicarse en su cuenta de gas.
                                        El factor fundamental para conservar la temperatura del agua en los termotanques es la calidad de aislaciónRegularmente drene agua de sus termotanque de acuerdo a las indicaciones del fabricante.
                                        El sedimento que se deposita en el fondo del tanque limita su eficiencia.
                                        En lo posible, aísle las cañerías y ubique el equipo cerca del punto de uso.
                                        En caso de estar fuera de su casa por un largo período llévelo a la posición piloto.
                                        Mantenga en buen estado sus cañerías y canillas para evitar la pérdida de agua caliente. La pérdida de 1 gota de agua por segundo en una canilla se puede convertir en un total mensual de 726 lts.

                                        Recuerde a la hora de elegir su termotanque que el consumo de agua caliente de una ducha equivale a menos de la mitad de un baño de inmersión.
                                        Acumular el agua a alta temperatura permite contar (a través de la mezcla con agua fría) contar con más agua a temperatura de uso pero también produce más pérdidas de calor. Conviene buscar qué temperatura da el balance óptimo entre disponibilidad de agua caliente y economía de operación.
                                        Una ducha normal de 7/8 minutos, con una ducha de caudal normal, sin bomba presurizadora, consume aprox. 35 / 40 lts. de agua del termotanque a 60C y otro tanto de agua fría.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
         </div>
      </section>
 @stop