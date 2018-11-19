<?php  ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Descripción que elijamos, jeje"/>
  <meta http-equiv=”content-language” content=”es”/>
  <meta name=”distribution” content=”global”/>
  <meta name="keywords" content="palabra1,palabra2"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <title>Mc Allister Asesores | Servicios</title>
</head>
<body>
  <container class="container">
    <?php
      include 'menu_collapsible.html';
      include 'menu_desktop.html';
    ?>
    <section class="body">
      <div class="slider s_servicios"></div>
      <div class="breacrumb"></div>
      <div class="title">
        <h1>SERVICIOS</h1>
        <div class="underline_title"></div>
      </div>
      <section class="tabs">
        <div class="tabs_button">
          <button class="tab_link left_tab active" onclick="openTab(event, 'Personales')" id="defaultOpen">PERSONALES</button>
          <button class="tab_link right_tab" onclick="openTab(event, 'Patrimoniales')">PATRIMONIALES</button>
        </div>
        <div class="tab_section" id="Personales">
          <div class="tab_content tc_1">
            <div class="tab_content_white_border">
              <h3>AUTOMOTORES</h3>
              <p>Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="contacto.php" class="tab_cta">¡LLAME YA!</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_1">
            <div class="tab_content_white_border">
              <h3>1</h3>
              <p>Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="contacto.php" class="tab_cta">¡LLAME YA!</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_1">
            <div class="tab_content_white_border">
              <h3>1</h3>
              <p>Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="contacto.php" class="tab_cta">¡LLAME YA!</a>
            </div>
            <div class="black_square"></div>
          </div>
        </div>
        <div class="tab_section" id="Patrimoniales">
          <div class="tab_content tc_1">
            <div class="tab_content_white_border">
              <h3>AUTOMOTORES</h3>
              <p>Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="contacto.php" class="tab_cta">¡LLAME YA!</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_1">
            <div class="tab_content_white_border">
              <h3>1</h3>
              <p>Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="contacto.php" class="tab_cta">¡LLAME YA!</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_1">
            <div class="tab_content_white_border">
              <h3>1</h3>
              <p>Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="contacto.php" class="tab_cta">¡LLAME YA!</a>
            </div>
            <div class="black_square"></div>
          </div>
        </div>
      </section>
    </section>
    <?php
      include 'footer.html';
    ?>
  </container>

  <script>
    function openTab(evt, tabName) {
      var i, tab_section, tab_link;
      tab_section = document.getElementsByClassName("tab_section");
      for (i = 0; i < tab_section.length; i++) {
        tab_section[i].style.display = "none";
      }
      tab_link = document.getElementsByClassName("tab_link");
      for (i = 0; i < tab_link.length; i++) {
        tab_link[i].className = tab_link[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "grid";
      evt.currentTarget.className += " active";

    }
    document.getElementById("defaultOpen").click();
  </script>
</body>
</html>