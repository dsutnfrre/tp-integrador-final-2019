@extends('layouts.admin')
@section('content')
<div class="container-fluid">
        <div class="row padding">
        	<div class="col-md-12 text-center">
                <h2><u>RECLAMOS POR TIPO DE FALLA</u></h2>
            </div>
        </div>
        <hr>      
        <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <label for="cod">Cod. Falla: <span>2</span></label> 
            </div>  
            <div class="col-md-6 mb-4 text-left">
                <label for="desc">Descripción de Falla: <span>termostato del termotanque</span></label> 
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
                    </tbody>
                </table>
                <div class="col-md-12 mb-4 text-right">
                    <label for=""><u>Cantidad reclamos por Falla:</u><span> 3</span></label>
                </div>  
      	</div>
        <hr>
        <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <label for="cod">Cod. Falla: <span>5</span></label> 
            </div>  
            <div class="col-md-6 mb-4 text-left">
                <label for="desc">Descripción de Falla: <span>Tubo de salida de gases</span></label> 
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
                            <td>12/06/2019</td>
                            <td>456321</td>
                            <td>4547</td>
                            <td>Abierto</td>
                            <td>Lopez Adrian</td>
                        </tr>
                        <tr>
                            <td>12/06/2019</td>
                            <td>456321</td>
                            <td>4547</td>
                            <td>Abierto</td>
                            <td>Lopez Adrian</td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-md-12 mb-4 text-right">
                    <label for=""><u>Cantidad reclamos por Falla:</u><span> 5</span></label>
                </div>  
      	</div>
<!-- -------------------- -->
          <div class=" row form-inline">
                <div class="col-md-12 mb-4 text-center">            
                <a href="Documentos/reclamosportipofalla.xls" download="reclamosportipofalla.xls">
                        <button type="button" class="btn btn-success">Descargar .XLS</button>
                    </a>
                    <a href="Documentos/reclamosportipofalla.pdf" download="reclamosportipofalla.pdf">
                        <button type="button" class="btn btn-danger">Descargar .PDF</button>
                    </a>
                    <button type="button"  class="btn btn-primary" onclick="window.open('reclamosportipofalla.pdf')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>                    
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