@extends('layouts.admin')
@section('content')
<div class="col-md-9 col-md-offset-2">
          <h3 class="mb-3" style="color:#337ab7">Solicitud de Asistencia
                <a href="#" class="btn btn-dark btn-md">
                    <span class="glyphicon glyphicon-print"></span>  
                </a>
          </h3>
            <hr>
          <form class="needs-validation" novalidate="">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="fecha">Fecha:</label><span> 20/06/2019 </span>
                </div>                   
            </div> 
            <br>            
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="dni">DNI:</label><span> 30999888 </span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nomap">Nombre y Apellido:</label><span> Gonzales Carlos </span>
                </div>             
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="ciudad">Ciudad:</label><span> Resistencia </span>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="provincia">Provincia:</label><span> Chaco </span>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="pais">País:</label><span> Argentina </span>
                </div> 
            </div>
            <br>
            <div class="row">    
                <div class="col-md-3 mb-3">
                    <label for="telefono">Telefono:</label><span> 5656566657 </span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Email:</label><span> carlosg@gmail.com </span>
                </div>
            </div>
            <br> 
            <div class="row">    
                <div class="col-md-3 mb-3">
                    <label for="idprod">IdProducto:</label><span> 4545 </span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tipop">Tipo de Producto:</label><span> Termotanque </span>
                </div>
            </div>
            <br> 
            <div class="row">     
                <div class="col-md-9 mb-3">
                    <label for="detalle">Descripción del problema:</label><span> Termotanque se apaga solo al rato de encender y no prende más </span>
                </div>         
            </div>
            <br>              
            <div class="row form-inline">
                <hr style="margin-top:10px; margin-bottom:10px;">
                <div class="col-md-9 mb-4 text-center">
                    <button type="button" class="btn btn-success"  onclick="window.location.href='{!!URL::to('/atencionasistencia')!!}'">Contestar</button>               
                    <button type="button" class="btn btn-primary"  onclick="window.location.href='{!!URL::to('/listaasistencias')!!}'">Volver</button>               
                </div>
            </div>            
          </form>
          <br>
</div>  
        
@endsection