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


<h2> Modificar un articulo</h2>

<div class="container">
  <form action="guardarModificacion.php" method="post">
<?php
error_reporting(0);
include("conexion.php");
$id =$_POST['id'];

$flag = false;




$sql = "SELECT * FROM articulos where id = ".$id;
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // salida de dato por cada fila.
  // mysqli_fetch_array($resultados)   $result->fetch_assoc()
    while($row =mysqli_fetch_array($result) ) {
      echo '<div class="row">';
      echo '<div class="col-25">';
      echo '<label for="fname">Id</label>';
      echo '</div>';
      echo '<div class="col-75">';
      echo '<input type="text" name="id" class="form-control"  value= "'.$row["id"].'" required>';
      echo '</div>';
      echo '</div>';


      echo '<div class="row">';
      echo '<div class="col-25">';
      echo '<label for="fname">Marca</label>';
      echo '</div>';
      echo '<div class="col-75">';
      echo '<input type="text" name="marca" class="form-control"  value= "'.$row["marca"].'" required >';
      echo '</div>';
      echo '</div>';
    
      echo "<br>";

      echo '<div class="row">';
      echo '<div class="col-25">';
      echo '<label for="fname">Modelo</label>';
      echo '</div>';
      echo '<div class="col-75">';
      echo '<input type="text" name="modelo" class="form-control"  value= "'.$row["modelo"].'" required >';
      echo '</div>';
      echo '</div>';

      echo "<br>";

      echo '<div class="row">';
      echo '<div class="col-25">';
      echo '<label for="fname">Color</label>';
      echo '</div>';
      echo '<div class="col-75">';
      echo '<input type="text" name="color" class="form-control" value= "'.$row["color"].'" required >';
      echo '</div>';
      echo '</div>';

      echo "<br>";

      echo '<div class="row">';
      echo '<div class="col-25">';
      echo '<label for="fname">Precio</label>';
      echo '</div>';
      echo '<div class="col-75">';
      echo '<input type="number" name="precio" class="form-control" value= "'.$row["precio"].'" required >';
      echo '</div>';
      echo '</div>';

      echo "<br>";

      echo '<div class="row">';
      echo '<div class="col-25">';
      echo '<label for="fname">Stock</label>';
      echo '</div>';
      echo '<div class="col-75">';
      echo '<input type="number" name="stock" class="form-control" value= "'.$row["stock"].'" required >';
      echo '</div>';
      echo '</div>';
        //echo "<td> " . $row["marca"]. "</td><td>" . $row["modelo"]. "</td><td>" . $row["color"]. "</td><td>". $row["precio"]. "</td><td>" . $row["stock"]. "</td></tr>";
        
    }
} else {
    echo "0 results";

}
$conn->close();
?>
  <div class="row">
    <input type="submit" value="Guardar">
  </div>
  </form>
</div>
</form>
</div>
</body>
</html>