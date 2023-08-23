<?php
require_once "conf/ini.php";
$ini=new configIni();
?>

<!DOCTYPE html>
<html lang="en">
<?php 
$ini -> head('FAQS');
?>

<body>
  


<head>

<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

</head>

<style>
     

        .left-img {
            float: left;
            margin-right: 20px; 
            width: 25%;
            height: 100%;
        }

        .right-img {
            float: right;
            margin-left: 20px; 
            width: 25%;
            height: 100%;
        }
    </style>


<header>

<div id="logo"><img src="images/bds.png" aling=right width="100" height="30"></div>

<div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>

</header>

<nav id="main-nav">
<ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="jardines.php">Espacios</a></li>
    <li><a href="servicios.php">Servicios</a></li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li><a class="current" href="FAQS.php">FAQS</a></li>
</ul>
</nav>
</header>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/pregunta.jpg');">
        <div class="overlay"></div>
        <div class="container">
            
            </div>
        </div>
    </section>


<body>
  <div class="container">

    <h1 class="titulo-ser">Bodas <br> Preguntas - Frecuentes</h1>
    <div class="faq">
      <h2>¿Cuándo y dónde se celebrará la boda?</h2>
      <p>Nuestra boda se llevará a cabo el [fecha] en [lugar], [ciudad/país].</p>
      <br>
      <h2>¿Cómo puedo confirmar mi asistencia a la boda?</h2>
      <p>Puedes confirmar tu asistencia completando el formulario de RSVP en nuestro sitio web o enviándonos un correo electrónico a [correo electrónico de RSVP].</p>
      <br>
      <h2>¿Habrá un código de vestimenta para la boda?</h2>
      <p>Sí, el código de vestimenta para nuestra boda es [especificar código de vestimenta].</p>
      <br>
      <h2>¿Habrá estacionamiento disponible en el lugar de la ceremonia/recepción?</h2>
      <p>Sí, habrá estacionamiento disponible para los invitados en el lugar de la ceremonia/recepción.</p>
      <br>
      <h2>¿Tienen alguna recomendación de alojamiento cercano para los invitados que vienen de fuera?</h2>
      <p>Por supuesto, hemos asegurado tarifas especiales en hoteles cercanos. Puedes encontrar más información en la sección de "Alojamiento" de nuestro sitio web.</p>
      <br>
      <h2>¿Habrá opciones de comida para personas con dietas especiales?</h2>
      <p>Sí, tenemos previstas opciones de comida para vegetarianos, veganos y personas con necesidades dietéticas especiales. Por favor, avísanos con antelación para poder atender tus necesidades.</p>
      <br>
      <h2>¿Podemos llevar regalos a la boda?</h2>
      <p>Tu presencia es el mejor regalo que podríamos pedir. No esperamos regalos, pero si deseas hacernos un presente, una contribución a nuestra luna de miel será muy apreciada.</p>
      <br>
      <h2>¿Se permiten niños en la boda?</h2>
      <p>Por supuesto, los niños son bienvenidos a nuestra boda. También habrá un área especial con cuidadores para que los padres puedan disfrutar del evento sin preocupaciones.</p>
      <br>
      <h2>¿Habrá entretenimiento en vivo durante la recepción?</h2>
      <p>Sí, tendremos un increíble grupo musical que nos acompañará durante la recepción para animar la fiesta.</p>
      <br>
      <h2>¿Puedo tomar fotografías durante la ceremonia y la recepción?</h2>
      <p>Claro, ¡nos encantaría que captures los momentos especiales! Te pedimos que etiquetes tus fotos en las redes sociales con nuestro hashtag oficial [#hashtag] para que podamos verlas también.</p>
      <br>
      <h2>¿Se proporcionará transporte desde el hotel a la ceremonia/recepción?</h2>
      <p>Sí, hemos organizado un servicio de transporte para llevar a los invitados desde el hotel al lugar de la ceremonia y la recepción.</p>
      <br>
      <h2>¿Necesitamos llevar algo específico para la boda, aparte de nosotros mismos?</h2>
      <p>No es necesario que traigas nada específico, pero te recomendamos traer tu mejor energía y ganas de celebrar con nosotros.</p>
      <br>
      <h2>¿Tienen una lista de bodas?</h2>
      <p>Sí, hemos creado una lista de bodas en [nombre de la tienda] donde podrás encontrar algunas ideas de regalos si así lo deseas.</p>
      <br>
      <h2>¿Podemos compartir nuestras canciones favoritas para que las toquen durante la recepción?</h2>
      <p>Por supuesto, ¡nos encantaría conocer tus canciones favoritas! Puedes enviarnos tus sugerencias de canciones a nuestro correo electrónico y las agregaremos a la lista de reproducción.</p>
      <br>
      <h2>¿Qué medidas se están tomando debido a la situación de la COVID-19?</h2>
      <p>La salud y seguridad de nuestros invitados es una prioridad. Estamos siguiendo las pautas locales y nacionales para asegurarnos de que la boda se realice de manera segura. Se proporcionarán estaciones de desinfección, se respetará el distanciamiento social y se requerirá el uso de mascarillas según las regulaciones vigentes.</p>
      <br>
    </div>
  
  </div>


  
</body>

<?php 
       $ini -> footer();
       $ini -> scripts();
    ?>

</body>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
<script  src="./script.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</html>