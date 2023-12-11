<?php
include("../templatesadmin/cabeceraadmin.php"); //Ruta del archivo de cabecera de la pagina
include("../conexion.php"); //Ruta del archivo de conexión a la base de datos

if (isset($_POST['agregar'])) { //Si se oprime el boton de agregar, se guardan los datos en variables
    $nombreDelProducto = $_POST['nombreDelProducto']; //Nombre del producto
    $precioDelProducto = $_POST['precioDelProducto']; //Precio de producto
    $imagenDelProducto = (isset($_FILES['imagenDelProducto']['name'])) ? $_FILES['imagenDelProducto']['name'] : ""; //Imagen del producto
    $query = "INSERT INTO tabla_productos (nombre_producto, precio_producto, imagen_producto)
    VALUES ('$nombreDelProducto', '$precioDelProducto', '$imagenDelProducto')";/* Realizamos la insercion de los datos
    ingresados en el formulario, con la instruccion INSERT INTO, a la base de datos */
    mysqli_query($conexion, $query); //Ejecutamos la instruccion INSERT INTO
    header("Location: index.php"); //Volvemos al index.php
}


?>

<!-- Formulario para cargar datos -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Cargar Productos
                </div>
                <div class="card-body">
                    <form action="crear.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nombreDelProducto" class="form-label">Nombre del producto</label>
                            <input type="text" class="form-control" name="nombreDelProducto" placeholder="Ingrese nombre del producto">
                        </div>
                        <div class="mb-3">
                            <label for="precioDelProducto" class="form-label">Precio del producto</label>
                            <input type="number" class="form-control" name="precioDelProducto" placeholder="Ingrese precio del producto">
                        </div>
                        <div class="mb-3">
                            <label for="imagenDelProducto" class="form-label">Imagen del producto</label>
                            <input type="file" class="form-control" name="imagenDelProducto" placeholder="Ingrese Imagen del producto">
                        </div>
                        <button type="submit" name="agregar" class="btn btn-success">Agregar</button>
                        <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
include("../templatesadmin/footeradmin.php"); //Ruta del archivo de pie de la pagina
?>