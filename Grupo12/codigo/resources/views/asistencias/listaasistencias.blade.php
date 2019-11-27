@extends('layouts.admin')
@section('content')

<div class="col-md-9 order-md-1">
    <br>
    <h3 class="mb-3" style="color:#337ab7">Lista de Asistencias Pendientes
                <a href="#" class="btn btn-dark btn-md">
                    <span class="glyphicon glyphicon-print"></span>  
                </a>
    </h3>
    <table class="table">
        <thead>   
                <th>Fecha</th>
                <th>IdProducto / DNI</th>              
                <th>Tipo Producto</th>  
                <th>Atención</th>  
        </thead>
        <tbody>
            <tr>
                <td>20/06/2019</td>
                <td>30999888</td>
                <td>Termotanque</td>
                <td>Pendiente</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/asistenciaver')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/atencionasistencia')!!}'">Contestar</button></td>               
            </tr>
            <tr>
                <td>18/06/2019</td>
                <td>4545</td>
                <td>calefon</td>
                <td>Pendiente</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/asistenciaver')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/atencionasistencia')!!}'">Contestar</button></td>               
            </tr>
            <tr>
                <td>18/06/2019</td>
                <td>4543</td>
                <td>Termotanque</td>
                <td>Pendiente</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/asistenciaver')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/atencionasistencia')!!}'">Contestar</button></td>               
            </tr>
            <tr>
                <td>14/06/2019</td>
                <td>5443</td>
                <td>calefon</td>
                <td>Pendiente</td>
                <td class="text-center" ><button class="btn btn-info" type="submit" onclick="window.location.href='{!!URL::to('/asistenciaver')!!}'">Ver </button>  <button class="btn btn-primary" type="submit" onclick="window.location.href='{!!URL::to('/atencionasistencia')!!}'">Contestar</button></td>               
            </tr>
           
        </tbody>
    </table>
</div>
   
@endsection