@extends('layouts.admin')
@section('content')
<div class="col-md-10 col-md-offset-2">
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
                <div class="col-md-3 mb-3">
                    <label for="dni">DNI:</label><span> 30999888 </span>
                </div>
                <div class="col-md-4 mb-3">
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
                <div class="col-md-10 mb-3">
                    <label for="detalle">Descripción del problema:</label><span> Termotanque se apaga solo al rato de encender y no prende más </span>
                </div>         
            </div>
            <br>   
            <div class="row">             
                <div class="col-md-10 mb-4">
                    <label for="detalle">Respuesta</label>
                    <textarea class="form-control" id="detalle" rows="4">Adjunto manual para resolver el problema, y en 24 hs nos estaremos comunicando con usted  para confirmar si solucionó el problema, de lo contrario registramos un reclamo para su atención
                    </textarea>
                </div>                
            </div>  
            <br>
            <div class="row">
                <div class="form-group col-md-6 mb-4">
                    <label for="exampleFormControlFile1">Adjuntar Archivos</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group col-md-4 mb-4">
                    <label for="estado">Estado de Asistencia</label>
                    <select class="form-control" id="estado" required="">
                        <option value="">...</option>
                        <option>Solucionado</option>
                        <option>Derivado</option>
                    </select>
                </div>
            </div>         
            <div class="row form-inline">
                <hr style="margin-top:10px; margin-bottom:10px;">
                <div class="col-md-9 mb-4 text-center">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                        Enviar
                    </button>             
                    <button type="button" class="btn btn-success"  onclick="window.location.href='{!!URL::to('/reclamoCreate')!!}'">Hacer Reclamo</button>               
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Guardar</button>               
                    
                </div>
            </div>            
          </form>
          <br>
</div>  
        
<!-- The Modal -->
<div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Envío de asistencia</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Se envió respuesta al correo eléctronico correctamente.
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.location.href='{!!URL::to('/listaasistencias')!!}'">Cerrar</button>
            </div>

          </div>
        </div>
      </div>

      <div class="modal" id="myModal2">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Asistencia guardada</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Se guardó consulta correctamente.
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>

          </div>
        </div>
      </div>

   
        
@endsection