<?php
require_once "conf/ini.php";
$ini=new configIni();
?>

<!DOCTYPE html>
<html lang="en">

<?php 
$ini -> head('Jardin Italiano');
?>

<body>
   
  <head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
<link rel="stylesheet" href="./stylebtn.css">
<link rel="stylesheet" href="./styleg.css">
<link rel="stylesheet" href="./style.css">
<script  src="./scriptbtn.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
</head>





<header>
		<div id="logo" class="logo-nav"><img src="images/bds.png" aling=right width="100" height="30"></div>

		<div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
	
	</header>

	<nav id="main-nav">
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a class="current" href="jardines.php">Espacios</a></li>
			<li><a href="servicios.php">Servicios</a></li>
			<li><a href="nosotros.php">Nosotros</a></li>
			<li><a href="FAQS.php">FAQS</a></li>
		</ul>
	</nav>

  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./script.js"></script>

    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/servicios2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-counter">
        <div class="container oferta-section">
            <div class="row justify-content-center mb-5 pb-9">
                <div class="col-md-12 text-center heading-section heading-section-black ftco-animate">
                    <h2 class="mb-4">Jardin Italiano</h2>
                    <p>Traslada tu mente a la época más romántica; para celebraciones únicas llenas de 
                       elegancia y majestuosos paisajes, desde su terraza pergolada donde se contempla 
                       la belleza de los parterres y el paisaje inigualable hacia la Sierra Negra.
                       Déjate envolver por la belleza y colorido de las flores que en conjunto con el arte y 
                       elementos geométricos transportarán ese día especial a una elegante villa del renacimiento.
                    </p><BR>
                </div>
            </div>
            
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 col-md-6 heading-section heading-section-black ftco-animate pl-lg-2  pt-md-0 pt-0">
                    <h2 class="mb-4">Reserva</h2>
                    <ul>
                        <p>
                            <div class="container-icon">
                                <i class="icon-calendar"></i>
                            </div>Dia: Reserva Con Anticipacion
                        </p>
                        <p>
                            <div class="container-icon">
                                <i class="fa fa-cutlery"></i>
                            </div>Menu:Comida, Bebidas y Postres
                        </p>
                        <p>
                            <div class="container-icon">
                                <i class="icon-clock-o"></i>
                            </div>Hora de Inicio: 00:00
                        </p>
                        <p>
                            <div class="container-icon">
                                <i class="icon-clock-o"></i>
                            </div>Hora Final: 00:00
                            
                        </p>


                        <p>
                            <div class="container-icon">
                                <i class="fa fa-users"></i>
                            </div>Capacidad Máxima 450 personas
                            
                        </p>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 heading-section heading-section-black ftco-animate pl-lg-2 pt-md-0 pt-0">
                    <h2 class="mb-4">Mas</h2>
                    <ul>
                        <li>Arreglo</li>
                        <li>Mesas</li>
                        <li>Sillas</li>
                        <li>Pista De Baile</li>
                        <li>Musica</li>
                        <li>Fotos</li>
                        <li>Videos</li>
                    </ul>
                </div>
            </div>
            
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                    <h2 class="mb-4">¿Como es lugar?</h2>
    
                </div>
                <div class="video-container">
                    <center>
    <iframe width="860" height="515" src="https://www.youtube.com/embed/dcPVE4CpyqE" title="Salon bamboo" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
         allowfullscreen></iframe>
         </center>
  </div>


            </div>
    </section>

    <a  href="index.php#contact-section">
    <button class="bubbly-button">ME INTERESA!</button>
    </a>



    <div class="spinner">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>

<div class='gallery'>
  <img src='images/carru1.jpg' />
  <img src='images/2bds.jpg' />
  <img src='images/italiano2.jpg' />
  <img src='images/4bds.jpg' />

</div>
<div id='tapame' />



<?php 

$ini -> scripts();
?>





<script src="js/adaptive-tabs.js"></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script  src="./scriptbtn.js"></script>
<script  src="./scriptg.js"></script>
<script src="js/adaptive-tabs.js"></script>
</body>

</html>