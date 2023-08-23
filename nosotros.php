<?php
require_once "conf/ini.php";
$ini=new configIni();
?>

<!DOCTYPE html>
<html lang="en">
<?php 
$ini -> head('Nostros');
?>

<body>
  


<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet'href=
'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
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
    <li><a href="servicios.php">Servicios</a></li>
    <li><a class="current" href="nosotros.php">Nosotros</a></li>
    <li><a href="FAQS.php">FAQS</a></li>
</ul>
</nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/contactanos.jpg');">
        <div class="overlay"></div>
        <div class="container">
            
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
         <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img" style="background-image: url(images/3bds.jpg); "></div>
                </div>
                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                    <h2 class="mb-4">Bodas Jardines de Mexico</h2>
                    <p>Hacer tu boda jardines es tu mejor decision, por que contamos con muchos servicios los cuales son banquetes, diseños. Tambien podras elegir el jardin que te agrade mas y que se adapte
                      a tus necesdidades.
                    </p>
                    <p>En jardines de mexico Bodas te brindaremos el mejor servicio para que tu y tus invitados sidfruten ese hermoso e inmemorable momento, disfruten de una hermosa vista y en los jardines mas 
                      grandes y hermosos de mexico, acompañados de una exquisita  comida y un delicioso vino o la bebida escuchando buena musica sera un momento inigualable en tu vida, acabando la fiesta podras quedarte en una 
                      en una de nuestras suits son comodas elegantes y muy limnpias.
                    </p>
                </div>
            </div>
        </div>
     </section>
     <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="acciones/form.php" method="POST" >
                        <div class="form-group">
                            <input type="email" class="form-control" name="correo_info" placeholder="Correo Electronico" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre_info" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  name="asunto_info" placeholder="Asunto" required >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  name="telefono_info" placeholder="Telefono" required >
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="7"  name="mensaje_info" class="form-control" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.236105492346!2d-99.29310478578373!3d18.608447171338966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdd36602675007%3A0xc972fcd1047fb9ef!2sJardines%20de%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1583449949728!5m2!1ses-419!2smx" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>


   <br>
   <br>
     
    <div class="redes-sociales">
      <h2>Siguenos En Nuesteras Redes Sociales</h2>
      <br>
      <a href="https://www.facebook.com/jardinesdemexico/" class="icono-social"><img src="images/facebook.jfif" alt="Facebook"></a>
      <a href="https://www.instagram.com/jardinesdemexico/" class="icono-social"><img src="images/instagram.jfif" alt="Twitter"></a>
      <a href="https://www.twitter.com/jardinesdemex" class="icono-social"><img src="images/twiter.jfif" alt="Instagram"></a>
    </div>

    <br>

    <br>

    <div class="paginas">
      <h2>¿Ya visitaste nuestros demas sitios?</h2>
      <br>
      <a href="https://jardinesdemexico.com" class="icono-jdm"><img src="images/jdm.png" alt="Jardines de Mexico"></a>
      <a href="https://www.escueladejardineria.com.mx" class="icono-esc"><img src="images/escjja.png" alt="Escuela de Jardineria"></a>
    </div>

    <br>


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