@extends('layouts.admin')
@section('content')

<div class="col-md-10 col-md-offset-2">
    <h3 class="mb-3" style="color:#337ab7">Registrar Llamada</h3>
    <div class="alert alert-success col-md-10 mb-8" role="alert">
        El cliente se encuentra registrado en el sistema!
        - No posee reclamos pendientes
    </div>
    <form class="needs-validation" novalidate="">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="fecha">Fecha de Llamada:</label>
                {!!Form::date('fecha',\Carbon\Carbon::now(),['class'=>'form-control'])!!}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="DNI">DNI Cliente:</label>
                <input type="text" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                    id="dni" max="8" placeholder="DNI" value="30959609" required="">
            </div>
            <div class="col-md-3 mb-3">
                <label for="nom">Nombre:</label>
                <input type="text" class="form-control" id="nom" placeholder="Nombre  del cliente" value="Vanina">
            </div>
            <div class="col-md-3 mb-3">
                <label for="ap">Apellido:</label>
                <input type="text" class="form-control" id="ap" placeholder="Apellido del cliente" value="Morínigo">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" value="">
            </div>
            <div class="col-md-3 mb-3">
                <label for="tel">Telefono:</label>
                <input type="text" class="form-control" id="tel" placeholder="Telefono  del cliente" value="4455566">
            </div>
            <div class="col-md-6 mb-3">
                <label for="domicilio">Domicilio:</label>
                <input type="text" class="form-control" id="domicilio" placeholder="Domicilio" value="mendoza 653" required="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="motivo">Motivo de llamado</label>
                <textarea class="form-control" id="motivo" rows="3"></textarea>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-md-9 mb-4 text-center">
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
                <h4 class="modal-title">Llamada Registrada</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                La llamada se guardo correctamente
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"
                    onclick="window.location.href='{!!URL::to('/admin')!!}'">Aceptar</button>
            </div>

        </div>
    </div>
</div>
@endsection