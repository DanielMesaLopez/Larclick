<?php
session_start();

if(!$_SESSION['celular_cliente'])
{

    header("Location: ../Portal.php");
}

?>

<?php
 include("config.php");
 extract($_SESSION); 
        $stmt_edit = $DB_con->prepare('SELECT * FROM cliente WHERE celular_cliente =:celular_cliente');
        $stmt_edit->execute(array(':celular_cliente'=>$celular_cliente));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
        
        ?>
        
        <?php
 include("config.php");
          $stmt_edit = $DB_con->prepare("select sum(total_pedido) as total from detallepedido where id_cliente=:id_cliente and estado_pedido='Ordered'");
        $stmt_edit->execute(array(':id_cliente'=>$id_cliente));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
        
        ?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Larclick</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="../Assets/img/favicon (3).ico" type="image/x-icon">

 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../Assets/css/EstiloS.css">

        <link rel="stylesheet" href="../Assets/css/EstiloCaa.css">
          <link rel="stylesheet" href="../Assets/css/boostrapp.css">

  <link rel="stylesheet" href="../Assets/css/flexslider.css">
  <link rel="stylesheet" href="../Assets/css/font-awesome.css">
  <script src="../Assets/js/jquery.flexslider.js"></script>
  <script src="../Assets/js/main.js"></script>

   <!-- Custom styles for this template -->
  <link href="../Assets/css/EstiloPo.css" rel="stylesheet">
  <link href="../Assets/css/heroic-features.css" rel="stylesheet">
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/css/pagina.css" rel="stylesheet">
 

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
      <a class="navbar-brand" href="../Portal.php">
        <img alt="Brand" src="../Assets/img/logo.png" id="logo"  height="35px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bienvenid@:  <?php echo $nombre_cliente; ?> <?php echo $apellido_cliente; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#setAccount"><i class="fa fa-cog"></i> Configuración</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                        </ul></li></ul></div></div></nav>                                      
      


<div>
<div class="planel logo_mim"><center>Publicidad</center></div>
<div class="w3-content w3-section" style="max-width:1400px">
  <img class="miestilo" src="../Assets/img/laclick.gif" style="width:100%"   height="300">
  <img class="miestilo" src="../Assets/Promociones/promopipe.png" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/promotablita22.jpg" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/promopatacon.png" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/promoolibrasa.png" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/promoadefo.png" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/portadasopas.png" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/promogrill.jpg" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/promochef2.jpg" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/promoadere.png" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/promoparrilla2.jpg" style="width:100%"  height="300"> 
 <img class="miestilo" src="../Assets/Promociones/promopradera.jpg" style="width:100%"  height="300"> 
  
</div>
</center></div>
<div class="planel logo_mimo"><center>Establecimientos</center></div>

<div class="wrapper d-flex align-items-stretch">
<nav id="sidebar">
<div class="p-4 pt-5">
<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../Assets/img/larclick.jpeg);"></a>
<ul class="list-unstyled components mb-5">
<li class="active">
<a >Categorías</a>
<ul class="collapse list-unstyled" id="homeSubmenu">
</ul>
</li>
<li>
<a href="#">Mensajero Larck</a>
</li>
<li>
<a href="#">Licores</a>
</li>
<li>
<a href="#">Comida Vegetariana</a>
</li>
<li>
<a href="#">Comida China</a>
</li>
<li>
<a href="#">Comida Mexicana</a>
</li>
<li>
<a href="#">Comida Rápida</a>
</li>
<li>
<a href="#">Pizzas</a>
</li>
<li>
<a href="#">Pescados</a>
</li>
<li>
<a href="#">Platos a la Carta</a>
</li>
<li>
<a href="#">Asaderos</a>
</li>
<li>
<a href="#">Sándwiches</a>
</li>

</ul>
</div>
</nav>


<main class="container">
  <span>
      <ul><br>
  <div class="row text-center">
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/mensajero.png" alt="">
          <div class="card-body">       
<div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 9 && hora<= 21){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 22 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 8){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
            <P ALIGN="justify"> <h4>Solicita lo que quieras</h4></P>
            <P ALIGN="justify"> <h4>Horario: 9am - 10pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio desde: $4000</h4></P>
          </div>
          <div class="card-footer">
            <a href="mensajero.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/Chupelupe.png" alt="">
          <div class="card-body">       
<div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 9 && hora<=19 ){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 20 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 8){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
             <P ALIGN="justify"> <h4>Zona Bosque</h4></P>
            <P ALIGN="justify"> <h4>Horario: 9am a 8pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="chupelupe.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/liptus.png" alt="">
          <div class="card-body">       
<div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 9 && hora<=19 ){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 20 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 8){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
             <P ALIGN="justify"> <h4>Zona Centro</h4></P>
            <P ALIGN="justify"> <h4>Horario: 9am a 8pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="liptus.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/tacoriendo.png" alt="">
          <div class="card-body">       
<div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 17 && hora<= 20){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 21 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 16){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
            <P ALIGN="justify"> <h4>Barrio: Fuente</h4></P>
            <P ALIGN="justify"> <h4>Horario: 5pm -9pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="tacoriendo.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/grillbrasa.png" alt="">
          <div class="card-body">       
<div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 12 && hora<= 14){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 15 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 11){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
            <P ALIGN="justify"> <h4>Zona C.Centro Norte</h4></P>
            <P ALIGN="justify"> <h4>Horario: 12pm - 3pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="GrillBrasa&Sabor.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/pradera.png" alt="">
          <div class="card-body">
             <div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 12 && hora<= 16){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 17 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 11){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
           <P ALIGN="justify"> <h4>JJ.Camacho</h4></P>
          <P ALIGN="justify"> <h4>Horario: 12pm - 5pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="Pradera.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/LaTerraza.png" alt="">
          <div class="card-body">
            <div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 12 && hora<= 16){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 17 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 11){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
          <P ALIGN="justify"> <h4>Zona Norte</h4></P>
         <P ALIGN="justify"> <h4>Horario: 12pm - 5pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="LaTerraza.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/pipecompany.png" alt="">
          <div class="card-body">
                <div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 11 && hora<= 18){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 19 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 10){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
            <P ALIGN="justify"> <h4>Barrio: Fuente</h4></P>
           <P ALIGN="justify"> <h4>Horario: 11pm - 7pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="PipeCompany.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/parrilladalatina.png" alt="">
         <div class="card-body">
                <div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 11 && hora<= 18){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 19 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 10){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
            <P ALIGN="justify"> <h4>Barrio: Fuente</h4></P>
           <P ALIGN="justify"> <h4>Horario: 11pm - 7pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="ParrilladaLatina.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/tablitacriolla.png" alt="">
         <div class="card-body">       
<div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 12 && hora<= 16){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 17 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 11){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
             <P ALIGN="justify"> <h4>Zona C.Centro Norte</h4></P>
            <P ALIGN="justify"> <h4>Horario: 12pm - 5pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="TablitaCriolla.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/aderezoparrilla.png" alt="">
          <div class="card-body">       
<div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 12 && hora<= 16){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 17 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 11){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
             <P ALIGN="justify"> <h4>Barrio: Maldonado</h4></P>
            <P ALIGN="justify"> <h4>Horario: 12pm - 5pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="AderezoParrilla.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../Assets/logosR/aderezo.png" alt="">
        <div class="card-body">       
<div style="background: #fff; text-align: center;">
<script type="text/javascript">var a = new Date();var hora = a.getHours();if(hora >= 12 && hora<= 16){document.write("<img border='0' src='../Assets/img/abierto.png'/>")};if(hora >= 17 && hora<= 24){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};if(hora >= 1 && hora<= 11){document.write("<img border='0' src='../Assets/img/cerrado.png'/>")};</script>
</div>
             <P ALIGN="justify"> <h4>Barrio: Surinama</h4></P>
            <P ALIGN="justify"> <h4>Horario: 12pm - 5pm</h4></P>
           <P ALIGN="justify">  <h4>Entrega: 30 a 45 minutos</h4></P>
             <P ALIGN="justify">  <h4>Domicilio: $3600</h4></P>
          </div>
          <div class="card-footer">
            <a href="AderezoFood.php?id=1" class="btn btn-primary"><h4><i class="fab fa-searchengin"></i>Menú</h4></a>
          </div>   
        </div>
      </div>            

    </div>
    <div class="paginacion">
      <ul>       
          <li><a href="ListResta.php"  class="active">1</a></li>
          <li><a href="ListRestau.php" class="active">2</a></li>
          </ul>        
      </div>
  </li>
</li>
</ul>
  </span>
</main>
</div>




<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("miestilo");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 6000); // Change image every 2 seconds
}
</script>  


 <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <h2>Importante:</h2>         
        <p ><a href="#!">Terminos y condiciones</a></p>
        <p><a href="#!">Politica de datos</a></p>
        <p><a href="#!">Aviso de Cumplimiento</a></p>
        <p><a href="#!">Camara de Comercio Tunja</a></p>
      </div>
          <div class="col-md-3">
          <h2>Servicios:</h2>
            <p><a href="#">Restaurantes</a></p>
            <p><a href="#">Licorera</a></p>
            <p><a href="#">Mensajero Larck</a></p>
        </div>
        <div class="col-md-3">
          <h2>Atención al cliente:</h2>
         <p>
         <a href="https://mail.google.com/mail"><i class="fas fa-envelope mr-3"></i> larclick.com@gmail.com</a></p>
        <p>
         <a href="tel:3117990045"><i class="fas fa-phone mr-3"></i> 3117990045</a></p>
        <p>
         <a href="https://api.whatsapp.com/send?phone=573117992580"><i class="fab fa-whatsapp mr-3"></i> 3117992580</a></p>
      </div>
         <div class="col-md-3">
          <h2>Descargue Nuestra App</h2>
          <p class="download-icon"><img src="../Assets/img/play.png" height="100px"></p>
          <h2>Síguenos</h2>
          <p class="social"><a href="https://www.facebook.com/103279138051966"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/larclickpedido/?hl=es-la"><i class="fab fa-instagram"></i></a>
          <a href="www.larclick.com.co"><i class="fab fa-google-plus-square"></i></a></p>
        </div>
        <hr>
        <div class="col-md-12">
          <p>@2020. Derechos Reservados de Larclick.com.co</p>
        </div>
      </div>
    </div>
  </footer>

   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>