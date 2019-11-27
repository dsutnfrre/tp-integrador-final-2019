@extends('layouts.admin')
@section('content')
<div class="col-md-10 col-md-offset-2">
          <h3 class="mb-3" style="color:#337ab7">Editar reclamo</h3>
          <br>
          <form class="needs-validation" novalidate="">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="fecha">Fecha de Reclamo</label>
                    <input type="datetime" class="form-control" id="fecha" name="fecha"  value="<?php echo date("d-m-Y");?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="numreclamo">N° Reclamo</label>
                    <input type="text" class="form-control" id="numreclamo" value="454584" disabled>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="estado">Estado</label>
                    <select class="form-control" id="estado" required="">
                        <option value="">Abierto</option>
                        <option>Cerrado</option>
                        <option>En gestión</option>
                        <option>Abierto</option>
                    </select>
                </div> 
            </div>           
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="IdProd">Id Producto</label>
                    <input type="text" class="form-control" id="idProd" placeholder="ID Producto" value="" required="">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="tipop">Tipo de Producto</label>
                        <select class="form-control" id="tipop" required="">
                            <option value="">Termotanque</option>
                            <option>Termotanque</option>
                            <option>Calefon</option>
                        </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="DNI">DNI Cliente</label>
                    <input type="text" class="form-control" id="dni" placeholder="DNI" value="30999888" required="">
                 </div>
                <div class="col-md-6 mb-4">
                    <label for="nomap">Nombre y Apellido</label>
                    <input type="text" class="form-control" id="nomap" placeholder="Nombre y Apellido del cliente" value="Gonzales Carlos">
                </div> 
            </div>
            <div class="row">
                <div class="col-md-9 mb-4">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" class="form-control" id="domicilio" placeholder="Domicilio" value="Santa Fe 325" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" value="Resistencia" required="">
              </div>
                <div class="col-md-3 mb-3">
                        <label for="provincia">Provincia</label>
                        <input type="text" class="form-control" id="provincia" placeholder="Provincia" value="Chaco" required="">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="pais">País</label>
                    <select class="form-control" id="pais" required="">
                    <option value="">Argentina</option>
                    <option>Argentina</option>
                    <option>Paraguay</option>
                    </select>
                </div> 
            </div>
            <div class="row">             
                <div class="col-md-6 mb-4">
                    <label for="detalle">Detalle de Reclamo</label>
                    <textarea class="form-control" id="detalle" rows="3">Termotanque se apaga solo al rato de encender y no prende más</textarea>
                </div>   
                <div class="col-md-3 mb-4">
                        <label for="estado">Horario de visita</label>
                        <select class="form-control" id="estado" required="">
                        <option value="">08:00 a 12:00</option>
                        <option>08:00 a 12:00</option>
                        <option>16:00 a 20:00</option>
                        </select>
                </div> 
            </div> 
            <br>
            
            <div class="row">  
                <div class="col-md-6 mb-4 text-left">
                    <textarea class="form-control" id="cierre" rows="2" placeholder="Seguimiento de Reparación / Detalle de cierre"></textarea>
                </div>
            </div>
            <div class="row">
                <hr style="margin-top:10px; margin-bottom:10px;">
                <div class="col-md-9 mb-4 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Guardar
                    </button>
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
              <h4 class="modal-title">Reclamo Guardado</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
             El reclamo se guardo correctamente
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.location.href='{!!URL::to('/reclamos/listareclamos')!!}'">Cerrar</button>
            </div>

          </div>
        </div>
      </div>

   
        
@endsection