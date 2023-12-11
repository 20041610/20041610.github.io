
<?php
include("./administrador/templatesadmin/cabeceraadmin.php"); //Cabecera del admin

?>
<?php
session_id("sessionADM"); //Sesion del admin
session_start(); //Abrimos sesion
session_destroy(); //Cerramos la sesion
header("Location:login.php"); //Redireccion a la pagina de logueo
?>

<?php include("./administrador/templatesadmin/footeradmin.php"); //Pie del admin 
?>