<?php
include("./conexion.php"); //Incluimos la ruta del archivo de base de datos
session_id("sessionADM"); //Creamos un id para la sesion de administrador
session_start(); //Abrimos sesion
if ($_POST) { //Si hay un $POST, los datos ingresados en el form de esta pagina se guardan en variables

    $nombreDeAdmin = $_POST['nombreDeAdmin'];
    $contraseñaDeAdmin = $_POST['contraseñaDeAdmin'];
    $query = "SELECT *,count(*) as n_usuario
        FROM tabla_administradores
        WHERE nombre_admin = '$nombreDeAdmin' AND contraseña_admin = '$contraseñaDeAdmin' ";/*Esta variable lee la
        tabla_administradores y cuenta, a traves de count, la cantidad de registros y guarda
        la informacion en el alias "n_usuario" */

    $consulta = mysqli_query($conexion, $query); //Ejecutamos la consulta
    foreach ($consulta as $registro) { //Recorremos la base de datos
        if ($registro['n_usuario'] > 0) { //Si esta condicion se cumple, significa que hay un registro
            $_SESSION['nombre_admin'] = $registro['nombre_admin'];/* En $_SESSION['nombre_admin']  se va a guardar
            el registro encontrado  */
            header("Location: index.php");/* El proceso anterior busca un usuario en la tabla
            usuarios y al encontrarlo lo guarda en la variable de sesion. Se inicia sesion con el 
            usuario encontrado en la base de datos. Si funciona, esta linea nos redirecciona al
            administrador. */
        } else {
            $mensaje = "Error. Usuario o contraseña incorrectos"; //Se muestra este mensaje si no se 
            //encuentra a un usuario o se ingresa mal el usuario y/o contraseña.
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

                <br><br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <?php if (isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <strong><?php echo  $mensaje; ?></strong>
                            </div>
                        <?php } ?>

                        <form action="" method="post"><!--formulario para entrar al administrador-->
                            <div class="mb-3">
                                <label for="nombreDeAdmin" class="form-label">Usuario:</label>
                                <input type="text" class="form-control" name="nombreDeAdmin" required placeholder="Escriba su usuario">
                            </div>
                            <div class="mb-3">
                                <label for="contraseñaDeAdmin" class="form-label">Password</label>
                                <input type="password" class="form-control" name="contraseñaDeAdmin" required placeholder="Escriba su contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar al administrador</button>
                            <br>
                            <br>
                        </form>
                        <a class="btn btn-primary" href="../index.php" role="button">Ingresar como usuario</a><!--Boton
                    para dirigirse a la pagina principal-->


                    </div>

                </div>
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>