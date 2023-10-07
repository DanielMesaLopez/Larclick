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
        <link href="../Assets/css/circulo.css" rel="stylesheet">
           <link href="../Assets/css/Prueba.css" rel="stylesheet">


<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />-->
  
  <script type="text/javascript" src="jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.1.5" media="screen" />
  
  <link rel="stylesheet" type="text/css" href="jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="jquery.fancybox-buttons.js?v=1.0.5"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="jquery.fancybox-thumbs.js?v=1.0.7"></script>
 
 <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>
  

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
      <ul class="nav navbar-nav">
        <li><a href="../Portal.php">Inicio</a></li>
       
        <li><a href="ListResta.php"><i class="fa fa-reply"></i> Restaurantes</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class='fa fa-shopping-cart'></span> Carrito <i class="glyphicon glyphicon-menu-down"></i></a>
          <ul class="dropdown-menu">
           <li class="active"><a href="AderezoParrilla.php?id=1"> &nbsp; <span class='fa fa-shopping-cart'></span> Comprar Ahora</a></li>
          <li><a href="AderezoParrillalista.php"> &nbsp; <span class='fa fa-cart-plus'></span> Lista de Compras</a></li>
          <li><a href="AderezoParrillapedido.php"> &nbsp; <span class='fas fa-smile'></span> Mis Pedidos</a></li>         
          <li><a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-cog'></span> Configuración</a></li>
          <li><a href="logout.php"> &nbsp; <span class='fa fa-power-off'></span> Cerrar Sesión</a></li>
            </ul>
      </ul>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i> Bienvenido:  <?php echo $nombre_cliente; ?> <?php echo $apellido_cliente; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#setAccount"><i class="fa fa-cog fa-spin fa-1x fa-fw"></i> Configuración</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>                    
      </ul>
    </div>
  </div>
</nav>


<div>
<center><div class="planel logo_mim">El Aderezo Parrilla</center></div>
<div class="w3-content w3-section" style="max-width:1400px">
   <img class="miestilo" src="../Assets/Promociones/promoadep.png" style="width:100%"   height="300">
  </div>
</center></div>
<div class="planel logo_mimo"><center><img src='../Assets/logosR/aderezoparrilla.png' class='imgRedonda' /></center></div>


<div class="wrapper d-flex align-items-stretch">
<nav id="sidebar">
<div class="p-4 pt-5">
<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../Assets/img/larclick.jpeg);"></a>
<ul class="nav navbar-nav side-nav">
          
          <li class="active"><a href="AderezoParrilla.php?id=1"> &nbsp; <span class='fa fa-shopping-cart'></span> Comprar Ahora</a></li>
          <li><a href="AderezoParrillalista.php"> &nbsp; <span class='fa fa-cart-plus'></span> Lista de Compras</a></li>
          <li><a href="AderezoParrillapedido.php"> &nbsp; <span class='fas fa-smile'></span> Mis Pedidos</a></li>         
          <li><a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-cog'></span> Configuración</a></li>
          <li><a href="logout.php"> &nbsp; <span class='fa fa-power-off'></span> Cerrar Sesión</a></li>
                </ul>
</div>
</nav>

<main class="container">
  <span>
      <ul><li><li><li><li><li><li><li><li><li><li><li>

      <a class='btn btn-primary btn-sm'  href='AderezoParrilla.php?id=1'><h5><span class='fa fa-shopping-cart'></span> Platos a la Carta</h5></a>
      <a class='btn btn-primary btn-sm'  href='Adeban.php?id=1'><h5><span class='fa fa-shopping-cart'></span> Bandejas</h5></a>
      <a class='btn btn-primary btn-sm'  href='Adepol.php?id=1'><h5><span class='fa fa-shopping-cart'></span> Pollo</h5></a>     
      <a class='btn btn-primary btn-sm'  href='Adecomi.php?id=1'><h5><span class='fa fa-shopping-cart'></span> Comida Rapida</h5></a>
      <a class='btn btn-primary btn-sm'  href='Adesand.php?id=1'><h5><span class='fa fa-shopping-cart'></span> Sandwinch y Otros</h4></a>
      <a class='btn btn-primary btn-sm'  href='Adecomb.php?id=1'><h5><span class='fa fa-shopping-cart'></span> Combos</h5></a>      
      <a class='btn btn-primary btn-sm'  href='Adebebi.php?id=1'><h5><span class='fa fa-shopping-cart'></span> Bebidas</h5></a>
      
      <li><div id="contenedor">        
     
     <img src="../Assets/img/portadacarta.png">
      <div id="page"><li>       

<?php

$query1=mysql_connect("s102.servername.online","larcl953_larclic","1121905051");
mysql_select_db("larcl953_store",$query1);

$start=0;
$limit=8;

if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $start=($id-1)*$limit;
}

$query=mysql_query("select * from productos where rest_id=6 and tipo_prod='PC' LIMIT $start, $limit");


while($query2=mysql_fetch_array($query))
{
  
  echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#000000;'>
            <div class='panel-heading' style='color:white;background-color :#FF0000;'>
            <center> 
            <h4 class='font-impact font-red'>".$query2['nombre_prod']."</h4>
            </center>
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons' href='../Admin/item_images/".$query2['image_prod']."' data-fancybox-group='button' title='Page ".$id."- ".$query2['nombre_prod']."'>
          
          <img src='../Admin/item_images/".$query2['image_prod']."' class='img img-thumbnail'  style='width:180px;height:140px;' />
          </a>        
        
          <center><h4>  ".$query2['detalle_prod']." </h4></center>
          <center><h3> Precio: &dollar; ".$query2['precio_prod']." </h3></center>    
          
                    <a class='btn btn-block btn-danger' href='AderezoPDetalle.php?cart=".$query2['prod_id']."'><h4><span class='fa fa-shopping-cart'></span> Añadir al carrito</h4></a>
            </div>
          </div>
        </div>";
      
  
}

echo "<div class='container'>";
echo "</div>";
$rows=mysql_num_rows(mysql_query("select * from productos"));
$total=ceil($rows/$limit);
echo "<br /><ul class='pager'>";
if($id>1)
{
  echo "<li><a style='color:white;background-color : #033c73;' href='?id=".($id-1)."'>Pagina anterior</a><li>";
}
if($id!=$total)
{
  echo "<li><a style='color:white;background-color : #033c73;' href='?id=".($id+1)."' class='pager'>Siguiente página</a></li>";
}
echo "</ul>";

?>         
          <br />            
                </div>
            </div>    
        </div>  </li> 
    </div>
    <!-- /#wrapper -->
   
     </div></li>






  </li></li></li></li></li></li></li></li></li></li>
</li>
</ul>
  </span>
</main>
</div>


<!-- Mediul Modal -->
        <div class="modal fade" id="setAccount" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Configuración</h2>
              </div>
              <div class="modal-body">      
        
        <form enctype="multipart/form-data" method="post" action="settings.php">
                   <fieldset>        
            
                            <p>Nombres:</p>
                            <div class="form-group">
              
                                <input class="form-control" placeholder="Nombre" name="nombre_cliente" type="text" value="<?php  echo $nombre_cliente; ?>" required>
                           
               
              </div>
              
              
              <p>Apellidos:</p>
                            <div class="form-group">
              
                                <input class="form-control" placeholder="Apellido" name="apellido_cliente" type="text" value="<?php  echo $apellido_cliente; ?>" required>               
              </div>

              <p>Cedula de Ciudadania:</p>
                            <div class="form-group">
              
                                <input class="form-control" placeholder="Cedula de Ciudadania" name="cedula_cliente" type="text" value="<?php  echo $cedula_cliente; ?>" required>               
              </div>
              
              <p>Direccion de Residencia:</p>
                            <div class="form-group">
              
                                <input class="form-control" placeholder="Direccion de Residencia" name="direccion_cliente" type="text" value="<?php  echo $direccion_cliente; ?>" required>              
              </div>

              <p>Barrio de Residencia:</p>
                            <div class="form-group">
              
                                <input class="form-control" placeholder="Barrio de Residencia" name="barrio_cliente" type="text" value="<?php  echo $barrio_cliente; ?>" required>              
              </div>

              <p>Celular:</p>
                            <div class="form-group">
              
                                <input class="form-control" placeholder="Celular" name="celular_cliente" type="text" value="<?php  echo $celular_cliente; ?>" required>      
               
              </div>
              
              <p>Contraseña:</p>
                            <div class="form-group">
              
                                <input class="form-control" placeholder="Contraseña" name="password_cliente" type="password" value="<?php  echo $password_cliente; ?>" required>              
              </div>
              
              <div class="form-group">
              
                                <input class="form-control hide" name="id_cliente" type="text" value="<?php  echo $id_cliente; ?>" required>                        
               
              </div>    
           
           </fieldset>      
              </div>
              <div class="modal-footer">               
                <button class="btn btn-block btn-success btn-md" name="user_save">Guardar</button>     
         <button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancelar</button>  
           </form>
              </div>
            </div>
          </div>
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
        <p><a href="#!">SIC</a></p>
      </div>
          <div class="col-md-3">
          <h2>Servicios:</h2>
            <p><a href="#">Restaurantes</a></p>
             <p><a href="#">Droguerias</a></p>
             <p><a href="#">Cerrajería</a></p>
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
          <p class="social"><a href="https://m.facebook.com/larclick.com.co/"><i class="fab fa-facebook-square"></i></a>
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

  <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>

   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>