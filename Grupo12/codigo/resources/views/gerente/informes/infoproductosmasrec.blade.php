@extends('layouts.admin')
@section('content')
<div class="container-fluid">
<br>
        <div class="row padding">
        	<div class="col-md-12 text-center">
                <h2><u>PRODUCTOS CON MAS RECLAMOS</u> <h4> Fecha: <span><?php echo date("d-m-Y");?></span></h4></h2>
            </div>
        </div>
    	<div class="col-md-12 mb-4 text-left">
                <table class="table table-hover">
                    <thead>
                    <tr>
                            <th>IdProducto</th>
                            <th>Descripcion</th>  
                            <th>Nº de Reclamos</th>                
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>456346</td>
                            <td>CALEFON - 14 L</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>M160</td>
                            <td>TERMOTANQUE HEAT PUMP 160</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>TEP125RH</td>
                            <td>TERMOTANQUE ELECTRICO DE PIE 120</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>TEP055RH</td>
                            <td>TERMOTANQUE ELECTRICO DE PIE 55</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>TEC055</td>
                            <td>TERMOTANQUE ELECTRICO DE COLGAR 55</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>TGNP120RH</td>
                            <td>TERMOTANQUE A GAS DE PIE 120</td>
                            <td>3</td>
  
                        </tr>
                        <tr>
                            <td>TGNC080RH</td>
                            <td>TERMOTANQUE A GAS DE COLGAR 80</td>
                            <td>2</td>                    
                            
                        </tr>
                        <tr>
                            <td>TGNC050RH</td>
                            <td>TERMOTANQUE A GAS DE COLGAR 50</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>52180</td>
                            <td>TERMOTANQUE SOLARPREMIER HILINE 52D</td>
                            <td>1</td>
  
                        </tr>
                        <tr>
                            <td>52300</td>
                            <td>TERMOTANQUE SOLAR - PREMIER HILINE 52C</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>         
            <div class=" row form-inline">
                <div class="col-md-12 mb-4 text-center">   
                    <a href="Documentos/informeproductosmasreclamado.xls" download="informeproductosmasreclamado.xls">
                        <button type="button" class="btn btn-success">Descargar .XLS</button>
                    </a>
                    <a href="Documentos/informeproductosmasreclamado.pdf" download="informeproductosmasreclamado.pdf">
                        <button type="button" class="btn btn-danger">Descargar .PDF</button>
                    </a>
                    <button type="button"  class="btn btn-primary" onclick="window.open('informeproductosmasreclamado.pdf')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>                    
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
function myFunction() {
    window.print();
}
        
@endsection