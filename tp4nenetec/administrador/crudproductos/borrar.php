<?php
include("../templatesadmin/cabeceraadmin.php"); //Ruta del archivo de cabecera de la pagina
include("../conexion.php"); //Ruta del archivo de conexion a la base de datos

if (isset($_GET['txtID'])) { //Si recibimos un id a traves del metodo $_GET
    $txtID = $_GET['txtID']; //La guardamos en una variable
    $sql = "DELETE FROM tabla_productos
    WHERE id_producto = '$txtID' "; //Realizamos la instruccion de borrado del registro correspondiente al id recibido
    mysqli_query($conexion, $sql); //Ejecutamos la instruccion DELETE FROM
    header("Location: index.php"); //Volvemos al index.php
}


?>
<?php
include("../templatesadmin/footeradmin.php"); //Ruta del archivo de pie de la pagina
?>