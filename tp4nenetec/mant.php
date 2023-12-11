<?php
include("./templates/cabecera.php"); //Cabecera de la pagina
?>


<!-- Carousel -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="https://impresion3d.website/wp-content/uploads/2022/02/Como-realizar-un-mantenimiento-de-tu-impresora-3d-Portada.jpg" class="d-block w-100" alt="..." height="500">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="https://www.inovamarket.com/wp-content/uploads/2023/06/Revision-y-ajuste-de-correas-y-rodamientos-Mantenimiento-de-impresora-3D.webp" class="d-block w-100" alt="..." height="500">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="https://sicnova3d.com/wp-content/uploads/mantenimiento-impresoras-3d-industriales-zmorph-e1659536962113.jpg" class="d-block w-100" alt="..." height="500">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br><br><br><br><br>
<div id="app">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card-mant">
          <h1>{{ mensaje }}</h1>
          <ul>
            <li v-for="(tip, index) in tips" :key="index">{{ tip }}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  new Vue({
    el: '#app',
    data: {
      mensaje: 'Consejos de mantenimiento para tu impresora 3D',
      tips: [
        'Apaga la impresora antes de realizar cualquier mantenimiento.',
        'Limpia la superficie de impresión con un paño suave y sin pelusa.',
        'Verifica y ajusta la nivelación de la cama de impresión.',
        'Inspecciona y limpia regularmente el extrusor y la boquilla.',
        'Asegúrate de que los ejes de movimiento estén lubricados.',
        'Comprueba las conexiones de los cables y aprieta los tornillos sueltos.',
        'Actualiza el firmware de la impresora según sea necesario.',
        'Calibra los sensores de temperatura y los termistores.',
        'Verifica el estado de los filamentos y reemplázalos si es necesario.',
        'Realiza pruebas de impresión de prueba después del mantenimiento.'
      ]
    }
  });
</script>




<?php
include("./templates/footer.php"); //Pie de la pagina
?>