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

  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
  <title>Mc Allister Asesores | Inicio</title>
</head>
<body>
  <container class="container">
    <?php
      include 'menu_collapsible.html';
      include 'menu_desktop.html';
    ?>
    <section class="body">
      <div class="s_contact slider"></div>
      <div class="breacrumb"></div>

      <div class="title">
        <h1>CONTACTO</h1>
        <div class="underline_title"></div>
      </div>

      <div class="contact_container">
        <form class="contact_form" action="" method="post">
          <input class="paragraph contact_name" id="name" type="text" name="name" placeholder="Nombre">
          <input class="paragraph contact_mail" id="email" type="email" name="email" placeholder="Email">
          <input class="paragraph contact_issue" id="issue" type="text" name="issue" placeholder="Asunto">
          <textarea class="paragraph contact_message" id="message" name="message" placeholder="Escriba su mensaje"></textarea>
          <button type="submit" class="contact_button">ENVIAR</button>
        </form>
        <p class="paragraph">¿Tiene dudas sobre su seguro actual? ¿Necesita un seguro? ¿Hay algo que siente que se puede mejorar? ¡Contáctenos!</p>
        <div class="contact_details">
          <p class="paragraph_bold cd_1">Dirección</p>
          <p class="paragraph_bold cd_2">Teléfono</p>
          <p class="paragraph_bold cd_3">Whatsapp</p>
          <p class="paragraph_bold cd_4">Email</p>
          <p class="paragraph cd_5">Av. Maipú 851, 9º J, Vicente López, Buenos Aires.</p>
          <p class="paragraph cd_6">011 4797 6646</p>
          <p class="paragraph cd_7">011 4491 4203</p>
          <p class="paragraph cd_8">mcallister@mcallisterasesores.com.ar</p>
        </div>
      </div>
    </section>
    <?php
      include 'footer.html';
    ?>
  </container>
</body>
</html>