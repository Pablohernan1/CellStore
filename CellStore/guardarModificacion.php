<!DOCTYPE html>
<html>
<head>
	<title>CellStore</title>
  <link href="StyleSheet.css" rel="stylesheet" type="text/css">
</head>
<body>
	<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="listadoStock.php">Stock</a></li>
  <li><a href="agregarReg.php">Agregar Articulo</a></li>
  <li><a href="modificarReg.php">Modificar Articulo</a></li>
  <li><a href="borrarRegistro.php">Eliminar Articulo</a></li>
  <li><a href="Reportes.php">Reporte</a></li>

</ul>





<?php
error_reporting(0);
include("conexion.php");
$flag = false;

//No se utiliza isset, dado a que se utilizo la funcion de "Required" para cada campo
$id = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];


$sql =  'UPDATE articulos SET'.' marca = "'.$marca.'", modelo = "'.$modelo.'", color = "'.$color.'", precio = '. $precio.', stock = '. $stock.'
where id ='. $id;


if ($conn->query($sql) === TRUE) {

   echo '<meta http-equiv="Refresh" content="0;URL=listadoStock.php">';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>

</body>
</html>