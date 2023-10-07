<?php
session_start();

if(!$_SESSION['correo_cliente'])
{

    header("Location: ../index.php");
}

?>
<?php
include("db_conection.php");
if(isset($_POST['user_save']))
{
$id_cliente=$_POST['id_cliente'];
$password_cliente = $_POST['password_cliente'];
$nombre_cliente = $_POST['nombre_cliente'];
$apellido_cliente = $_POST['apellido_cliente'];
$cedula_cliente = $_POST['cedula_cliente'];
$direccion_cliente = $_POST['direccion_cliente'];
$barrio_cliente = $_POST['barrio_cliente'];
$celular_cliente = $_POST['celular_cliente'];



$update_profile="UPDATE cliente SET password_cliente='$password_cliente',
 nombre_cliente='$nombre_cliente',
 apellido_cliente='$apellido_cliente',
 cedula_cliente='$cedula_cliente',
 direccion_cliente='$direccion_cliente',
 barrio_cliente='$barrio_cliente',
celular_cliente='$celular_cliente' WHERE id_cliente='$id_cliente'";
    if(mysqli_query($dbcon,$update_profile))
    {
	echo "<script>alert('Cuenta actualizada con éxito!')</script>";
        echo"<script>window.open('ListResta.php','_self')</script>";
    }else{
	echo "<script>alert('Error encontrado!')</script>";

	}

}

?>
