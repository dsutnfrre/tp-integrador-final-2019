@extends('layouts.admin')

@include('alerts.success')

@section('content')

<div class="col-md-8 order-md-1">
  <br>
  <table class="table">
    <thead>
      <th>Nombre Usuario</th>
      <th>Correo Electrónico</th>
      <th>Fecha de Creación</th>
      <th>Telefono</th>
      <th></th>
    </thead>

    @foreach($users as $user)
    <tbody>
      <td>{{$user->nombreUsuario}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->fecha_creacion}}</td>
      <td>{{$user->telefono}}</td>
      <td class="text-center">
        {!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn
        btn-primary'])!!}
      </td>
      <td>
        {!!Form::open(['route'=>['usuarios.destroy', $user], 'method' => 'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
  </table>
</div>
@endsection


