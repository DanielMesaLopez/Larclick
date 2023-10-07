<?php
session_start();

?>
<?php
include("db_conection.php");
if(isset($_POST['register']))
{
$correo_cliente = $_POST['rcorreo_cliente'];
$password_cliente = $_POST['rpassword_cliente'];
$nombre_cliente = $_POST['rnombre_cliente'];
$apellido_cliente = $_POST['rapellido_cliente'];
$cedula_cliente = $_POST['rcedula_cliente'];
$direccion_cliente = $_POST['rdireccion_cliente'];
$barrio_cliente = $_POST['rbarrio_cliente'];
$celular_cliente = $_POST['rcelular_cliente'];



$check_user="select * from cliente WHERE celular_cliente='$celular_cliente'";
    $run_query=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('El cliente ya existe, ¡intente con otro!')</script>";
 echo"<script>window.open('Portal.php','_self')</script>";
exit();
    }
 
$saveaccount="insert into cliente (correo_cliente, password_cliente, nombre_cliente, apellido_cliente, cedula_cliente, direccion_cliente, barrio_cliente, celular_cliente) VALUE ('$correo_cliente','$password_cliente','$nombre_cliente','$apellido_cliente','$cedula_cliente','$direccion_cliente','$barrio_cliente','$celular_cliente')";
mysqli_query($dbcon,$saveaccount);
echo "<script>alert('Datos guardados correctamente, ahora puede iniciar sesión')</script>";				
echo "<script>window.open('Portal.php','_self')</script>";


				
	
			
		
	
		

}

?>
