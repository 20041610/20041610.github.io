<?php
include("../administrador/templatesadmin/cabeceraadmin.php"); //Cabecera de la pagina
include("./conexion.php"); //Ruta del archivo de conexion a la base de datos
?>
<div class="container-sm-2">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
                <div class="container-sm-2">
                    <h1 class="display-3">Bienvenido</h1><!-- Mensaje de bienvenida al usuario -->
                    <p class="lead">Usuario: <?php echo $_SESSION['nombre_admin']; ?> </p><!-- Nombre de la persona
                     que ingresó al sistema -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("./templatesadmin/footeradmin.php"); //Pie de pagina
?>