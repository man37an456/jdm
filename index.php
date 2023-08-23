<?php
require_once "conf/ini.php";
$ini=new configIni();

?>

<!DOCTYPE html>
<html lang="en">
<?php 
$ini -> head('Inicio');
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
		<div id="logo" class="logo-nav"><img src="images/bds.png" aling=right width="100" height="30"></div>

		<div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
	
	</header>

	<nav id="main-nav">
		<ul>
			<li><a class="current" href="index.php">Inicio</a></li>
			<li><a href="jardines.php">Espacios</a></li>
			<li><a href="servicios.php">Servicios</a></li>
			<li><a href="nosotros.php">Nosotros</a></li>
			<li><a href="FAQS.php">FAQS</a></li>
		</ul>
	</nav>



    <!-- END nav -->
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(images/Bodas/ceremonia.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate">
                        <h1 class="mb-4"></h1>


                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(images/Bodas/carrusel.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate">
                        <h1 class="mb-4"></h1>


                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image:url(images/Bodas/carrusel2.JPG);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate">


                    </div>
                </div>
            </div>
        </div>
    </section>


<br>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/fondobds.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center">
                        <div class="video justify-content-center">
                            <a class="popup-vimeo d-flex justify-content-center align-items-center">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/cP3RZcaC9XY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
    clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
                                <span class="ion-ios-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <h2 class="mb-4">Bodas JDM</h2>
                    <p>Tenemos el mejor lugar para que puedes realizar tu boda
                        tenemos varios jardines con diferentes tamaños y estilos,
                        contamos con un gran servicio, tenemos estacionamiento, habitaciones para que la pareja
                        pueda descansar despues de disfrutar su bodas ademas de tener un agran variedad de platillos y bebidas.</p>
                </div>
            </div>
       
        </div>
    </section>





    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img" style="background-image: url(images/Bodas/ceremonia.jpg);"></div>
                </div>
                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                    <h2 class="mb-4 titulo-ser">Servicios</h2>
                    <p>AL realizar tu boda en jardines de mexico pudes tener muchos servicios que haran tu boda mucho mejor estos servicios puden venir inculidos o no dependiendo de tus contrato.</p>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="fa fa-cutlery"></span></div>
                                <div class="text pl-3">
                                    <h3>Platillos</h3>
                                    <p>Los mejores platillos y postres acompañalos con unas bebidas, tenemos una gran varierdad de comidas y bebidas 
                                        para que puedas disfrutra de una deliciosa comida echa en JDM.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="fa fa-envira"></span></div>
                                <div class="text pl-3">
                                    <h3>Jardines</h3>
                                    <p>Realiza tu celebracion en uno de nuestros jardines tenemos 8 lugares para relizar tu celebracion elige deeacuerdo a tus necesidades o gustos .</p>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-jigsaw"></span></div>
                                <div class="text pl-3">
                                    <h3>Diseño</h3>
                                    <p>Adornamos el jardin de la manera mas elegante o coveninete a tus gustos  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="fa fa-diamond"></span></div>
                                <div class="text pl-3">
                                    <h3>Ceremonia Nupsial</h3>
                                    <p>Realiza tu ceremonia en el jardin que mas te agrade.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section">
        <div class="container px-4">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Nuestros</span>Espacios</h2>
                    <p>Ven y celebra tu dia mas importante y especial en nuestros espacios contamos con muchos espacios y con diferentes tematicas contamos
                       con hermosos jardines y salones ademas de diferente cantidad de capacidad para cada espacio.
                        .</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-12 course ftco-animate">
                    <div class="img" style="background-image: url(images/bambu.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                            <span><i class="fa fa-hashtag"></i>Cantidad de Personas</span>
                            <span><i class="fa fa-users"></i>Capacidad Máxima 450 personas</span>
                        </p>
                        <br>
                        <h3><a href="salonbamboo.php">Salón Bamboo</a></h3>
                        <br>
                        <p class="mb-5">Rodeado de naturaleza, Salón Bamboo; la palapa más grande de Latinoamérica,
                         cuenta con una magnifica vista al jardín acuático central.</p>
                        <p><a href="salonbamboo.php" class="btn btn-primary">Me Interesa</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 course ftco-animate">
                    <div class="img" style="background-image: url(images/italiano2.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                        <span><i class="fa fa-hashtag"></i>Cantidad de Personas</span>
                            <span><i class="fa fa-users"></i>Capacidad Máxima 260 personas</span>
                        </p>
                        <br>
                        <h3><a href="jardinitaliano.php">Jardín Estilo Italiano</a></h3>
                        <br>
                        <p class="mb-5">Traslada tu mente a la época más romántica; para celebraciones únicas llenas de 
elegancia y majestuosos paisajes, desde su terraza pergolada donde se contempla 
la belleza de los parterres y el paisaje inigualable hacia la Sierra Negra..</p>
                        <p><a href="jardinitaliano.php" class="btn btn-primary">Me Interesa</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 course ftco-animate">
                    <div class="img" style="background-image: url(images/laberinto.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                        <span><i class="fa fa-hashtag"></i>Cantidad de Personas</span>
                            <span><i class="fa fa-users"></i>Capacidad Máxima 100 personas</span>
                        </p>
                        <br>
                        <h3><a href="laberinto.php">Laberinto de los Sentidos</a></h3>
                        <br>
                        <p class="mb-4">El único laberinto diseñado no para perderse sino para encontrARTE,
                        sorpréndete al recorrer túneles verdes y encontrar cómo la naturaleza se une con el arte.
                         Abre tus sentidos y atrévete a vivir una celebración llena de sorpresas en la explanada central, 
                         antesala de nuestra Galería de Arte.</p>
                        <p><a href="laberinto.php" class="btn btn-primary">Me Interesa</a></p>
                    </div>
                </div>
                <div class="col-md-4 course ftco-animate">
                    <div class="img" style="background-image: url(images/japones.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                        <span><i class="fa fa-hashtag"></i>Cantidad de Personas</span>
                            <span><i class="fa fa-users"></i>Capacidad Máxima 20 personas</span>
                        </p>
                        <br>
                        <h3><a href="jardinjapones.php">Pagoda Jardín Estilo Japonés</a></h3>
                        <br>
                        <p>Déjate llevar por el agua y el viento para vivir una experiencia íntima enmarcada por el diseño 
                           único estilo japonés; con elementos en perfecta sintonía y con gran significado cultural que hará 
                           tu evento como lo habías soñado.
                        </p>
                        <p><a href="jardinjapones.php" class="btn btn-primary">Me Interesa</a></p>
                    </div>
                </div>
                <div class="col-md-4 course ftco-animate">
                    <div class="img" style="background-image: url(images/expocriser.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                        <span><i class="fa fa-hashtag"></i>Cantidad de Personas</span>
                            <span><i class="fa fa-users"></i>Capacidad Máxima 2,500 personas</span>
                        </p>
                        <br>
                        <h3><a href="expocriser.php">Expo Chriser</a></h3>
                        <br>
                        <p>Un espacio al aire libre que gracias a su amplitud, podemos diseñar todo
                           tipo de eventos de ensueño. Rodeado por el espectacular Jardín Cuatro Primaveras, 
                           increíble lugar para celebrar eventos en distintos formatos y capacidades.</p>
                        <p><a href="expocriser.php" class="btn btn-primary">Me Interesa</a></p>
                    </div> 
                </div>  
            </div>  
  
        </div>    
    </section>




    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" 
    style="background-image: url(images/yomaja.jpg);"
        data-stellar-background-ratio="0.5" id="contact-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2 class="mb-4">¿Estas Interesado?</h2>
                            <p>Contactanos y consulta nuestros servicios.</p>
                        </div>
                        <form action="acciones/enviar.php" method="POST" class="appointment-form ftco-animate">
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nombre_usuario"  placeholder="Nombre Completo" required>
                                    <input type="email" class="form-control" name="correo_usuario" placeholder="Correo Electronico" required>
                                </div>
                            </div>

                            
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="jardin_de_interes" class="custom-select">
                                            <option value="Jardin De Interes" selected>Jardin de Interes</option>
                                                <option value="Salon Bamboo" >Salón Bamboo</option>
                                                <option value="Jardin Estilo Italiano">Jardín Estilo Italiano</option>
                                                <option value="Jardin Expo Chriser">Jardín Expo Chriser</option>
                                                <option value="Laberinto de los Sentidos">Laberinto de los Sentidos</option>
                                                <option value="Pagoda de Jardín Estilo Japonés">Pagoda de Jardín Estilo Japonés</option>
                                            </select>
                                        </div>
                                      </div>
                                </div>
                                            <br>
                                <div class="form-group ml-md-4">
                                  
                                   <input type="number" maxlength="10" class="form-control" name="telefono" placeholder="Telefono" required oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <textarea name="concepto" id="" cols="30" rows="2" class="form-control"
                                        placeholder="Mensaje" required></textarea>
                                </div>
                                
                                <div class="form-group ml-md-4">
                                    <input type="submit" value="Enviar" class="btn btn-primary py-3 px-4">
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section -="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="images/1bds.jpg" class="gallery image-popup img d-flex align-items-center "
                        style="background-image: url(images/1bds.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="fa fa-picture-o"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/2bds.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/2bds.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="fa fa-picture-o"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/3bds.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/3bds.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="fa fa-picture-o"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/4bds.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/4bds.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="fa fa-picture-o"></span>
                        </div>
                    </a>
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











