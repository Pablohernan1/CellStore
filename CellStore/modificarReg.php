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


<form action="hacerModificacion.php" method="post">

  <div class="row">
    <div class="col-25">
      <label for="fname">ID</label>
    </div>
    <div class="col-75">
          <input type="text" name="id" class="form-control" placeholder="Ingresar ID a buscar" required autofocus>

</div>
</div>


  <div class="row">
    <input type="submit" value="Buscar">
  </div>








</form>

</table>
</body>
</html>