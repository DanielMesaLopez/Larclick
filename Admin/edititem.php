<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?>
<?php

	error_reporting( ~E_NOTICE );
	
	require_once 'config.php';
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM productos WHERE prod_id =:prod_id');
		$stmt_edit->execute(array(':prod_id'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: items.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$nombre_prod = $_POST['nombre_prod'];
        $precio_prod = $_POST['precio_prod'];
        $detalle_prod = $_POST['detalle_prod'];
        $tipo_prod = $_POST['tipo_prod'];
        $estable_prod = $_POST['estable_prod'];
		
			
		$imgFile = $_FILES['image_prod']['name'];
        $tmp_dir = $_FILES['image_prod']['tmp_name'];
        $imgSize = $_FILES['image_prod']['size'];
					
		if($imgFile)
		{
			$upload_dir = 'item_images/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$itempic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['image_prod']);
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
				}
				else
				{
					$errMSG = "Lo sentimos, su archivo es demasiado grande, debe ser inferior a 5 MB";
					echo "<script>alert('Lo sentimos, su archivo es demasiado grande, debe ser inferior a 5 MB')</script>";				
					 
				}
			}
			else
			{
				$errMSG = "Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF.";	
              echo "<script>alert('Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF.')</script>";					
			}	
		}
		else
		{
		
			$itempic = $edit_row['image_prod']; 
		}	
						
		

		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE productos
									     SET nombre_prod=:nombre_prod,
									         detalle_prod=:detalle_prod,
									         tipo_prod=:tipo_prod,
									         estable_prod=:estable_prod, 
											 precio_prod=:precio_prod, 
										     image_prod=:image_prod 
								       WHERE prod_id=:prod_id');
			$stmt->bindParam(':nombre_prod',$nombre_prod);
			$stmt->bindParam(':detalle_prod',$detalle_prod);
			$stmt->bindParam(':tipo_prod',$tipo_prod);
			$stmt->bindParam(':estable_prod',$estable_prod);
			$stmt->bindParam(':precio_prod',$precio_prod);
			$stmt->bindParam(':image_prod',$itempic);
			$stmt->bindParam(':prod_id',$id);
				
			if($stmt->execute()){
				?>
                <script>
				alert('Actualizado exitosamente ...');
				window.location.href='items.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Lo sentimos, los datos no se pudieron actualizar !";
				 echo "<script>alert('Lo sentimos los datos no se pudieron actualizar  !')</script>";				
			}
		
		}
		
						
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

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

   
    
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
                <a class="navbar-brand" href="index.php">Larclick -Panel de Admnitrador</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"> &nbsp; &nbsp; &nbsp; Inicio</a></li>
					<li><a data-toggle="modal" data-target="#uploadModal"> &nbsp; &nbsp; &nbsp; Subir elementos</a></li>
					<li class="active"><a href="items.php"> &nbsp; &nbsp; &nbsp; Gestionelementos</a></li>
					<li><a href="customers.php"> &nbsp; &nbsp; &nbsp; Gestion clientes</a></li>
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
            
			
			
			
			
			
			
			
			
		<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
			 <div class="alert alert-info">
                        
                          <center> <h3><strong>Cargar Producto</strong> </h3></center>
						  
						  </div>
						  
						 <table class="table table-bordered table-responsive">
	 
    <tr>
    	<td><label class="control-label">Nombre del Producto.</label></td>
        <td><input class="form-control" type="text" name="nombre_prod" value="<?php echo $nombre_prod; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Descripción</label></td>
        <td><input class="form-control" type="text" name="detalle_prod" value="<?php echo $detalle_prod; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Tipo Producto</label></td>
        <td><input class="form-control" type="text" name="tipo_prod" value="<?php echo $tipo_prod; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Restaurante</label></td>
        <td><input class="form-control" type="text" name="estable_prod" value="<?php echo $estable_prod; ?>" required /></td>
    </tr>
	
	 <tr>
    	<td><label class="control-label">Precio.</label></td>
        <td><input id="inputprice" class="form-control" type="text" name="precio_prod" value="<?php echo $precio_prod; ?>" required /></td>
    </tr>
	
	
    <tr>
    	<td><label class="control-label">Imagen.</label></td>
        <td>
        	<p><img class="img img-thumbnail" src="item_images/<?php echo $image_prod; ?>" height="150" width="150" /></p>
        	<input class="input-group" type="file" name="image_prod" accept="image/*" />
        </td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span> Subir
        </button>
        
        <a class="btn btn-danger" href="items.php"> <span class="glyphicon glyphicon-backward"></span> Cancelar </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
						  
						
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
