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
  <li><a href="borrarRegistro.php">Eliminar Articulo</a></li>
  <li><a href="Reportes.php">Reporte</a></li>
</ul>
     <div class="col-75">

  <form action="#" method="post">
<select name="operacion" >
  <option value="marca">Marca</option>
  <option value="modelo">Modelo</option>
  <option value="color">color</option>
</select><br><br>
  <input type="text" name="num1"><br><br>
<input type="submit" value="Filtrar">  <br>
<br>
</form>
</div>
</form>
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
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miBase";
$marcaSearch = $_POST['operacion'];
$dato = $_POST['num1'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM articulos where ".$marcaSearch. " = '". $dato."'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // salida de dato por cada fila.
    while($row =mysqli_fetch_array($result) ) {
        echo "<td> " . $row["id"]. "</td> <td> " . $row["marca"]. "</td><td>" . $row["modelo"]. "</td><td>" . $row["color"]. "</td><td>". $row["precio"]. "</td><td>" . $row["stock"]. "</td></tr>";
        echo "<br>";
    }
} 
$conn->close();
?>




</table>
</body>
</html>