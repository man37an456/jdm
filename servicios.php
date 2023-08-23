<?php
require_once "conf/ini.php";
$ini=new configIni();

?>

<!DOCTYPE html>
<html lang="en">
<?php 
$ini -> head('Servicios');
?>

<body>




<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet'
href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


</head>


<header>

<div id="logo"><img src="images/bds.png" aling=right width="100" height="30"></div>

<div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>

</header>

<nav id="main-nav">
<ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="jardines.php">Espacios</a></li>
    <li><a class="current" href="servicios.php">Servicios</a></li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li><a href="FAQS.php">FAQS</a></li>
</ul>
</nav>





    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/servicios2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
              
            </div>
        </div>
    </section>

   





<br>





    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" 
    style="background-image: url(images/arreglo.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5" style="text-align: right" >
                        <h2 class="mb-4" style="text-align: right" >Coordinación de bodas</h2>
                            <p style="text-align: right" >Deja que nuestros expertos se encarguen de
                               todos los detalles de tu boda para que tú,
                               solo te encargues de disfrutar al máximo.</p>
                        </div>
                        <form action="Acciones/añadir.php" method="POST" class="appointment-form ftco-animate">
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<br>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" 
    style="background-image: url(images/comida.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5" style="text-align: left;">
                        <h2 class="mb-4" style="text-align: left;" >Alimentos y bebida</h2>
                            <p style="text-align: left;" >Sorpréndete con los sabores únicos de nuestro banquete, ejecutado bajo los 
                               más estrictos estándares de calidad, acatandolos protocolos del Distintivo H y
                               Tesoros de México. Sorpréndete con los sabores únicos de nuestro banquete, ejecutado bajo los 
                               más estrictos estándares de calidad, acatandolos protocolos del Distintivo H y
                               Tesoros de México.</p>
                        </div>
                        <form action="Acciones/añadir.php" method="POST" class="appointment-form ftco-animate">
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



<br>



    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" 
    style="background-image: url(images/cuarto.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5" style="text-align: right;">
                        <h2 class="mb-4" style="text-align: right;">Suites de los novios</h2>
                            <p style="text-align: right"  >Los espacios ideales, acondicionados con
                               la comodidad y privacidad que necesitas
                               antes de dar ese gran paso.</p>
                        </div>
                        <form action="Acciones/añadir.php" method="POST" class="appointment-form ftco-animate">
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <br>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/foto2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5">
                <div class="py-md-5" style="text-align: left;">
                    <div class="heading-section heading-section-white ftco-animate mb-5" style="text-align: left;" >
                        <h2 class="mb-4" style="text-align: left;">Locación para sesión de fotos</h2>
                        <p style="text-align: left;">Captura esos momentos únicos en nuestros increíbles jardines.</p>
                    </div>
                    <form action="Acciones/añadir.php" method="POST" class="appointment-form ftco-animate">

                    </form>
                </div>
            </div>
        </div>
    </div>                                    
</section>

<br>

<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: 
url(https://static.wixstatic.com/media/8a2760_36e7d0adf7244149b599eb2eeccbc63c~mv2.jpg/v1/fill/w_711,h_443,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/8a2760_36e7d0adf7244149b599eb2eeccbc63c~mv2.jpg);"
 data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5">
                <div class="py-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5" style="text-align: right;" >
                        <h2 class="mb-4">Audio e iluminación</h2>
                        <p>Completa tu celebración con lo mejor en audio e iluminación de nuestros proveedores seleccionados para que bailes toda la noche.</p>
                    </div>
                    <form action="Acciones/añadir.php" method="POST" class="appointment-form ftco-animate">

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<br>







<?php 
       
       $ini -> footer();
        $ini -> scripts();
    ?>

</body>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'>
</script><script  src="./script.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</html>