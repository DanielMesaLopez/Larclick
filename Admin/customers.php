<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?>
<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM cliente WHERE id_cliente =:id_cliente');
		$stmt_delete->bindParam(':id_cliente',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: customers.php");
	}

?>

<?php

	require_once 'config.php';
	
	if(isset($_GET['id_pedido']))
	{
		
		
		
	
		$stmt_delete = $DB_con->prepare('update detallepedido set estado_pedido="Ordered_Finished"  WHERE id_cliente =:id_cliente and estado_pedido="Ordered"');
		$stmt_delete->bindParam(':id_cliente',$_GET['id_pedido']);
		$stmt_delete->execute();
		
		header("Location: customers.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larclick</title>
	  <link rel="shortcut icon" href="../Assets/img/favicon (3).ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/datatables.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Panel de Administrador</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"> &nbsp; &nbsp; &nbsp; Inicio</a></li>
					<li><a data-toggle="modal" data-target="#uploadModal"> &nbsp; &nbsp; &nbsp; Subir Productos</a></li>
					<li><a href="items.php"> &nbsp; &nbsp; &nbsp; Gestion Producto</a></li>
					<li class="active"><a href="customers.php"> &nbsp; &nbsp; &nbsp; Gestion de cliente</a></li>
					<li><a href="orderdetails.php"> &nbsp; &nbsp; &nbsp; Detalle de la orden</a></li>
					<li><a href="logout.php"> &nbsp; &nbsp; &nbsp; Salir</a></li>
					
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php   extract($_SESSION); echo $admin_username; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            
			
	
			 <div class="alert alert-danger">
                        
                          <center> <h3><strong>Gestion Clientes</strong> </h3></center>
						  
						  </div>
						  
						  <br />
						  
						  <div class="table-responsive">
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Correo del cliente</th>
                  <th>Nombre</th>
                  <th>Cedula</th>
				  <th>Direccion</th>
				  <th>Barrio</th>
				  <th>Celular</th>
                  <th>Actions</th>
                 
                </tr>
              </thead>
              <tbody>
			  <?php
include("config.php");
	$stmt = $DB_con->prepare('SELECT * FROM cliente');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                <tr>
                  
                 <td><?php echo $correo_cliente; ?></td>
				 <td><?php echo $nombre_cliente; ?> <?php echo $apellido_cliente; ?></td>
				 <td><?php echo $cedula_cliente; ?></td>
				 <td><?php echo $direccion_cliente; ?></td>
				 <td><?php echo $barrio_cliente; ?></td>
				 <td><?php echo $celular_cliente; ?></td>
				 
				 <td>
				
				 
				
				 <a class="btn btn-success" href="view_orders.php?view_id=<?php echo $row['id_cliente']; ?>"><span class='glyphicon glyphicon-shopping-cart'></span> Ver Pedidos</a> 
				  <a class="btn btn-warning" href="?id_pedido=<?php echo $row['id_cliente']; ?>" title="click for delete" onclick="return confirm('¿Estás segura de restablecer los artículos del cliente ordenados?')">
				  <span class='glyphicon glyphicon-ban-circle'></span>
				  Limpiar orden</a>
				 <a class="btn btn-primary" href="previous_orders.php?previous_id=<?php echo $row['id_cliente']; ?>"><span class='glyphicon glyphicon-eye-open'></span> Ver ordenes anteriores</a> 
				
				
                  <a class="btn btn-danger" href="?delete_id=<?php echo $row['id_cliente']; ?>" title="click for delete" onclick="return confirm('¿Estás segura de eliminar a esta cliente?')">
				  <span class='glyphicon glyphicon-trash'></span>
				  Borrar Cuenta</a>
				
                  </td>
                </tr>
               
              <?php
		}
		echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "<br />";
		echo '<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                       &copy 2020 Larclick 

						</p>
                        
                    </div>
	</div>';
	
		echo "</div>";
	}
	else
	{
		?>
		
			
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ...
            </div>
        </div>
        <?php
	}
	
?>
		
	</div>
	</div>
	
	<br />
	<br />
           

           
        </div>
		
		
		
    </div>
    <!-- /#wrapper -->

	
	<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Subir Productos</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="additems.php">
                   <fieldset>
					
					       <p>Codigo Restaurante:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Codigo" name="rest_id" type="text" required>
                           
							 
							</div>

						
                            <p>Producto:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Nombre del Producto" name="nombre_prod" type="text" required>
                           
							 
							</div>
							
							
							<p>Descripción:</p>
                            <div class="form-group">
							
                                <input id="form-control" class="form-control" placeholder="Descripción del Producto" name="detalle_prod" type="text" required>
                           
							 
							</div>

							<p>Restaurante:</p>
                            <div class="form-group">
							
                                <input id="form-control" class="form-control" placeholder="Nombre del Restaurante" name="estable_prod" type="text" required>
                           
							 
							</div>

							<p>Tipo Producto:</p>
                            <div class="form-group">
							
                                <input id="form-control" class="form-control" placeholder="Tipo de Producto" name="tipo_prod" type="text" required>
                           
							 
							</div>					
							
							
							<p>Precio:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Precio" name="precio_prod" type="text" required>
                           
							 
							</div>
							
							
							<p>Cambiar Imagen:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="image_prod" accept="image/*" required/>
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Guardar</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancelar</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
		
		<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
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
</body>
</html>
