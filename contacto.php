<?php
require_once "conf/ini.php";
$ini=new configIni();
?>

<!DOCTYPE html>
<html lang="en">

<?php 
$ini -> head('Contacto');
?>
<body>
  
<link rel="stylesheet" href="./style.css">


<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">

</head>




    <header>
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#"><img src="images/Logo-Escuela-de-Jardineria blanco.png"aling=right width="100" height="30"></a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="nosotros.php"><i class="fa fa-users" aria-hidden="true"></i></i>Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="oferta-academica.php"><i class="fa fa-book" aria-hidden="true"></i>Oferta Academica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="planta-docente.php"><i class="fa fa-address-card" aria-hidden="true"></i></i>Planta Docente</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contacto.php"><i class="fa fa-envelope" aria-hidden="true"></i>Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php"><i class="fa fa-cart-plus" aria-hidden="true"></i>Servicios</a>
                </li>
            </ul>
        </div>
    </nav>

</header>

  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./script.js"></script>



    
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner2.jpg');">
        <div class="overlay"></div>
        <div class="container">
        
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ">
        <div class="container">
            <div class="row d-flex contact-info justify-content-center">
                <div class="col-md-6 d-flex mb mb-3">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Direcion</h3>
                        <p>	Mexico-Acapulco km 129, 62900 Tehuixtla Mor.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-3">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Telefono</h3>
                        <p><a>777-333-0141</a></p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-3">
                    <div class="bg-light align-self-stretch box p-2 text-center">
                        <h3 class="mb-4">Correo Electronico</h3>
                        <p><a>ventas@jardinesdemexico.org</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="Acciones/enviarmsj.php" method="POST" >
                        <div class="form-group">
                            <input type="email" class="form-control" name="remitente" placeholder="Correo Electronico" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre_us_msj" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  name="asunto_msj" placeholder="Asunto" required >
                        </div>
                        <div class="form-group">
                        <select name="ubicacion2" class="custom-select">
                                <option value="estdo2" selected>Estado</option>               
      <option value="Aguascalientes">Aguascalientes</option>
      <option value="Baja California">Baja California</option>
      <option value="Baja California Sur">Baja California Sur</option>
      <option value="Campeche">Campeche</option>
      <option value="Chiapas">Chiapas</option>
      <option value="Chihuahua">Chihuahua</option>
      <option value="CDMX">Ciudad de México</option>
      <option value="Coahuila">Coahuila</option>
      <option value="Colima">Colima</option>
      <option value="Durango">Durango</option>
      <option value="Estado de México">Estado de México</option>
      <option value="Guanajuato">Guanajuato</option>
      <option value="Guerrero">Guerrero</option>
      <option value="Hidalgo">Hidalgo</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Michoacán">Michoacán</option>
      <option value="Morelos">Morelos</option>
      <option value="Nayarit">Nayarit</option>
      <option value="Nuevo León">Nuevo León</option>
      <option value="Oaxaca">Oaxaca</option>
      <option value="Puebla">Puebla</option>
      <option value="Querétaro">Querétaro</option>
      <option value="Quintana Roo">Quintana Roo</option>
      <option value="San Luis Potosí">San Luis Potosí</option>
      <option value="Sinaloa">Sinaloa</option>
      <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
      <option value="Tamaulipas">Tamaulipas</option>
      <option value="Tlaxcala">Tlaxcala</option>
      <option value="Veracruz">Veracruz</option>
      <option value="Yucatán">Yucatán</option>
      <option value="Zacatecas">Zacatecas</option>
                                            </select>
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="7"  name="mensaje_msj" class="form-control" placeholder="Mensaje" required></textarea>
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



    <?php 
        $ini -> footer();
        $ini -> scripts();
    ?>

</body>

</html>