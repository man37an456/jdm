<?php
require_once "conf/ini.php";
$ini=new configIni();

?>

<!DOCTYPE html>
<html lang="en">
<?php 
$ini -> head('Jardines');
?>

<body>


<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
<link rel="stylesheet" href="./style.css">
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
		<div id="logo"><img src="images/bds.png" aling=right width="100" height="30"></div>

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

        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/perfect.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
              
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter">
        <div class="container oferta-section">
            <div class="container oferta-section">
                <div class="row">
                    <div class="col-md-6 align-items-stretch d-flex ftco-animate">
                        <div class="img img-video d-flex align-items-center"
                            style="background-image: url(images/bambu.jpg);">
                            <div class="video justify-content-center">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5">
                        <h2 class="mb-4">Salón Bamboo​</h2>
                        <p>Rodeado de naturaleza, Salón Bamboo; la palapa más grande de Latinoamérica,
                           cuenta con una magnifica vista al jardín acuático central.</p>
                        <br>
                        <p><a href="salonbamboo.php" class="btn btn-primary">Me Interesa</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 align-items-stretch d-flex order-md-12 ftco-animate">
                        <div class="img img-video d-flex align-items-center"
                            style="background-image: url(images/italiano2.jpg);">
                            <div class="video justify-content-center">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5 order-md-1">
                        <h2 class="mb-4">Jardín Estilo Italiano</h2>
                        <p class="text-right">Traslada tu mente a la época más romántica; para celebraciones únicas llenas de 
                        elegancia y majestuosos paisajes, desde su terraza pergolada donde se contempla 
                        la belleza de los parterres y el paisaje inigualable hacia la Sierra Negra.</p>
                        <br>
                        <p class="text-right"><a href="jardinitaliano.php" class="btn btn-primary">Me Interesa</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 align-items-stretch d-flex ftco-animate">
                        <div class="img img-video d-flex align-items-center"
                            style="background-image: url(images/expocriser.jpg);">
                            <div class="video justify-content-center">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5">
                        <h2 class="mb-4">Expo Chriser</h2>
                        <p>Un espacio al aire libre que gracias a su amplitud, 
                           podemos diseñar todo tipo de eventos de ensueño. Rodeado
                           por el espectacular Jardín Cuatro Primaveras, increíble lugar para celebrar
                           eventos en distintos formatos y capacidades.</p>
                        <br>
                        <p><a href="expocriser.php" class="btn btn-primary">Me Interesa</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 align-items-stretch d-flex order-md-12 ftco-animate">
                        <div class="img img-video d-flex align-items-center"
                            style="background-image: url(images/laberinto2.jpg);">
                            <div class="video justify-content-center">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5 order-md-1">
                        <h2 class="mb-4">Laberinto de los Sentidos</h2>
                        <p class="text-right">El único laberinto diseñado no para perderse sino para encontrARTE,
                        sorpréndete al recorrer túneles verdes y encontrar cómo la naturaleza se une con el arte..</p>
                        <br>
                        <p class="text-right"><a href="laberinto.php" class="btn btn-primary">Me Interesa</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 align-items-stretch d-flex ftco-animate">
                        <div class="img img-video d-flex align-items-center"
                            style="background-image: url(images/japones.jpg);">
                            <div class="video justify-content-center">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5">
                        <h2 class="mb-4">Pagoda Jardín Estilo Japonés</h2>
                        <p>Déjate llevar por el agua y el viento para vivir una experiencia íntima enmarcada por el diseño 
                           único estilo japonés; con elementos en perfecta sintonía y con gran significado cultural que hará 
                           tu evento como lo habías soñado..</p>
                        <br>
                        <p><a href="jardinjapones.php" class="btn btn-primary">Me Interesa</a></p>
                    </div>
                </div> 
            </div>
    </section>








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


</html>