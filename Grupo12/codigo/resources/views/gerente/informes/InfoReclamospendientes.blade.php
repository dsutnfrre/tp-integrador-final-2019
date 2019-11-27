@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <div class="row padding">
        	<div class="col-md-12 text-center">
                <h2><u>RECLAMOS PENDIENTES</u> <h4> Hasta la Fecha: <span><?php echo date("d-m-Y");?></span></h4></h2>
            </div>
        </div>
        <hr>
    	<div class="col-md-12 mb-4 text-left">
                <table class="table table-hover">
                    <thead>
                    <tr>
                            <th>Fecha</th>
                            <th>Nº Reclamo</th>  
                            <th>IdProducto / DNI</th>              
                            <th>Estado</th>  
                            <th>Técnico Asignado</th>  
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>20/06/2019</td>
                            <td>456346</td>
                            <td>4445</td>
                            <td>Abierto</td>
                            <td>Rodriguez Ramón</td>
                        
                            
                        </tr>
                        <tr>
                            <td>15/06/2019</td>
                            <td>456334</td>
                            <td>30999888</td>
                            <td>Abierto</td>
                            <td>Gonzales Carlos</td>
                            
                            
                        </tr>
                        <tr>
                            <td>12/06/2019</td>
                            <td>456321</td>
                            <td>4547</td>
                            <td>Abierto</td>
                            <td>Lopez Adrian</td>
                            
                            
                        </tr>
                        <tr>
                            <td>08/06/2019</td>
                            <td>456318</td>
                            <td>30999888</td>
                            <td>En Gestión</td>
                            <td>Ramirez Roberto</td>
                        
                            
                        </tr>
                        <tr>
                            <td>30/05/2019</td>
                            <td>456312</td>
                            <td>30999675</td>
                            <td>Abierto</td>
                            <td>Rodriguez Ramón</td>    
                        </tr>
                        <tr>
                            <td>28/05/2019</td>
                            <td>456309</td>
                            <td>6765</td>
                            <td>En Gestión</td>
                            <td>Dominguez Juan</td>  
                        </tr>
                        <tr>
                            <td>26/05/2019</td>
                            <td>456345</td>
                            <td>30999888</td>
                            <td>En Gestión</td>
                            <td>Rodriguez Ramón</td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-md-12 mb-4 text-right">
                    <label for=""><u>Cantidad total:</u><span> 20</span></label>
                </div>
            </div>
                <div class="row pagination col-md-12 mb-4">
                    <a href="#">&laquo;</a>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">&raquo;</a>
                    </div>
                </div>          
            <div class=" row form-inline">
                <div class="col-md-12 mb-4 text-center">                  
                
                    <a href="Documentos/reclamospendientes.xls" download="reclamospendientes.xls">
                        <button type="button" class="btn btn-success">Descargar .XLS</button>
                    </a>
                    <a href="Documentos/reclamospendientes.pdf" download="reclamospendientes.pdf">
                        <button type="button" class="btn btn-danger">Descargar .PDF</button>
                    </a>
                    <button type="button"  class="btn btn-primary" onclick="window.open('reclamospendientes.pdf')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>
                </div>
            </div>
      	</div>
    </div>
<style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #31708f;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
        
@endsection