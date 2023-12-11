<!doctype html>
<html lang="en">

<head>
  <title>Iniciar Sesion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

  <main>
    <?php
    session_id("SessionUser");
    session_start();
    if ($_POST) { //Si hay un $POST
      include("./administrador/conexion.php"); //Incluimos la ruta del archivo de base de datos
      $Email = $_POST['Email'];
      $contraseña = $_POST['Contraseña'];
      $query = "SELECT *,count(*) as n_usuario_user
    FROM tabla_usuarios
    WHERE email_usuario = '$Email' AND contraseña_usuario = '$contraseña' ";/*Este string lee la
    tabla usuarios y cuenta, a traves de count, la cantidad de registros y guarda
    la informacion en el alias "n_usuario" */

      $consulta = mysqli_query($conexion, $query); //Ejecutamos la consulta
      foreach ($consulta as $registro) { //Recorremos la base de datos
        if ($registro['n_usuario_user'] > 0) { //Si esta condicion se cumple, significa que hay un registro

          $_SESSION['nombre_usuario'] = $registro['nombre_usuario'];/* En $_SESSION['usuario'] se va a guardar
    el registro encontrado */
          echo $Email;
          echo $contraseña;

          header("Location:index.php");/* El proceso anterior busca un usuario en la tabla
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
    <div class="card-fluid">
      <div class="card-body m-5">
        <?php if (isset($mensaje)) { ?><!-- Instruccion que recibe la variable $mensaje, le añade una clase de css y la muestra -->
          <div class="alert alert-danger" role="alert">
            <strong><?php echo  $mensaje; ?></strong>
          </div>
        <?php } ?>
        <!-- Inicio del formulario de inicio de sesion -->
        <form action="" method="post">
          <legend class="text-center text-danger">Iniciar Sesión</legend>
          <fieldset>
            <div class="col-xs-12 mb-3">
              <label for="Email" class="form-label text-danger">Correo electrónico</label>
              <input type="email" class="form-control" name="Email" placeholder="Ingrese su email">
              <div id="emailHelp" class="form-text text-danger">Nunca compartiremos su correo electrónico con nadie más.</div>
            </div>
            <div class="col-xs-12 mb-3">
              <label for="Contraseña" class="form-label text-danger">Contraseña</label>
              <input type="password" class="form-control" name="Contraseña" placeholder="Ingrese su contraseña">
              <div id="passwordHelpBlock" class="form-text text-danger">
                No debes compartir tu contraseña con nadie.
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
          </fieldset>
        </form>
      </div>
    </div>
  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>