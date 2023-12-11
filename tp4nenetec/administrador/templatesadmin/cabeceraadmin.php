<?php
session_id("sessionADM");
session_start(); //Abrimos sesion
$idSessionAdmin = session_id(); //Guardamos el id de la sesion en una variable para leerla luego
if (!isset($_SESSION['nombre_admin'])) { //Si no hay una sesion de administrador abierta, obliga el loguearse para ingresar al sistema
    header("Location:http://localhost/tp4nenetec/administrador/login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpeg" href="https://previews.123rf.com/images/vectorchef/vectorchef1509/vectorchef150900555/45141254-icono-de-l%C3%ADnea-de-impresi%C3%B3n-3d.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/tp4nenetec/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e15e8c34af.js" crossorigin="anonymous"></script>

    <title>Impresiones NENE TEC</title>
</head>

<body>
    <nav class="container-fluid p-3 bg-success text-white">
        <nav class="navbar navbar-expand-sm bg-success">
            <div class="container-fluid">
                <nav class="navbar bg-success">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="https://previews.123rf.com/images/vectorchef/vectorchef1509/vectorchef150900555/45141254-icono-de-l%C3%ADnea-de-impresi%C3%B3n-3d.jpg" alt="Logo" width="35" height="35" class="d-inline-block align-text-top rounded-circle">
                            <a class="nav-link active text-white" aria-current="page" href="http://localhost/tp4nenetec/administrador/">Impresiones NENE TEC</a>
                        </a>
                    </div>
                </nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-0 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="http://localhost/tp4nenetec/administrador/crudproductos/">Administrador de productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="http://localhost/tp4nenetec/administrador/cerrarsesion.php">Cerrar sesión</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </nav>