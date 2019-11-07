<!DOCTYPE html>
<html>

  <link href="StyleSheet.css" rel="stylesheet" type="text/css">

<head>
	<title>CellStore</title>
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

<h2> Agregar un nuevo articulo</h2>

<div class="container">
  <form action="insertarReg.php" method="post">

  <div class="row">
    <div class="col-25">
      <label for="fname">Marca</label>
    </div>
    <div class="col-75">
    <input type="text" name="marca" class="form-control" placeholder="Marca" required autofocus>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Modelo</label>
    </div>
    <div class="col-75">
      <input type="text" name="modelo"placeholder="Modelo" required autofocus>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label >Color</label>
    </div>
    <div class="col-75">
      <input type="text" name="color"  placeholder="Color" required autofocus>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lprecio">Precio</label>
    </div>
    <div class="col-75">
      <input type="number" name="precio" placeholder="Precio" required autofocus>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Stock</label>
    </div>
    <div class="col-75">
      <input type="number" name="stock" placeholder="Cantidad" required autofocus>
    </div>
  </div>


  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>


</body>
</html>