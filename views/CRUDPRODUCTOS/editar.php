<?php 
include_once("conexion.php");
include_once("index.php");

$idProductos = $_GET['idProductos'];
 
$querybuscar = mysqli_query($conn, "SELECT * FROM productos WHERE idProductos=$idProductos");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $idProductos = $mostrar['idProductos'];
    $nombreP = $mostrar['nombreProducto'];
    $descpP = $mostrar['descripcionProducto'];
	$cantP = $mostrar['cantidadProductos'];
    $precioV = $mostrar['precioVenta'];
    $precioC= $mostrar['precioCompra'];
    $categoriaC = $mostrar['categoriaProducto'];

}
?>
<html>
<head>    
		<title>VaidrollTeam</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar Productos</th></tr>
		     <tr> 
                <td>Id Productos</td> 
                <td><input type="text" name="txtidProductos" value="<?php echo $idProductos;?>" required ></td>
            </tr>
            <tr> 

            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnombreProducto" value="<?php echo $nombreP;?>" required></td>
            </tr>
            <tr> 
                <td>Descripcion</td>
                <td><input type="text" name="txtdescripcionProducto" value="<?php echo $descpP;?>" required></td>
            </tr>

            <tr> 
                <td>Cantidad</td>
                <td><input type="text" name="txtcantidadProductos" value="<?php echo $cantP;?>" required></td>
            </tr>
            <tr> 
                <td>Precio de Venta</td>
                <td><input type="text" name="txtprecioVenta" value="<?php echo $precioV;?>" required></td>
            </tr>
            <tr> 
                <td>Precio de Compra</td>
                <td><input type="text" name="txtprecioCompra" value="<?php echo $precioC;?>" required></td>
            </tr>
            <tr> 
                <td>Categoria</td>
                <td><input type="text" name="txtcategoriaProducto" value="<?php echo $categoriaC;?>" required></td>
            </tr>
				
                <td colspan="2">
				<a href="index.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('??Deseas modificar a este producto?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))

{       
    $idProductos1   = $_POST['txtidProductos'];
    $nombreP1       = $_POST['txtnombreProducto'];
    $descpP1        = $_POST['txtdescripcionProducto'];
	$cantP1         = $_POST['txtcantidadProductos'];
    $precioV1       = $_POST['txtprecioVenta'];
    $precioC1       = $_POST['txtprecioCompra'];
    $categoriaC1    = $_POST['txtcategoriaProducto'];

 
    $querymodificar = mysqli_query($conn, "UPDATE productos SET nombreProducto='$nombreP1',descripcionProducto='$descpP1',cantidadProductos='$cantP1',precioVenta='$precioV1',precioCompra='$precioC1', categoriaProducto ='$categoriaC1' WHERE idProductos=$idProductos1");

  	echo "<script>window.location= 'index.php' </script>";
    
}
?>
	