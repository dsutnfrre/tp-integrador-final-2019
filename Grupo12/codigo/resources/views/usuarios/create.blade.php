@extends('layouts.admin')
@section('content')
@include('alerts.request')
<div class="col-md-12 col-md-offset-3">
  <br>
  <h3 class="mb-3" style="color:#337ab7">Registrar usuario</h3>
  <br>
  
  {!!Form::open(['route'=>'usuarios.store', 'method'=>'POST'])!!}
    <div class="row">
      <div class="col-md-4 mb-3">
        {!!Form::label('fecha_creacion','Fecha de Creacion:')!!}
        {!!Form::date('fecha_creacion',\Carbon\Carbon::now(),['class'=>'form-control'])!!}
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-3">
        {!!Form::label('nombreUsuario','Nombre de Usuario:')!!}
        {!!Form::text('nombreUsuario',null,['class'=>'form-control','placeholder'=>'Ingrese un nombre de usuario','required'])!!}
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-3">
        {!!Form::label('email','Correo Electronico:')!!}
        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese un correo electrónico'])!!}
      </div>
    </div>
   
    <div class="row">
      <div class="col-md-4 mb-3">
        {!!Form::label('password','Contraseña:')!!}
        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese una contraseña'])!!}
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-4 mb-3">
        {!!Form::label('telefono','Telefono:')!!}
        {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingrese un número de Telefono o
        Celular'])!!}
      </div>
    </div>
  
    <div class="col-md-4 mb-3 text-right">
      <hr>
      {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
    </div>
  {!!Form::close()!!}

  @endsection