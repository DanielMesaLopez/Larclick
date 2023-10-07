<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="google-site-verification" content="LDyfnhVw9oiynq9ODcrer_KOSpgRetZvNYQicIucBbU">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Larclick</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="Assets/img/favicon (3).ico" type="image/x-icon">




 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="Assets/css/EstiloS.css">

  <link rel="stylesheet" href="Assets/css/flexslider.css">
  <link rel="stylesheet" href="Assets/css/font-awesome.css">
 <script src="Assets/js/jquery-3.1.0.min.js"></script>
  <script src="Assets/js/jquery.flexslider.js"></script>
  <script src="Assets/js/main.js"></script>

   <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="Assets/css/EstiloPo.css" rel="stylesheet">
      <link href="Assets/css/bootstrap.min.css" rel="stylesheet">  
  <!-- Custom styles for this template -->
 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
 

 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>
<body>
   
 
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="Assets/img/logo.png" id="logo"  height="35px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>

        <li><a href="forma.php">Forma Parte</a></li>
        <li><a href="cccentronorte.php"><i class="glyphicon glyphicon-cutlery"></i> Menú</a></li>
        <li class="dropdown">
          <a href="#features-sec"  data-toggle="modal" data-target="#ln">Inicia Sesión</a>
          
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="#features-sec"  data-toggle="modal" data-target="#su"><i class="glyphicon glyphicon-user"></i> Regístrate</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="flexslider">
    <ul class="slides">
      
      
      <li>
        <img src="Assets/img/promoolibrasa.jpg">        
      </li>
	  <li>
        <img src="Assets/img/promoindus.jpg">        
      </li>
      <li>
        <img src="Assets/img/promochefg.jpg">       
      </li>
       <li>
        <img src="Assets/img/promosopas.jpg">       
      </li>
      <li>
        <img src="Assets/img/elpedido.png">       
      </li>        
    </ul>
  </div>

   <div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-window-close" aria-hidden="true"></i></span></button>
                <h4 class="modal-title" id="myModalLabel">Registro del Cliente</h4>
              </div>
              <div class="modal-body">
            
        
         <form role="form" method="post" action="register.php">
                   <fieldset>
          
              <div class="form-group">
                                <input class="form-control" placeholder="Nombres" name="rnombre_cliente" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="Apellidos" name="rapellido_cliente" type="text" required>
              </div>

              <div class="form-group">
                                <input class="form-control" placeholder="Cedula de Ciudadania" name="rcedula_cliente" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="Dirección de Residencia" name="rdireccion_cliente" type="text" required>
              </div>

              <div class="form-group">
                                <input class="form-control" placeholder="Barrio de Residencia" name="rbarrio_cliente" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="Teléfono y/o Celular" name="rcelular_cliente" type="text" required>
              </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Correo Electronico" name="rcorreo_cliente" type="email" required>
              </div>
              
              <div class="input-group">
                                <input class="form-control" placeholder="Contraseña" id="rpassword_cliente" name="rpassword_cliente" type="password" required>
                                <div class="input-group-addon">
            <button id="show_password" class="btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
          </div>
              </div>
           
           </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="register"><h5>Registrarse</h5></button>
        
         <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal"><h5>Cancelar</h5></button>
           </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Script -->


     <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-window-close" aria-hidden="true"></i></span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Acceso del Cliente</h4>
              </div>
              <div class="modal-body">
            
        
         <form role="form" method="post" action="userlogin.php">
                   <fieldset>
          
            
                            <div class="form-group">
                                <input class="form-control" placeholder="Escriba su Número de Celular" name="celular_cliente" type="text" required>
              </div>
              
              <div class="input-group">
                                <input class="form-control" placeholder="Contraseña" id="password_cliente" name="password_cliente" type="password" required>
                                <div class="input-group-addon">
            <button id="show_password" class="btn-primary" type="button" onclick="verPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
          </div>
              </div>
           
           
           </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="user_login"><h5>Iniciar Sesión</h5></button>
        
         <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal"><h5>Cancelar</h5></button>
           </form>
           
              </div>
            </div>
          </div>
        </div>
    
    <div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Credenciales de Administrador</h4>
              </div>
              <div class="modal-body">
            
        
         <form role="form" method="post" action="adminlogin.php">
                   <fieldset>
          
            
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="admin_username" type="text" required>
              </div>
              
              <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" type="password" required>
              </div>
           
           </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="admin_login">Iniciar Sesión</button>
        
         <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancelar</button>
           </form>
              </div>
            </div>
          </div>
        </div>
     <br />
       <br />
       <br />
<!-- Script -->
      
    <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <h2>Importante:</h2>         
        <p ><a href="Terminos.php">Terminos y condiciones</a></p>
        <p><a href="Terminos.php">Politica de datos</a></p>
        <p><a href="Terminos.php">Propiedad intelectual</a></p>
        <p><a href="Terminos.php">Aviso de Cumplimiento</a></p>
        <p><a href="#">Camara de Comercio Tunja</a></p>
        </div>
          <div class="col-md-3">
          <h2>Servicios:</h2>
          <p><a href="#">Mensajero Larck</a></p>
            <p><a href="#">Restaurantes</a></p>             
             <p><a href="#">Licorera</a></p>             
        </div>
        <div class="col-md-3">
          <h2>Atención al cliente:</h2>
         <p>
         <a href="https://mail.google.com/mail"><i class="fas fa-envelope mr-3"></i> larclick.com@gmail.com</a></p>
        <p>
         <a href="tel:3117990045"><i class="fas fa-phone mr-3"></i> 3117990045</a></p>
        <p>
         <a href="https://api.whatsapp.com/send?phone=573117992580"><i class="fab fa-whatsapp mr-3"></i> 3117992580</a></p>
         <p><a href="#features-sec"  data-toggle="modal" data-target="#an"><i class="glyphicon glyphicon-log-in"></i> Administrador</a></p>
      </div>
         <div class="col-md-3">
          <h2>Descargue Nuestra App</h2>
          <p class="download-icon"><img src="Assets/img/play.png" height="100px"></p>
          <h2>Síguenos</h2>
          <p class="social"><a href="https://www.facebook.com/103279138051966"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/larclickpedido/?hl=es-la"><i class="fab fa-instagram"></i></a>
          <a href="https://www.larclick.com.co"><i class="fab fa-google-plus-square"></i></a></p>
        </div>
        <hr>
        <div class="col-md-12">
          <p>@2020. Derechos Reservados de Larclick.com.co</p>
        </div>
      </div>
    </div>
  </footer>
<script type="text/javascript">
function mostrarPassword(){
    var cambio = document.getElementById("rpassword_cliente");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
  
  $(document).ready(function () {
  //CheckBox mostrar contraseña
  $('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
  });
});
</script>
<script type="text/javascript">
function verPassword(){
    var cambio = document.getElementById("password_cliente");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
  
  $(document).ready(function () {
  //CheckBox mostrar contraseña
  $('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
  });
});
</script>
   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>