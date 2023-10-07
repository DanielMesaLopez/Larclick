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
		
		$stmt_select = $DB_con->prepare('SELECT image_prod FROM productos WHERE prod_id =:prod_id');
		$stmt_select->execute(array(':prod_id'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("item_images/".$imgRow['image_prod']);
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM productos WHERE prod_id =:prod_id');
		$stmt_delete->bindParam(':prod_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: items.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larclick.com</title>
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
                <a class="navbar-brand" href="index.php">Larclick-Panel de Administrador</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"> &nbsp; &nbsp; &nbsp; Inicio</a></li>
					<li><a data-toggle="modal" data-target="#uploadModal"> &nbsp; &nbsp; &nbsp; Cargar Productos</a></li>
					<li class="active"><a href="items.php"> &nbsp; &nbsp; &nbsp; Gestion Productos</a></li>
					<li><a href="customers.php"> &nbsp; &nbsp; &nbsp; Gestion Clientes</a></li>
					<li><a href="orderdetails.php"> &nbsp; &nbsp; &nbsp; Detallle del Pedido</a></li>
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
                            
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
	
			 <div class="alert alert-danger">
                        
                          <center> <h3><strong>Gestión de productos</strong> </h3></center>
						  
						  </div>
						  
						  <br />
						  
						  <div class="table-responsive">
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Imagen</th>
                  <th>Nombre del producto</th>
                  <th>Descripción del producto</th>
                  <th>Restaurante</th>
				  <th>Precio</th>
				  <th>Fecha Agregada</th>
                  <th>Accion</th>
                 
                </tr>
              </thead>
              <tbody>
			  <?php
include("config.php");
	$stmt = $DB_con->prepare('SELECT * FROM productos');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                <tr>
                  <td>
				<center> <img src="item_images/<?php echo $image_prod; ?>" class="img img-rounded"  width="50" height="50" /></center>
				 </td>
                 <td><?php echo $nombre_prod; ?></td>
                 <td><?php echo $detalle_prod; ?></td>
                 <td><?php echo $estable_prod; ?></td>
				 <td>&dollar; <?php echo $precio_prod; ?></td>
				 <td><?php echo $fecha_prod; ?></td>
				 
				 <td>
				
				 
				
				 <a class="btn btn-info" href="edititem.php?edit_id=<?php echo $row['prod_id']; ?>" title="click for edit" onclick="return confirm('Estas seguro de editar este producto?')"><span class='glyphicon glyphicon-pencil'></span> Editar Producto</a> 
				
                  <a class="btn btn-danger" href="?delete_id=<?php echo $row['prod_id']; ?>" title="click for delete" onclick="return confirm('Estas seguro de eliminar este producto?')"><span class='glyphicon glyphicon-trash'></span> Eliminar Producto</a>
				
                  </td>
                </tr>
               
              <?php
		}
		echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "<br />";
                        
        
	
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
