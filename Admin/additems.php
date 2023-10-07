<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");//redirect to login page to secure the welcome page without login access.
}

?>

<?php
include("db_conection.php");
if(isset($_POST['item_save']))
{
$rest_id = $_POST['rest_id'];	
$nombre_prod = $_POST['nombre_prod'];
$precio_prod = $_POST['precio_prod'];
$detalle_prod = $_POST['detalle_prod'];
$estable_prod = $_POST['estable_prod'];
$tipo_prod = $_POST['tipo_prod'];


 
 
 
$imgFile = $_FILES['image_prod']['name'];
$tmp_dir = $_FILES['image_prod']['tmp_name'];
$imgSize = $_FILES['image_prod']['size'];

$upload_dir = 'item_images/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
$itempic = rand(1000,1000000).".".$imgExt;


				
	
			if(in_array($imgExt, $valid_extensions)){			
		
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
					$saveitem="insert into productos (rest_id,nombre_prod,detalle_prod,estable_prod,tipo_prod,precio_prod,image_prod,fecha_prod) VALUE ('$rest_id','$nombre_prod','$detalle_prod','$estable_prod','$tipo_prod','$precio_prod','$itempic',CURDATE())";
					mysqli_query($dbcon,$saveitem);
					 echo "<script>alert('Datos guardados exitosamente!')</script>";				
					 echo "<script>window.open('items.php','_self')</script>";
				}
				else{
					
					 echo "<script>alert('Lo sentimos, tu archivo es demasiado grande.')</script>";				
					 echo "<script>window.open('items.php','_self')</script>";
				}
			}
			else{
				
				 echo "<script>alert('Lo siento, solo JPG, JPEG, PNG & GIF los archivos están permitidos.')</script>";				
					 echo "<script>window.open('items.php','_self')</script>";
				
			}
		
	
		

}

?>









