<?php

include("./administrador/conexion.php"); //Añadimos el archivo de conexión a la base de datos

if (isset($_POST['enviar'])) {  /* Si existe un $_POST 'enviar', se guardan los datos recibidos en variables */

  $nombreDeUsuario = $_POST['nombreDeUsuario']; //Nombre ingresado
  $emailDelUsuario = $_POST['emailDelUsuario']; //Email ingresado
  $contraseñaDelUsuario = $_POST['contraseñaDelUsuario']; //Contraseña ingresada
  $queryInsertar = "INSERT INTO tabla_usuarios (nombre_usuario, email_usuario, contraseña_usuario)
VALUES ('$nombreDeUsuario','$emailDelUsuario','$contraseñaDelUsuario')";/* Instruccion que ejecuta la insercion de los
datos a la base de datos en tabla_usuarios  */
  mysqli_query($conexion, $queryInsertar); //Ejecucion de la instruccion INSERT INTO
  if (mysqli_query($conexion, $queryInsertar)) {/* Si se ejecuta mysqli_query, se llama a un script
    que contiene un alert, y luego a traves de window.location regresamos al index.php */
    echo "<script type='text/javascript'>";
    echo "alert('Creado y registrado');";
    echo "window.location.href = 'index.php';";
    echo "</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Registro</title>
</head>

<body>

  <div class="card">
    <div class="card-body m-5">
      <form action="registro.php" method="post">

        <legend class="text-center text-danger">Registrate</legend>
        <div class="mb-3">
          <label for="nombreDeUsuario" class="form-label text-danger">Nombre:</label>
          <input type="text" class="form-control" name="nombreDeUsuario" required placeholder="Ingrese su nombre de usuario">
        </div>
        <div class="mb-3">
          <label for="emailDelUsuario" class="form-label text-danger">Correo electrónico</label>
          <input type="email" class="form-control" name="emailDelUsuario" required placeholder="Ingrese su email">
          <div id="emailHelp" class="form-text text-danger">Nunca compartiremos su correo electrónico con nadie más.</div>
        </div>
        <div class="mb-3">
          <label for="contraseñaDelUsuario" class="form-label text-danger">Contraseña</label>
          <input type="password" class="form-control" name="contraseñaDelUsuario" required placeholder="Ingrese su contraseña">
          <div id="passwordHelpBlock" class="form-text text-danger">
            Tu contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales ni emoji.
          </div>
        </div>


        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>


</html>