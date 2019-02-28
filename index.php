<?php  ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mc Allister Asesores de Seguros es un Broker de seguros con basta experiencia en el mercado. Ingrese para ver nuestros servicios."/>
  <meta http-equiv=”content-language” content=”es”/>
  <meta name=”distribution” content=”global”/>
  <meta name="keywords" content="seguros,broker,mcallister,macalister,macalister,mcalister,eduardo,fernando,seguro,automotores,autos,auto,asegurador,vendedordeseguros"/>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Open+Sans:100,400" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
  <title>Mc Allister Asesores</title>
</head>
<body>
  <container class="container">
    <?php
      include 'menu_collapsible.html';
      include 'menu_desktop.html';
    ?>
    <section class="body">
      <!-- INDEX -->
      <div class="s_index slider" id="home">
        <h1 class="main_title">Mc Allister Asesores de seguros</h1>
        <p class="main_paragraph">"Estamos siempre para asesorarlo y acompañarlo brindándoles la mejor protección y servicio."</p>
      </div>
      <!-- <div class="welcome">
        <h1 class="main_title">Bienvenido</h1>
        <h3>Estamos siempre para asesorarlo y acompañarlo brindándoles la mejor protección y servicio.</h3>
      </div> -->
      <!-- <div class="thumbnails">
        <h2 class="thumbs_title">ACCESOS RÁPIDOS</h2>
        <div class="thumb">
          <a href="#">
            <div class="thumb1">
              <div class="circle"></div>
              <h3>SERVICIOS QUE OFRECEMOS</h3>
              <p class="paragraph">Texto de prueba. Acá lo llenás con lo que vos quieras y yo lo pongo al toque. Este es un texto muy largo de 3 líneas mínimo.</p>
            </div>
          </a>
        </div>
        <div class="thumb">
          <a href="#">
            <div class="thumb2">
              <div class="circle"></div>
              <h3>COMPAÑÍAS CON LAS QUE TRABAJAMOS</h3>
              <p class="paragraph">Texto de prueba. Acá lo llenás con lo que vos quieras y yo lo pongo al toque. Este es un texto muy largo de 3 líneas mínimo.</p>
            </div>
          </a>
        </div>
        <div class="thumb">
          <a href="#">
            <div class="thumb3">
              <div class="circle"></div>
              <h3>QUIÉNES SOMOS</h3>
              <p class="paragraph">Texto de prueba. Acá lo llenás con lo que vos quieras y yo lo pongo al toque. Este es un texto muy largo de 3 líneas mínimo.</p>
            </div>
          </a>
        </div>
        <div class="thumb">
          <a href="#">
            <div class="thumb4">
              <div class="circle"></div>
              <h3>FORMULARIOS</h3>
              <p class="paragraph">Texto de prueba. Acá lo llenás con lo que vos quieras y yo lo pongo al toque. Este es un texto muy largo de 3 líneas mínimo.</p>
            </div>
          </a>
        </div>
      </div> -->

      <!-- NOSOTROS -->
      <div class="title us" id="us">
        <h1 class="primary_title">NOSOTROS</h1>
        <div class="underline_title"></div>
      </div>
      <div class="text_content">
        <p class="paragraph">Somos una organización de productores de seguros especializada en brindar asesoramiento y soluciones profesionales en coberturas de todo tipo de riesgos, como seguros patrimoniales y de personas, tanto de líneas personales como comerciales, a medida de cada necesidad.</p>

        <p class="paragraph">Tenemos una trayectoria de 37 años de experiencia en el mercado, operamos con las mejores aseguradoras de plaza para cada riesgo, en un mercado altamente competitivo y de cambios. Esto nos permite satisfacer las necesidades de nuestros clientes de una manera responsable y eficiente.</p>

        <h2 class="secondary_title">MISIÓN</h3>

        <p class="paragraph p_mission">Priorizamos la atención personalizada y post venta, especialmente el acompañamiento en el momento del siniestro. Entendemos ésta actividad como un negocio entre personas y por eso consideramos lo más importante: el trato hacia cada uno de ellos.</p>

        <h2 class="secondary_title">VISIÓN</h2>

        <p class="paragraph p_vision">Aprovechamos la experiencia, y nuestra competencia profesional que se renueva con constante capacitación, para adelantarnos al futuro, buscando coberturas innovadoras que requieren un vasto conocimiento técnico, porque sabemos que el único camino es trabajar bien, como si cada cliente fuera único, cada día comprometidos con la mejora continua... no son simples palabras, esta es nuestra vocación, 77 años avalan nuestro compromiso.</p>
      </div>

      <!-- SERVICIOS -->
      <div class="slider s_servicios" id="services">
        <div class="title">
          <h1 class="main_title">SERVICIOS</h1>
        <div class="underline_title"></div>
      </div>
      </div>
      <section class="tabs">
        <div class="tabs_button">
          <button class="tab_link left_tab active" onclick="openTab(event, 'Personas')" id="defaultOpen">PERSONAS</button>
          <button class="tab_link right_tab" onclick="openTab(event, 'Patrimoniales')">PATRIMONIALES</button>
          <button class="tab_link left_tab_under" onclick="openTab(event, 'Capacitacion')">CAPACITACIÓN</button>
          <button class="tab_link right_tab_under" onclick="openTab(event, 'Productores')">PRODUCTORES</button>
        </div>
        <div class="tab_section people" id="Personas">
          <div class="tab_content tc_1">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">SEGUROS DE VIDA</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_2">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">RIESGOS DEL TRABAJO</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_3">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">ACCIDENTES PERSONALES</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
        </div>
        <div class="tab_section patrim" id="Patrimoniales">
          <div class="tab_content tc_1">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">AUTOMÓVILES</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_2">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">HOGAR</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_3">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">COMERCIO</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_4">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">INDUSTRIA</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_5">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">CONSORCIOS</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_6">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">CAUCIÓN</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_7">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">EMBARCACIONES</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_8">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">TRANSPORTES</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_9">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">TÉCNICO</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
          <div class="tab_content tc_10">
            <div class="tab_content_white_border">
              <h3 class="terciary_title">RESPONSABILIDAD CIVIL</h3>
              <p class="paragraph">Texto de prueba que muestra los servicios que ofreces con una descripción bastante basta para que entiendan los clientes. Saludos cordiales</p>
              <a href="#contact" class="tab_cta">CONTÁCTENOS</a>
            </div>
            <div class="black_square"></div>
          </div>
        </div>
        <div class="tab_section tab_section_capac" id="Capacitacion">
          <div class="ts_cap ts_1">
            <div class="ts_cap_img ts_c_i_1">
              <h3 class="terciary_title">A EMPRESAS</h3>
            </div>
            <p class="paragraph">
              Comercial y técnica para empresas.
              <br>
              De actualización.
            </p>
            <a href="#contact" class="tab_cta ts_cta">CONTÁCTENOS</a>
          </div>
          <div class="ts_cap ts_2">
            <div class="ts_cap_img ts_c_i_2">
              <h3 class="terciary_title">A PRODUCTORES</h3>
            </div>
            <p class="paragraph">
              Planes de carrera. <br>
              Capacitación sobre coberturas. <br>
              Acompañamiento para crecimiento de carteras. <br>
              Experiencia y contención.
            </p>
            <a href="#contact" class="tab_cta ts_cta">CONTÁCTENOS</a>
          </div>
        </div>
        <div class="tab_section productores" id="Productores">
          <div class="ts_cap ts_1">
            <div class="ts_cap_img ts_c_i_1">
              <h3 class="terciary_title">FORME PARTE DE NUESTRA ORGANIZACIÓN</h3>
            </div>
              <p class="paragraph"></p>
              <a href="#contact" class="tab_cta ts_cta">CONTÁCTENOS</a>
          </div>
        </div>
      </section>

      <!-- COMPAÑIAS -->
      <div class="slider s_companies" id="companies">
        <div class="title">
          <h1 class="main_title">COMPAÑÍAS</h1>
        <div class="underline_title"></div>
      </div>

      </div>
      <div class="companies">
        <a target="_blank" href="http://www.allianz.com.ar" class="comp_square comp_1 link">
          <div class="comp_square_hover">
            <p class="comp_info">ALLIANZ</p>
          </div>
        </a>
        <a target="_blank" href="http://www.afianzadora.com.ar/" class="comp_square comp_2 link">
          <div class="comp_square_hover">
            <p class="comp_info">AFIANZADORA S.A.</p>
          </div>
        </a>
        <a target="_blank" href="https://www.laholando.com/" class="comp_square comp_3 link">
          <div class="comp_square_hover">
            <p class="comp_info">LA HOLANDO SUDAMERICANA</p>
          </div>
        </a>
        <a target="_blank" href="https://www.victoria.com.ar/" class="comp_square comp_4 link">
          <div class="comp_square_hover">
            <p class="comp_info">VICTORIA SEGUROS</p>
          </div>
        </a>
        <a target="_blank" href="https://www.fedpat.com.ar/" class="comp_square comp_5 link">
          <div class="comp_square_hover">
            <p class="comp_info">FEDERACIÓN PATRONAL</p>
          </div>
        </a>
        <a target="_blank" href="https://www.berkley.com.ar/" class="comp_square comp_6 link">
          <div class="comp_square_hover">
            <p class="comp_info">BERKLEY</p>
          </div>
        </a>
        <a target="_blank" href="https://www.berkley.com.ar/art/" class="comp_square comp_7 link">
          <div class="comp_square_hover">
            <p class="comp_info">BERKLEY ART</p>
          </div>
        </a>
        <a target="_blank" href="https://www.zurich.com.ar/" class="comp_square comp_8 link">
          <div class="comp_square_hover">
            <p class="comp_info">ZURICH</p>
          </div>
        </a>
        <a target="_blank" href="https://www.segurossura.com.ar/" class="comp_square comp_9 link">
          <div class="comp_square_hover">
            <p class="comp_info">SURA ACG</p>
          </div>
        </a>
        <a target="_blank" href="https://www.swissmedical.com.ar/smgnewsite/smglife/" class="comp_square comp_10 link">
          <div class="comp_square_hover">
            <p class="comp_info">SMG LIFE</p>
          </div>
        </a>
        <a target="_blank" href="https://www.swissmedical.com.ar/smgnewsite/smgart/" class="comp_square comp_11 link">
          <div class="comp_square_hover">
            <p class="comp_info">SMG ART</p>
          </div>
        </a>
        <a target="_blank" href="https://www.gruposancorseguros.com/ar/es/home-art" class="comp_square comp_12 link">
          <div class="comp_square_hover">
            <p class="comp_info">PREVENCIÓN RIESGOS DEL TRABAJO</p>
          </div>
        </a>
      </div>

      <!-- CONTACTO -->
      <div class="s_contact slider" id="contact">
        <div class="title">
          <h1 class="main_title">CONTACTO</h1>
        <div class="underline_title"></div>
      </div>
      </div>
      <div class="contact_container">
        <?php include('./contact_form_handler.php'); ?>
        <form class="contact_form" action="<?= $_SERVER['PHP_SELF'] ?>#form_contact" method="post" id="form_contact">
          <input class="paragraph contact_name" id="name" type="text" name="name" placeholder="Nombre" value=<?= $name ?>>
          <span class="form_input_error fie_1"><?= $name_error ? $name_error : null ?></span>
          <input class="paragraph contact_mail" id="email" type="email" name="email" placeholder="Email" value=<?= $email ?>>
          <span class="form_input_error fie_2"><?= $email_error ? $email_error : null ?></span>
          <input class="paragraph contact_issue" id="issue" type="text" name="issue" placeholder="Asunto" value=<?= $issue ?>>
          <span class="form_input_error fie_3"><?= $issue_error ?></span>
          <textarea class="paragraph contact_message" id="message" name="message" placeholder="Escriba su mensaje" ><?= $message ?></textarea>
          <span class="form_input_error fie_4"><?= $message_error ?></span>
          <button type="submit" class="contact_button">ENVIAR</button>
          <span class="form_input_success"><?= $success; ?></span>
        </form>
        <p class="paragraph">¿Tiene dudas sobre su seguro actual? ¿Necesita un seguro? ¿Hay algo que siente que se puede mejorar? ¡Contáctenos!</p>
        <div class="contact_details">
          <i class="fas fa-map-pin contact_map_icon"></i>
          <i class="fas fa-mobile contact_phone_icon"></i>
          <i class="fab fa-whatsapp contact_wp_icon"></i>
          <i class="far fa-envelope-open contact_mail_icon"></i>
          <p class="paragraph cd_5">Av. Maipú 851, 9º J, Vicente López, Buenos Aires.</p>
          <p class="paragraph cd_6">011 4797 6646</p>
          <p class="paragraph cd_7">011 4491 4203</p>
          <a href="mailto:mcallister@mcallisterasesores.com.ar" class="paragraph cd_8">mcallister@mcallisterasesores.com.ar</a>
        </div>
      </div>

    </section>
    <?php
      include 'footer.html';
    ?>
  </container>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
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

      $(document).ready(function() {

        // Get the nav height
        var headerHeight = $('nav').outerHeight();

        // Animation when click on menu links
        $('.menuLink').click(function() {

          var linkHref = $(this).attr('href');

          $('html, body').animate({
            scrollTop: $(linkHref).offset().top - headerHeight
          }, 1000);

        });
    });
  </script>
</body>
</html>
