<?php
include("../templatesadmin/cabeceraadmin.php"); //Ruta del archivo de cabecera de la pagina
include("../conexion.php"); //Ruta del archivo de conexion a la base de datos

if (isset($_GET['txtID'])) { //Si se recibe un id mediante el metodo $_GET
    $txtID = $_GET['txtID']; //Lo guardamos en una variable
    $queryConsulta = "SELECT * FROM tabla_productos 
    WHERE id_producto = '$txtID'"; //Leemos tabla_productos para rescatar los datos correspondientes a ese id
    $lectura = mysqli_query($conexion, $queryConsulta); //Ejecutamos la consulta SELECT
    $lecturaEspecifica = mysqli_fetch_array($lectura);/* Con mysqli_fetch_array obetenemos el registro correspondiente
    al id recibido por el metodo $_GET. Esto es para mostrar esos datos en los input del formulario como "value" y asi ver los datos que queremos modificar. */
}
if (isset($_POST['editar'])) { //Si se oprime el boton editar, guardamos los datos que ingresamos en variables
    $nuevoNombreDelProducto = $_POST['nuevoNombreDelProducto'];
    $nuevoPrecioDelProducto = $_POST['nuevoPrecioDelProducto'];
    $queryUpdate = "UPDATE tabla_productos SET
    nombre_producto = '$nuevoNombreDelProducto', precio_producto = '$nuevoPrecioDelProducto'
    WHERE id_producto = '$txtID'";/* Modificamos el registro correspondiente al id a traves de UPDATE*/

    $nuevaImagenDelProducto = $_FILES['nuevaImagenDelProducto']['name']; //Guardamos la nueva imagen que seleccionamos
    if ($nuevaImagenDelProducto != "") { //Si la variable donde se guardo la nueva imagen recibe una nueva imagen
        $UpdateImagen = "UPDATE tabla_productos SET
        imagen_producto = '$nuevaImagenDelProducto'
        WHERE id_producto = '$txtID'"; //Efectuamos la modificacion de la columna imagen_producto
        mysqli_query($conexion, $UpdateImagen); //Ejecutamos el UPDATE para la imagen
    }
    mysqli_query($conexion, $queryUpdate); //Ejecutamos el UPDATE para el resto de los datos
    header("Location: index.php"); //Volvemos al index.php
}
?>

<!-- Formulario de modificaciones -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Editar producto
                </div>
                <div class="card-body">
                    <form action="editar.php?txtID=<?php echo $txtID; ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="txtID" class="form-label">ID:</label>
                            <input type="text" value="<?php echo $txtID; ?>" class="form-control" readonly name="txtID" id="txtID">
                        </div>
                        <div class="mb-3">
                            <label for="nuevoNombreDelProducto" class="form-label">Nombre del producto</label>
                            <input type="text" class="form-control" name="nuevoNombreDelProducto" value="<?php echo $lecturaEspecifica['nombre_producto']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nuevoPrecioDelProducto" class="form-label">Precio del producto</label>
                            <input type="number" class="form-control" name="nuevoPrecioDelProducto" value="<?php echo $lecturaEspecifica['precio_producto']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nuevaImagenDelProducto" class="form-label">Imagen del producto: <img class="img-thumbnail rounded" src="../../imagenes/<?php echo $lecturaEspecifica['imagen_producto']; ?>" width="100" height="50" alt="imagendelproducto"></label>
                            <input type="file" class="form-control" name="nuevaImagenDelProducto" placeholder="Ingrese Imagen del producto">
                        </div>
                        <button type=" submit" name="editar" class="btn btn-success">Editar</button>
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