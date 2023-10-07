
<?php
include("db_conection.php");
if(isset($_POST['tacoOrden']))
{
$id_cliente = $_POST['id_cliente'];
$producto_pedido = $_POST['producto_pedido'];
$estable_pedido = $_POST['estable_pedido'];
$observa_pedido = $_POST['observa_pedido'];
$pago_pedido = $_POST['pago_pedido'];
$precio_pedido = $_POST['precio_pedido'];
$cantidad_pedido = $_POST['cantidad_pedido'];
$total_pedido=$precio_pedido * $cantidad_pedido;
$estado_pedido='Pending';




 
$save_order_details="insert into detallepedido (id_cliente, producto_pedido, estable_pedido, precio_pedido, cantidad_pedido, observa_pedido, pago_pedido, total_pedido, estado_pedido, fecha_pedido) VALUE ('$id_cliente','$producto_pedido','$estable_pedido','$precio_pedido','$cantidad_pedido','$observa_pedido','$pago_pedido','$total_pedido','$estado_pedido',CURDATE())";
mysqli_query($dbcon,$save_order_details);
echo "<script>alert('Artículo agregado exitosamente a la lista de compras!')</script>";				
echo "<script>window.open('tacoriendo.php?id=1','_self')</script>";

	
		

}

?>
