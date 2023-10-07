<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Larclick</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  
  <link rel="shortcut icon" href="../Assets/img/favicon (3).ico" type="image/x-icon">
<link href="../Assets/css/circulo.css" rel="stylesheet">
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../Assets/css/EstiloS.css">

        <link rel="stylesheet" href="../Assets/css/EstiloCaa.css">
          <link rel="stylesheet" href="../Assets/css/boostrapp.css">

  <link rel="stylesheet" href="../Assets/css/font-awesome.css">
  <script src="../Assets/js/jquery.flexslider.js"></script>
  <script src="../Assets/js/main.js"></script>


   <!-- Custom styles for this template -->
  <link href="../Assets/css/EstiloPo.css" rel="stylesheet">
  <link href="../Assets/css/heroic-features.css" rel="stylesheet">
    
   
    
<!-- JQUERY este es -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<!-- <script src='http://code.jquery.com/jquery-migrate-1.0.0.js'/>-->

 

</head>
<body background="../Assets/img/madera.jpg">
  
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
        <img alt="Brand" src="Assets/menu/tablita.png" id="logo"  height="40px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="cccentronorte.php"><i class="glyphicon glyphicon-cutlery"></i> Menú</a></li>          
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bienvenidos y Bienvenidas</a></li>
        
      </ul>
    </div>
  </div>
</nav>                        
      


<div>
<center><div class="planel logo_mim"><img src='../Assets/logosR/tablitacriolla.png' class='imgRedonda' /></center></div>
<div class="w3-content w3-section" style="max-width:1400px">
  <img class="miestilo" src="../Assets/Promociones/promotablita.jpg" style="width:100%"   height="300">
  <img class="miestilo" src="../Assets/Promociones/promotablita2.jpg" style="width:100%"   height="300">
  <img class="miestilo" src="../Assets/Promociones/promotablita3.jpg" style="width:100%"   height="300">
 
  </div>
</center></div>

<div class="planel logo_mimo"></div>




<main class="container">
  <span>
      <ul>
  <div class="row text-center"> 


            <style>/* Contenedor general */
#slider-wrapper {
  position: relative;
overflow: hidden;
  width: 800px;
  max-width: 100%;
  margin: 0 auto;
  padding: 0 10px;
  font-family: arial, sans-serif;
  font-size: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* Contenedor slider */
#slider { 
  position: relative;
  width: 100%;
  padding-bottom: 80%; /* Aspect ratio */
  overflow: hidden;
  border:10px solid #333;
  border-radius: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#slider > a {
  position:absolute;
  top:0;
  left:0;
  width: 100%;
  min-height: 100%;
}
/* Ajuste de las imágenes */
#slider img {
  width: 100%;
max-width: 100% !important;
  min-height: 100%;
  position: relative;
  margin:0;
  padding:0; 
  border:0;
}
/* Texto que acompaña a cada imagen */
#slider p {
  position: absolute;
  bottom: 5%;
  left: 0;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  width: 100%;
  height: 18px;
  margin:0;
  padding: 5px 0;
  border-radius: 0 20px 20px 0;
  color: #eee;
  background: #333;
  font-size: 18px;
  line-height: 18px;
  text-align:center;
}
/* Flechas de navegación */
a.mas, a.menos {
position: absolute;
top: 50%;
left: 0px;
z-index: 10;
width: 20px;
height: 30px;
text-align: center;
line-height: 30px;
font-size: 30px;
color: white;
background: #333;
text-decoration: none;
transition: .5s margin ease;
}
a.mas {
left: 100%;
margin-left: 100px;
}
#slider-wrapper:hover a.mas {
margin-left: -40px;
}
a.menos {
left: 0;
margin-left: -100px;
}
#slider-wrapper:hover a.menos {
margin-left: 10px;
}</style><script>$(function(){
  $('#slider a:gt(0)').hide();
  var interval = setInterval(changeDiv, 90000);
  function changeDiv(){
      $('#slider a:first-child').fadeOut(1000)
      .next('a').fadeIn(1000)
      .end().appendTo('#slider');
  }
  $('.mas').click(function(){
    changeDiv();
    clearInterval(interval);
    interval = setInterval(changeDiv, 90000);
  });
  $('.menos').click(function(){
    $('#slider a:first-child').fadeOut(1000);
    $('#slider a:last-child').fadeIn(1000).prependTo('#slider');
    clearInterval(interval);
    interval = setInterval(changeDiv, 90000);
  });
});</script><br>
<br>
<div id="slider-wrapper"><div id="slider"><a href="javascript:void();" style="display: block;"><img src="../Assets/menu/tabla2.jpeg"></a><a href="javascript:void();" style="display: none;"><img src="../Assets/menu/tabla1.jpeg"></a></div><a class="mas" href="javascript:void();">›</a><a class="menos" href="javascript:void();">‹</a></div>

       





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