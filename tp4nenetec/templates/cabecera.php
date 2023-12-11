<?php
session_id("SessionUser");
session_start();
$IdSessUser = session_id();
$SesionDeUsuario = $_SESSION['nombre_usuario'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpeg" href="https://previews.123rf.com/images/vectorchef/vectorchef1509/vectorchef150900555/45141254-icono-de-l%C3%ADnea-de-impresi%C3%B3n-3d.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="http://localhost/tp4nenetec/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e15e8c34af.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <title>Impresiones NENE TEC</title>
</head>

<body>

    <!-- Barra de navegacion -->
    <nav class="container-fluid p-3 bg-danger text-white">
        <nav class="navbar navbar-expand-sm bg-danger">
            <div class="container-fluid">
                <nav class="navbar bg-danger">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="https://previews.123rf.com/images/vectorchef/vectorchef1509/vectorchef150900555/45141254-icono-de-l%C3%ADnea-de-impresi%C3%B3n-3d.jpg" alt="Logo" width="35" height="35" class="d-inline-block align-text-top rounded-circle">
                            <a class="nav-link active text-white" aria-current="page" href="http://localhost/tp4nenetec/">Impresiones NENE TEC</a>
                        </a>
                    </div>
                </nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-0 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="http://localhost/tp4nenetec/">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>


                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-danger" href="http://localhost/tp4nenetec/iniciarsesion.php" <?php if (isset($SesionDeUsuario)) { ?> style="display: none;" <?php  }    ?>>Iniciar Sesion</a></li>
                                <li><a class="dropdown-item text-danger" href="http://localhost/tp4nenetec/registro.php" <?php if (isset($SesionDeUsuario)) { ?> style="display: none;" <?php  }    ?>>Registrate</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="http://localhost/tp4nenetec/mant.php">Mantenimiento de impresoras</a></li>

                                <li><a class="dropdown-item text-danger" href="http://localhost/tp4nenetec/quienesomos.php">¿Quienes Somos?</a></li>

                            </ul>

                        </li>
                        <li class="nav-item"><a class="nav-link text-white" <?php if (!isset($SesionDeUsuario)) { ?> style="display: none;" <?php  }    ?>><?php if (isset($SesionDeUsuario)) {
                                                                                                                                                                echo $SesionDeUsuario;
                                                                                                                                                            } ?></a></li>

                        <li class="nav-item"><a class="btn btn-danger" href="http://localhost/tp4nenetec/cerrarsesionusuario.php" <?php if (!isset($SesionDeUsuario)) { ?> style="display: none;" <?php } ?> role="button">Cerrar sesion</a></li>




                    </ul>
                    <ul class="navbar-nav ms-auto mb-0 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="http://localhost/tp4nenetec/administrador/">Ir al Administrador</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>