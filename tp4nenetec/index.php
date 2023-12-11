<?php
include("./templates/cabecera.php"); //Incluimos el archivo con la cabecera de la pagina
include("./administrador/conexion.php"); //iIncluimos

$query = "SELECT * FROM tabla_productos"; //Lectura de tabla_productos para rescatar los registros
$consulta = mysqli_query($conexion, $query); //Ejecucion de la sentencia anteriror
?>



<div class="container">

  <div class="row">
    <?php foreach ($consulta as $registro) { ?> <!--Foreach para recorrer cada uno de los registro encontrados en tabla_productos-->

      <div class="col-md-6 p-3">
        <div class="card">
          <div class="card hover-card">
            <img src="./imagenes/<?php echo $registro['imagen_producto']; ?>" alt="ImagenDelProducto" class="card-img-top" height="250">
            <div class="card-body">
              <h5 class="card-title text-danger"><?php echo $registro['nombre_producto']; ?></h5>
              <p class="card-text text-danger"><?php echo "$" . $registro['precio_producto']; ?></p>
            </div>
          </div>


        </div>

      </div>
    <?php } ?>


  </div>

</div>

<?php
include("./templates/footer.php"); //Archivo de pie de pagina
?>