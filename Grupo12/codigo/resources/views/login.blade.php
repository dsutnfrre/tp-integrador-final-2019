<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>MAXELEC.SA - Autenticación</title>
      <!--meta tags -->

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Renovate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
      {!!Html::style('css/bootstrap2.min.css')!!}
      {!!Html::style('css/style.css')!!}
      <!-- {!!Html::style('css/metisMenu.min.css')!!} -->
      <!-- {!!Html::style('css/sb-admin-2.css')!!} -->
      <!-- {!!Html::style('css/font-awesome.min.css')!!} -->
      
      <!-- {!!Html::style('css/bootstrap.min.css')!!} -->
      <!-- {!!Html::style('css/fontawesome-all.min.css')!!} -->
      <!-- {!!Html::style('css/popup-box.css')!!}   -->
      
      <!-- {!!Html::style('//fonts.googleapis.com/css?family=Raleway:400,500,600')!!} -->
      <!-- {!!Html::style('//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700')!!} -->
     
   </head>
   <body>
      
            <div class="container-fluid">
               <div class="row headder-contact" style="background: #3b3bb1;" >
                     <div class="hedder-up col-lg-12 col-md-8 col-sm-6" style="text-align: left; padding: initial">
                        <h1><a class="navbar-brand" href="{!!URL::to('/')!!}">MAXELEC.SA</a></h1>
                      </div> 
                      <div class="hedder-up col-lg-12 col-md-8 col-sm-6" style="text-align: left;">
                        <h6 style="color: #c7cace;">Termotanques y Calefones</h6>
                      </div>                                                                 
               </div>
               <div class="clearfix"> </div>
            </div>
      <div class="container"  style="padding:20px;">      
         @include('alerts.errors')
         @include('alerts.request')
         <br>
         {!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
            <div class="row">
               <div class="col-md-12 col-md-offset-4">  
                  <br>            
                  <form name="login" class="needs-validation" novalidate="">
                     <div class="row text-center">
                        <div class="col-md-4 mb-4">
                           <h3 class="" style="color:#337ab7 ">Autenticación</h3>
                        </div>
                     </div>                
                     <br>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-md-offset-4">  
                        <div class="col-md-4 mb-4 input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                           {!!Form::text('nombreUsuario',null,['class'=>'form-control', 'placeholder'=>'Ingrese su usuario'])!!}
                        </div>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-12 col-md-offset-4"> 
                        <div class="col-md-4 mb-4 input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                           {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su contraseña'])!!}
                           
                        </div>
               </div>
            </div>
               <br>
            <div class="col-md-10 col-md-offset-4"> 
                  <div class=" form-inline col-md-4 mb-2 text-center">
                        <button type="button" class="btn btn-success" onclick="window.location.href='{!!URL::to('/')!!}'">Volver a la Web</button>                
                        {!!Form::submit('Ingresar',['class'=>'btn btn-info','route'=>'/'])!!}                        
                  </div>
            </div>
         {!!Form::close()!!}       
      </div>
         
   </body>
   {!!Html::script('js/jquery-2.2.3.min.js')!!}
      {!!Html::script('js/responsiveslides.min.js')!!}
      {!!Html::script('js/jquery.waypoints.min.js')!!}
      {!!Html::script('js/jquery.countup.js')!!}   
      {!!Html::script('js/jquery.magnific-popup.js')!!}     
     
      {!!Html::script('js/move-top.js')!!}
      {!!Html::script('js/easing.js')!!}
      {!!Html::script('js/bootstrap.min.js')!!}
      
      <!-- {!!Html::script('js/jquery.min.js')!!} -->
      {!!Html::script('js/bootstrap2.min.js')!!}
      {!!Html::script('js/metisMenu.min.js')!!}
      {!!Html::script('js/sb-admin-2.js')!!}
</html>