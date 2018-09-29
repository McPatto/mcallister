<?php  ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <title>Mc Allister Asesores</title>
</head>
<body>
  <container class="container">
    <header class="header">
      <nav class="nav">
        <div class="logoNav">
          <a href="index.php">
            <img src="img/mcallisterlogo.svg" alt="Logo Mc Allister Asesores" class="logo">
          </a>
          <img src="img/menuCollapse.svg" alt="Menu" class="menuTrigger">
        </div>
        <!-- <div class="menuCollapse border">
          <img src="img/menuCollapse.svg" alt="Menu">
        </div> -->
        <div class="wrapperPage">
          <div class="menuNav">
            <ul>
              <a href="index.php"><li>Inicio</li></a>
              <a href="nosotros.php"><li>Nosotros</li></a>
              <a href="servicios.php"><li>Servicios</li></a>
              <a href="companias.php"><li>Compañías</li></a>
              <a href="contacto.php"><li>Contacto</li></a>
            </ul>
          </div>
          <div class="socialNav">
            <ul>
              <a href=""><li><img src="img/fbLogo.svg" alt="Facebook"></li></a>
              <a href=""><li><img src="img/igLogo.svg" alt="Instagram"></li></a>
              <a href=""><li><img src="img/liLogo.svg" alt="Linkedin"></li></a>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section class="body">
      <div class="slider"></div>
      <div class="breacrumb"></div>
      <div class="welcome">
        <h2>Bienvenido</h2>
        <h3>En Mc Allister Asesores le ofrecemos la mejor asistencia y asesoramiento al momento de conseguir el respaldo que usted se merece.</h3>
      </div>
      <div class="thumbnails">
        <h2>ACCESOS RÁPIDOS</h2>
        <div class="thumb thumb1">
          <div class="circle"></div>
        </div>
        <div class="thumb thumb2">
          <div class="circle"></div>
        </div>
        <div class="thumb thumb3">
          <div class="circle"></div>
        </div>
        <div class="thumb thumb4">
          <div class="circle"></div>
        </div>
      </div>
    </section>
    <section class="footer">
      <p>© Mc Allister Asesores 2018</p>
    </section>
  </container>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".menuTrigger").on("click", function() {
        $(".wrapperPage").toggleClass('expanded');
      });
    });
  </script>

</body>
</html>
