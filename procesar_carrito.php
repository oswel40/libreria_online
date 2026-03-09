<?php
include("conexion.php");
$usuario_id = $_POST['usuario_id'];
$libro_id = $_POST['libro_id'];
$cantidad = $_POST['cantidad'];

$sql_libro = "SELECT precio FROM LIBROS WHERE ID='$libro_id'";
$result = mysqli_query($conn, $sql_libro);
$row = mysqli_fetch_assoc($result);
$precio = $row['precio'];

$monto_total = $precio * $cantidad;

$sql = "INSERT INTO CARRITO (usuario_id, libro_id, cantidad, monto_total) 
        VALUES ('$usuario_id','$libro_id','$cantidad','$monto_total')";
mysqli_query($conn, $sql);
echo "Libro agregado al carrito correctamente";
?>