<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MaxElec - Administracion </title>
    {!!Html::style('css/bootstrap2.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-light navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#194261;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">MAXELEC.SA</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!!Auth::user()->nombreUsuario!!} <i class="fa fa-user fa-fw"></i> <i
                            class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                 
                    <ul class="nav" id="side-menu">
                           @if(Auth::user()->nombreUsuario == 'administrador')
                                <li class="">
                                    <a href="#"><i class="fa fa-users fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/usuarios/create')!!}"><i class='fa fa-plus fa-fw'></i>
                                                Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/usuarios')!!}"><i class='fa fa-list-ol fa-fw'></i> Lista de
                                                Usuarios</a>
                                        </li>
                                    </ul>
                                </li>
                             @endif
                             @if(Auth::user()->nombreUsuario == 'asesor')
                                <li class="">
                                    <a href="#"><i class="fa fa-gavel fa-fw"></i> Reclamos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#myModalVG"><i
                                                    class='fa fa-plus fa-fw'></i> Nuevo Reclamo</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/listareclamos')!!}"><i class='fa fa-list-ol fa-fw'></i> Lista
                                                de Reclamos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#"><i class="fa fa-phone fa-fw"></i> Llamadas<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#myModalCliente"><i
                                                    class='fa fa-plus fa-fw'></i> Registrar Llamada</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class='fa fa-list-ol fa-fw'></i> Lista de Llamadas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Asistencias<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="{!!URL::to('/listaasistencias')!!}"><i class='fa fa-list-ol fa-fw'></i>
                                                    Asistencias Pendientes</a>
                                            </li>
                                        </ul>
                                </li>
                            @endif
                            @if(Auth::user()->nombreUsuario == 'distribuidor')
                                <li class="">
                                    <a href="#"><i class="fa fa-bookmark-o fa-fw"></i> Garantía<span
                                            class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#}"><i class='fa fa-plus fa-fw'></i>
                                                Registrar Garantía</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                           
                        @if(Auth::user()->nombreUsuario == 'gerentec')
                            <li class="">
                                <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Informes<span
                                        class="fa arrow"></span></a>

                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::to('/inforeclamospend')!!}"><i class='fa fa-file-text fa-fw'></i>
                                            Reclamos Pendientes</a>
                                    </li>
                                </ul>
                                <ul class="nav nav-second-level">
                                    <li>

                                        <a href="{!!URL::to('/inforeclamossolucion')!!}"><i
                                                class='fa fa-file-text fa-fw'></i> Reclamos Solucionados</a>
                                    </li>
                                </ul>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::to('/infoproductosmasrec')!!}"><i
                                                class='fa fa-file-text fa-fw'></i> Productos con más reclamos</a>
                                    </li>
                                </ul>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::to('/inforeclamostipofalla')!!}"><i
                                                class='fa fa-file-text fa-fw'></i> Reclamos por tipo de Falla</a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>

        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap2.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

</body>

<div class="modal" id="myModalVG">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Verificar Producto en Garantía</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body ">
                <div class=" text-center">
                    <div class="form-inline">
                        <label for="codgarantia">Ingrese Código de Garantía: </label>
                        <input type="text" class="form-control" id="codgarantia" placeholder="Código" value=""
                            required="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    onclick="window.location.href='{!!URL::to('/admin')!!}'">Cancelar</button>
                <button id="cerrarModalVG" type="button" class="btn btn-primary" data-dismiss="modal"
                    data-toggle="modal" data-target="#myModalGarantia">Verificar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModalGarantia">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Información de Garantía del Producto</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    Este producto se encuentra en Garantía!
                </div>
                <p><label>Producto:</label><span>Termotanque AEE - De colgar - Modelo: TGNC050RH Capacidad 50 (litros) - Altura total (mm) 870 - Diámetro (mm) 510 - Consumo GN (Kcal/h) 3000 - Recuperación (L/h) 120 - Peso Vacío (kg) 26</span></label></p>
                <p><label>Tipo de Garantía:</label><span>Anual</span></p>
                <p><label>Cobertura: </label> <span>Completa</span></p>
                <p><label>Fecha de Registro: </label><span>15/08/2019</span></p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    onclick="window.location.href='{!!URL::to('/admin')!!}'">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"
                    onclick="window.location.href='{!!URL::to('/reclamoCreate')!!}'">Continuar Reclamo</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModalCliente">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Buscar Cliente</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body ">
                <div class=" text-center">
                    <div class="form-inline">
                        <label for="dnicli">Ingrese DNI del Cliente: </label>
                        <input type="text" class="form-control" id="dnicli" placeholder="DNI" value="" required="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    onclick="window.location.href='{!!URL::to('/admin')!!}'">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"
                    onclick="window.location.href='{!!URL::to('/llamadasCreate')!!}'">Buscar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#cerrarModalVG').click(function() {
        $('#myModalVG').modal('hide');
    });
    $('#cerrarModal').click(function() {
            $('#myModal').modal('hide');
        });
   
</script>

</html>