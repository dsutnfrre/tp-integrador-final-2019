@extends('layouts.admin')
@section('content')

<div class="col-md-10 col-md-offset-2">
    <h3 class="mb-3" style="color:#337ab7">Registrar reclamo</h3>
    
    <form class="needs-validation" novalidate="">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="cuitcuil">CUIT/CUIL</label>
                <input type="text" class="form-control" id="cuitcuil" placeholder="CUIT/CUIL" value="27309998884" required=""
                onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="col-md-6 mb-4">
                <label for="razons">Razón Social:</label>
                <input type="text" class="form-control" id="razons" placeholder="Razon Social"
                    value="Garbarino S.A">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="domicilio">Domicilio</label>
                <input type="text" class="form-control" id="domicilio" placeholder="Domicilio" value="Santa Fe 325"
                    required="">
            </div>
            <div class="col-md-3 mb-2">
                <label for="tel">Telefono</label>
                <input type="text" class="form-control" id="tel" placeholder="Telefono" value="4551166" required=""
                onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="diagnostico">Diagnostico:</label>
                <input type="text" class="form-control" id="diagnostico" placeholder="" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-6">
                <label for="desc">Descripcion:</label>
                <textarea class="form-control" id="desc" rows="2"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-6">
                <label for="observaciones">Observaciones:</label>
                <textarea class="form-control" id="observaciones" rows="3"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="fecha">Fecha de Visita</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="">
            </div>
            <div class="col-md-3 mb-4">
                <label for="estado">Horario de visita</label>
                <select class="form-control" id="estado" required="">
                    <option value="">...</option>
                    <option>08:00 a 12:00</option>
                    <option>16:00 a 20:00</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 mb-4 text-right">
                <hr style="margin-top:10px; margin-bottom:10px;">
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
                <h4 class="modal-title">Confirmación de Reclamo</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                ¿Desea confirmar el reclamo ingresado?
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    onclick="window.location.href='{!!URL::to('/admin')!!}'">Cancelar</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    id="cerrarModal">Confirmar Reclamo</button>
            </div>

        </div>
    </div>
</div>

<!-- The Modal 2-->
<div class="modal" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Reclamo registrado</h4>

            </div>

            <div class="modal-body">
                Reclamo registrado N° 7898729873981.
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"
                    onclick="window.location.href='{!!URL::to('/listareclamos')!!}'">Aceptar</button>
            </div>

        </div>
    </div>
</div>

@endsection