<?php
include("./templates/cabecera.php"); //Cabecera de la pagina
?>
<!-- Carousel -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="https://www.edsrobotics.com/wp-content/uploads/2022/02/impresora-3d-eds-robotics-scaled-1200x675.jpeg" class="d-block w-100" alt="..." height="500">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="https://www.bcn3d.com/wp-content/uploads/2021/08/Types-of-3D-printers-1024x683.jpg" class="d-block w-100" alt="..." height="500">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="https://mastoner.com/blog/wp-content/uploads/2023/03/Como-colocar-filamento-en-impresora-3D.jpg" class="d-block w-100" alt="..." height="500">
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
<section class="container section1">
  <div class="us">
    <div class="us-text">
      <h2 class="section2titulo">Sobre nosotros</h2>

      <div class="us-p">
        <p>Nuestra pagina ofrece lo mejor de la empresa Argentina Nene Tec donde se encuentran la mas alta calidad en impresiones 3D. <br>
          En Nene Tec trabajamos con los materiales mas accesibles y nuestras impresoras son de ultima tecnologia. <br>
          Puedes visitarnos o contactarnos en nuestras redes sociales para coordinar una cita. Somos Nene Tec, tus impresiones favoritas.</p>
      </div><br>

      <div class="us-rs">
        <h3 class="rs-tittle">Nuestras redes</h3>
        <div class="icons-rs">
          <a href="https://www.twitter.com" target="_blank">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="https://www.facebook.com" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="https://www.pinterest" target="_blank">
            <i class="fa fa-pinterest" aria-hidden="true"></i>
          </a>
          <a href="https://www.instagram.com" target="_blank">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="https://www.linkedin.com" target="_blank">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </div>
        <div class="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5512.339649631606!2d-58.6157931014786!3d-34.76423810722684!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc12dbc4dacd3%3A0x4e094949ab99576f!2sCat%C3%A1n%20Shopping!5e0!3m2!1ses!2sar!4v1699753877203!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
</section>
<?php
include("./templates/footer.php"); //Pie de la pagina
?>