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
Bienvenidos a CellStore




<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miBase";
$flag = true;
//No se utiliza isset, dado a que se utilizo la funcion de "Required" para cada campo
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into articulos (marca, modelo, color, precio, stock)
VALUES ('".$marca."', '".$modelo."', '".$color."'," .$precio.", ".$stock.")";


if ($conn->query($sql) === TRUE) {
   $flag == flase;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

if ($flag == flase) {
			fwrite($archivo, json_encode($miObjeto)."\n");
			$flag = true;
				echo '<meta http-equiv="Refresh" content="0;URL=listadoStock.php">';
		}
fclose($archivo);


?>

</body>
</html>