<?php
include("../templatesadmin/cabeceraadmin.php"); //Cabecera de la pagina 
include("../conexion.php"); //Ruta del archivo de conexion a la base de datos
?>
<?php
$sql = "SELECT * FROM tabla_productos";/* Leemos tabla_productos para rescatar
 los datos y mostrarlos despues */
$resultado = mysqli_query($conexion, $sql); //Leemos la instruccion SELECT
?>
<script type="text/javascript">
    function confirmar() {
        return confirm('¿Estas seguro?, se eliminaran los datos');
    }
</script>

<!-- Tabla donde se mostraran los datos obtenidos de tabla_productos -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Lista de productos <a class="btn btn-primary ms-2" href="crear.php" role="button">Crear Producto</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id del producto</th>
                                    <th scope="col">Nombre del producto</th>
                                    <th scope="col">Precio del producto</th>
                                    <th scope="col">Imagen del producto</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($filas = mysqli_fetch_assoc($resultado)) { //Buqle while que muestra los registros devueltos por mysqli_fetch_assoc
                                ?>
                                    <tr>
                                        <td><?php echo $filas['id_producto']; ?></td> <!-- Columna id_producto -->
                                        <td><?php echo $filas['nombre_producto']; ?></td> <!-- Columna nombre_producto -->
                                        <td><?php echo $filas['precio_producto']; ?></td> <!-- Columna precio_producto -->
                                        <td> <img class="img-thumbnail rounded" src="../../imagenes/<?php echo $filas['imagen_producto']; ?>" width="100" height="50" alt="imagendelproducto"><!-- Columna imagen_producto -->
                                        </td>
                                        <td>

                                            <a class="btn btn-info" href="editar.php?txtID=<?php echo $filas['id_producto']; ?>" role="button">Editar</a><!-- Boton que lleva al archivo
                                        de para editar los registro. Le envia el id_producto del registro seleccionado. -->

                                            <a class="btn btn-danger" href="borrar.php?txtID=<?php echo $filas['id_producto']; ?>" role="button" onclick='return confirmar()'>Borrar</a><!-- Boton para eliminar
                                        el registro segun el id_producto, que es enviado al archivo para borrar registros. -->
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<?php
include("../templatesadmin/footeradmin.php");
?>