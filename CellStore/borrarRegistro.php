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
  <h2><b>Eliminar un registro</b></h2>
     <div class="col-75">
  <form action="#" method="post">
  Ingrese el ID del articulo a eliminar:

  <input type="number" name="num1"><br><br>
<br>
<input type="submit" value="Eliminar Registro">  <br>
</div>
</form>


<?php
error_reporting(0);
include("conexion.php");
$id = $_POST['num1'];



//$sql = "delete FROM articulos where id = ".$id;
//$result = $conn->query($sql); if ($id > 0) {

if (isset($id)) {
  $sql = "select * FROM articulos where id = ".$id;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $sql = "delete FROM articulos where id = ".$id;
    $result = $conn->query($sql);
    echo '<meta http-equiv="Refresh" content="0;URL=listadoStock.php">';
  } else{
    echo '<script language="JavaScript">';
    echo 'alert("Error. ID no encontrado en la Base de Datos");';
    echo "</script>";
} //echo "<h3>ID no encontrado en la base de datos.</h3>";
//echo '<meta http-equiv="Refresh" content="0;URL=listadoStock.php">';

}



//if ($id > 0) {
//  $sql = "delete FROM articulos where id = ".$id;
//$result = $conn->query($sql);
//echo '<meta http-equiv="Refresh" content="0;URL=listadoStock.php">';
//}




$conn->close();
?>




</table>
</body>
</html>