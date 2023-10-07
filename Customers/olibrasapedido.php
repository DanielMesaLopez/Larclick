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
           <li class="active"><a href="olibrasa.php?id=1"> &nbsp; <span class='fa fa-shopping-cart'></span> Comprar Ahora</a></li>
          <li><a href="olibrasalista.php"> &nbsp; <span class='fa fa-cart-plus'></span> Lista de Compras</a></li>
          <li><a href="olibrasapedido.php"> &nbsp; <span class='fas fa-smile'></span> Mis Pedidos</a></li>         
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
<center><div class="planel logo_mim">Olibrasa</center></div>
<div class="w3-content w3-section" style="max-width:1400px">
   <img class="miestilo" src="../Assets/Promociones/promoolibr.png" style="width:100%"   height="300">
  <img class="miestilo" src="../Assets/Promociones/promoolibrasa.png" style="width:100%"   height="300">
 
  </div>
</center></div>

<div class="planel logo_mimo"><center><img src='../Assets/logosR/olibrasa.png' class='imgRedonda' /></center></div>

<div class="wrapper d-flex align-items-stretch">
<nav id="sidebar">
<div class="p-4 pt-5">
<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../Assets/img/larclick.jpeg);"></a>
<ul class="nav navbar-nav side-nav">
          
          <li class="active"><a href="olibrasa.php?id=1"> &nbsp; <span class='fa fa-shopping-cart'></span> Comprar Ahora</a></li>
          <li><a href="olibrasalista.php"> &nbsp; <span class='fa fa-cart-plus'></span> Lista de Compras</a></li>
          <li><a href="olibrasapedido.php"> &nbsp; <span class='fas fa-smile'></span> Mis Pedidos</a></li>         
          <li><a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-cog'></span> Configuración</a></li>
          <li><a href="logout.php"> &nbsp; <span class='fa fa-power-off'></span> Cerrar Sesión</a></li>
          
                    
                </ul>
</div>
</nav>

<main class="container">
  <span>
      <ul><li><li><li><li><li><li><li><li><li><li><li>
 <div id="page-wrapper">
            
      
      <div class="alert alert-default" style="color:white;background-color:#C70039">
         <center><h3> <span class="fas fa-smile"></span> Mis Pedidos</h3></center>
        </div>
      
      <br />
              
              <div class="table-responsive">
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%" style="color:black;background-color:#ffffff">
              <thead>
                <tr>
                 <th><center><h4>Productos</h4></center></th>
                  <th><center><h4>Restaurante</h4></center></th>
                  <th><center><h4>Observaciones</h4></center></th>               
                  <th><center><h4>Forma de Pago</h4></center></th>
          <th><center><h4>Cantidad</h4></center></th>
          <th><center><h4>Precio</h4></center></th>
          <th><center><h4>Total</h4></center></th>
                  
                 
                </tr>
              </thead>
              <tbody>
        <?php
include("config.php");
 
  $stmt = $DB_con->prepare("SELECT * FROM detallepedido where estado_pedido='Ordered' and id_cliente='$id_cliente'");
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);
      
      
      ?>
                <tr>
                  
                 <td><h4><?php echo $producto_pedido; ?></h4></td>
                  <td><h4><?php echo $estable_pedido; ?></h4></td>
                  <td><h4><?php echo $observa_pedido; ?></h4></td>                
                 <td><h4><?php echo $pago_pedido; ?></h4></td>
         <td><h4>&dollar; <?php echo $precio_pedido; ?></h4> </td>
         <td><h4><?php echo $cantidad_pedido; ?></h4></td>
         <td><h4>&dollar; <?php echo $total_pedido; ?> </h4></td>

         
         
                </tr>

               
              <?php
    }
     include("config.php");
      $stmt_edit = $DB_con->prepare("select sum(total_pedido) as totalx from detallepedido where id_cliente=:id_cliente and estado_pedido='Ordered'");
    $stmt_edit->execute(array(':id_cliente'=>$id_cliente));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
    
    echo "<tr>";
    echo "<td colspan='3' align='right'><h4>Total Precio: Incluye Domicilio ".$total=3600;
    echo "</td></h4>";
    
    echo "<td><h4>&dollar; ".$totalx=$totalx+$total;
    echo "</td></h4>";
    
    
    
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "<br />";
    
  }
  else
  {
    ?>
    
      
        <div class="col-xs-12">
          <div class="alert alert-warning">
             <h4><span class="fas fa-smile"></span> &nbsp; Su pedido llegara en 30 a 45 minutos</h4>
            </div>
        </div>
        <?php
  }
  
?>         
                </div>
            </div>           
        </div>    
    </div>
    <!-- /#wrapper -->
</tbody></table></div></div></li>
  </li>
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