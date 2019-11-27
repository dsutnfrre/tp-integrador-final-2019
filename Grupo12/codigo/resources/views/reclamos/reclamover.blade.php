@extends('layouts.admin')
@section('content')
<div class="col-md-9 col-md-offset-2">
          <h3 class="mb-3" style="color:#337ab7">Información del Reclamo
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
                <div class="col-md-3 mb-3">
                    <label for="numreclamo">N° Reclamo:</label><span> 454584 </span>
                </div>  
                <div class="col-md-3 mb-3">
                    <label for="estado">Estado:</label><span> Abierto </span>
                </div>                 
            </div> 
            <br>          
            <div class="row">    
                <div class="col-md-3 mb-3">
                    <label for="idprod">IdProducto:</label><span>  </span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tipop">Tipo de Producto:</label><span> Termotanque </span>
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
                    <label for="domicilio">Domicilio:</label><span> Santa Fe 325 </span>
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
                <div class="col-md-9 mb-3">
                    <label for="detalle">Detalle de Reclamo:</label><span> Termotanque se apaga solo al rato de encender y no prende más </span>
                </div>         
            </div>
            <br>   
            <div class="row">    
                <div class="col-md-6 mb-4">
                        <label for="estado">Horario de visita: </label><span> 08:00 a 12:00 </span>
                </div> 
            </div>
            <br>  
            <div class="row">    
                <div class="col-md-6 mb-4">
                        <label for="tecnico">Técnico Asignado: </label><span> Rodriguez Ramón </span>
                </div> 
            </div> 
            <br> 
            <div class="row">    
                <div class="col-md-6 mb-4">
                        <label for="cierre">Detalle de Cierre:</label><span> - </span>
                </div> 
            </div>
           
            <div class="row">
                <hr style="margin-top:10px; margin-bottom:10px;">
                <div class="col-md-9 mb-4 text-center">
                <button type="button" class="btn btn-primary"  onclick="window.location.href='{!!URL::to('/listareclamos')!!}'">Volver</button>               
                </div>
            </div>            
          </form>
          <br>
</div>  
        
@endsection