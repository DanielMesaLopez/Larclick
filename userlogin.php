<?php
session_start();

?>
<?php

include("db_conection.php");



if(isset($_POST['user_login']))
{
    $celular_cliente=$_POST['celular_cliente'];
    $password_cliente=$_POST['password_cliente'];
	

    $check_user="select * from cliente WHERE celular_cliente='$celular_cliente' AND password_cliente='$password_cliente'";

 
    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
	 echo "<script>alert('Has iniciado sesión correctamente')</script>";
       
 echo "<script>window.open('Customers/ListResta.php','_self')</script>";
       
$_SESSION['celular_cliente']=$celular_cliente;



    }
    else
    {
        echo "<script>alert('Correo electrónico o la contraseña son incorrectos!')</script>";
		  echo "<script>window.open('index.php','_self')</script>";
		
		 exit();
		
    }
}
?>