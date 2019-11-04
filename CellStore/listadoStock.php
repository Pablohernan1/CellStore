<!DOCTYPE html>
<html>
<head>

	<title>CellStore</title>
  <link href="StyleSheet.css" rel="stylesheet" type="text/css">
<body>
	<ul>
  <li><a href="index.php">Home</a></li>
  <li><a class="active" href="listadoStock.php">Stock</a></li>
  <li><a href="agregarReg.php">Agregar Articulo</a></li>
  <li><a href="modificarReg.php">Modificar Articulo</a></li>
</ul>
<table>
  <caption>Listado de Stock disponible</caption>
  <tr>
    <th>Id</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Precio</th>
    <th>Stock</th>
  </tr>
  <tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miBase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM articulos";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // salida de dato por cada fila.
  // mysqli_fetch_array($resultados)   $result->fetch_assoc()
    while($row =mysqli_fetch_array($result) ) {
        echo "<td> " . $row["id"]. "</td> <td> " . $row["marca"]. "</td><td>" . $row["modelo"]. "</td><td>" . $row["color"]. "</td><td>". $row["precio"]. "</td><td>" . $row["stock"]. "</td></tr>";
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>




</table>
</body>
</html>