@extends('layouts.admin')
@section('content')

<div class="col-md-10  order-md-2">
    <br>
    <h3 class="mb-3" style="color:#337ab7">Lista de Reclamos Pendientes
                <a href="#" class="btn btn-dark btn-md">
                    <span class="glyphicon glyphicon-print"></span>  
                </a>
    </h3>
    <div class="form-inline">        
        <div class="form-group col-md-10 mb-4 text-center"> 
          <label for="desde"> Desde: </label>     
          <input type="date" class="form-control"  placeholder="Desde.." value="" required="">  
          <label for="hasta"> Hasta: </label>  
          <input type="date" class="form-control"  placeholder="Hasta.." value="" required="">  
          <a href="#" class="btn btn-dark btn-md">
            <span class="glyphicon glyphicon-search"></span>  
          </a>
        </div>                                           
    </div>
    <br>
    <br>
    <div class="col-md-8 col-md-offset-2 alert alert-success hide alert-dismissible hide text-center" id="alert" >
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Reclamo Eliminado correctamente! </strong>
   </div>
    <br>

    <table class="table">

        <thead>
                
                <th>Fecha</th>
                <th>Nº Reclamo</th>  
                <th>IdProducto / DNI</th>              
                <th>Estado</th>  
                <th>Técnico Asignado</th>  

        </thead>
        <tbody>
            
            <tr>
                <td>20/06/2019</td>
                <td>456345</td>
                <td>30999888</td>
                <td>Abierto</td>
                <td>Rodriguez Ramón</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/reclamover')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/reclamoedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>
                
            </tr>
            <tr>
                <td>20/06/2019</td>
                <td>456345</td>
                <td>30999888</td>
                <td>Abierto</td>
                <td>Gonzales Carlos</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/reclamover')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/reclamoedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>
                
            </tr>
            <tr>
                <td>20/06/2019</td>
                <td>456345</td>
                <td>30999888</td>
                <td>Abierto</td>
                <td>Lopez Adrian</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/reclamover')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/reclamoedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>
                
            </tr>
            <tr>
                <td>20/06/2019</td>
                <td>456345</td>
                <td>30999888</td>
                <td>En Gestión</td>
                <td>Gonzales Carlos</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/reclamover')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/reclamoedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>
                
            </tr>
            <tr>
                <td>20/06/2019</td>
                <td>456345</td>
                <td>30999888</td>
                <td>Abierto</td>
                <td>Rodriguez Ramón</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/reclamover')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/reclamoedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>
                
            </tr>
            <tr>
                <td>20/06/2019</td>
                <td>456345</td>
                <td>30999888</td>
                <td>En Gestión</td>
                <td>Rodriguez Ramón</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/reclamover')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/reclamoedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>
                
            </tr>
            <tr>
                <td>20/06/2019</td>
                <td>456345</td>
                <td>30999888</td>
                <td>En Gestión</td>
                <td>Rodriguez Ramón</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/reclamover')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/reclamoedit')!!}'">Editar</button>  <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">Eliminar</button></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Reclamo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro de eliminar el reclamo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="eliminar" onclick="mostrar()">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    
    
    function mostrar(){
      $('#alert').replaceWith('<div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissible text-center" id="alert" ><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Reclamo Eliminado correctamente! </strong></div>');                 
      
    }
    
</script>
   
@endsection