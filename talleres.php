<?php
require_once "conf/ini.php";
$ini=new configIni();
?>

<!DOCTYPE html>
<html lang="en">

<?php 
$ini -> head('Talleres');
?>

<body>
    <?php 
    $ini -> header("oferta-academica");
    ?>
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
                <li class="nav-item  ">
                    <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="nosotros.php"><i class="fa fa-users" aria-hidden="true"></i></i>Nosotros</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="oferta-academica.php"><i class="fa fa-book" aria-hidden="true"></i>Oferta Academica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="planta-docente.php"><i class="fa fa-address-card" aria-hidden="true"></i></i>Planta Docente</a>
                </li>
                <li class="nav-item">
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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/Encabezado_Talleres.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                  
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Taller de Orquídeas</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex ftco-animate">
                    <div class="img img-video align-items-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 13.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 14.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 15.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a> 
                        </div>
                        <div class="video justify-content-center">
                        </div>
                       
                    </div>

                </div>
                <div class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <ul class="list-unstyled">
                        <li><div class="container-icon"><i class="icon-av_timer mr-2"></div></i><strong>Duración:</strong> 6 horas</li>
                        <li><div class="container-icon"><i class="icon-clock-o mr-2"></div></i><strong>Horario:</strong> 10:00am a 3:00pm</li>
                        <li><div class="container-icon"><i class="icon-map-marker mr-2"></div></i><strong>Lugar:</strong> Escuela de jardinería</li>
                    </ul>
                    <p><strong>Objetivo:</strong> Que el participante conozca las diferentes técnicas y materiales para
                        crear un huerto, así como las principales especies utilizadas en eso.</P>
                    <ul>
                        <li>El mundo de las Phalaenopsis</li>
                        <li>Reproducción de Phalaenopsis</li>
                        <li>Sustratos y elaboración de mezclas para cultivar Phalaenopsis</i>
                        <li>Requerimientos ambientales</li>
                        <li>Fertilización</li>
                        <li>Plagas y Enfermedades</li>
                        <li>Hospital de orquídeas</li>
                    </ul>
                </div>
                <p><a href="" class="btn btn-primary">Unirme</a></p>
            </div>
            <hr style="width:95%">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Taller Huerto Básico</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex ftco-animate">
                    <div class="img img-video align-items-center">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 10.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 11.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 12.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="video justify-content-center">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <ul class="list-unstyled">
                        <li><div class="container-icon"><i class="icon-av_timer mr-2"></div></i><strong>Duración:</strong> 6 horas</li>
                        <li><div class="container-icon"><i class="icon-clock-o mr-2"></div></i><strong>Horario:</strong> 10:00am a 3:00pm</li>
                        <li><div class="container-icon"><i class="icon-map-marker mr-2"></div></i><strong>Lugar:</strong> Escuela de jardinería</li>
                    </ul>
                    <p><strong>Objetivo:</strong> Aprender las técnicas de cultivo y los requerimientos especiales
                        necesarios para las orquídeas del género Phalaenopsis.</P>
                    <ul>
                        <li>Introducción al huerto</li>
                        <li>Siembra y germinación</li>
                        <li>Compostero y sustrato</i>
                        <li>Ciclos de cultivo</li>
                        <li>Revalorización de recursos disponibles (Reciclar y reutilizar)</li>
                        <li>Transplantes</li>
                        <li>Principales plagas y enfermedades</li>
                        <li>Incorporación de la cosecha</li>
                        <li>Incorporación a los biopreparados</li>
                    </ul>
                </div>
                <p><a href="" class="btn btn-primary">Unirme</a></p>
            </div>
            <hr style="width:95%">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Taller de Cactáceas</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex ftco-animate ftco-animate">
                    <div class="img img-video align-items-center ftco-animate">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 4.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 5.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 6.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="video justify-content-center">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <ul class="list-unstyled">
                        <li><div class="container-icon"><i class="icon-av_timer mr-3"></div></i><strong>Duración:</strong> 6 horas</li>
                        <li><div class="container-icon"><i class="icon-clock-o mr-3"></div></i><strong>Horario:</strong> 10:00am a 3:00pm</li>
                        <li><div class="container-icon"><i class="icon-map-marker mr-3"></div></i><strong>Lugar:</strong> Escuela de jardinería</li>
                    </ul>
                    <p><strong>Objetivo:</strong> Que los participantes conozcan aspectos generales sobre las especies
                        sobresalientes, la importancia de su preservación y aprendan la principal técnica para realizar
                        injertos.
                        ​</P>
                    <ul>
                        <li>Introducción a las cactáceas</li>
                        <li>Demostración de un injerto</li>
                        <li>Realización de un injerto</i>
                    </ul>
                </div>
                <p><a href="" class="btn btn-primary">Unirme</a></p>
            </div>
            <hr style="width:95%">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Taller de Bonsai </h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex ftco-animate">
                    <div class="img img-video align-items-center">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 7.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 8.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 9.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="video justify-content-center">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <ul class="list-unstyled">
                        <li><div class="container-icon"><i class="icon-av_timer mr-2"></i></div><strong>Duración:</strong> 6 horas</li>
                        <li><div class="container-icon"><i class="icon-clock-o mr-2"></i></div><strong>Horario:</strong> 10:00am a 3:00pm</li>
                        <li><div class="container-icon"><i class="icon-map-marker mr-2"></i></div><strong>Lugar:</strong> Escuela de jardinería</li>
                    </ul>
                    <p><strong>Objetivo:</strong> Aprender las técnicas de cultivo y los requerimientos especiales
                        necesarios para los Bonsai.
                    </P>
                    <ul>
                        <li>El arte del bonsai</li>
                        <li>Especies a utilizar</li>
                        <li>Diseño</i>
                        <li>Alambrado</li>
                    </ul>
                </div>
                <p><a href="" class="btn btn-primary">Unirme</a></p>
            </div>
            <hr style="width:95%">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Taller de Suculentas</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex ftco-animate">
                    <div class="img img-video align-items-center">
                        <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/Mesa de trabajo 3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="video justify-content-center">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-black ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <ul class="list-unstyled">
                        <li><div class="container-icon"><i class="icon-av_timer mr-2"></div></i><strong>Duración:</strong> 6 horas</li>
                        <li><div class="container-icon"><i class="icon-clock-o mr-2"></div></i><strong>Horario:</strong> 10:00am a 3:00pm</li>
                        <li><div class="container-icon"><i class="icon-map-marker mr-2"></div></i><strong>Lugar:</strong> Escuela de jardinería</li>
                    </ul>
                    <p><strong>Objetivo:</strong> Que el participante conozca los diferentes usos y beneficios que
                        aportan las suculentas.</P>
                    <ul>
                        <li>Antecedentes y Origen</li>
                        <li>Clasificación Botánica</li>
                        <li>Las plantas suculentas más usadas</i>
                        <li>Importancia Ambiental</li>
                        <li>Usos de las plantas suculentas</li>
                        <li>Elaboración de arreglo suculentas</li>
                    </ul>
                </div>
                <p><a href="" class="btn btn-primary">Unirme</a></p>
            </div>
        </div>
    </section>

    <?php 
        $ini -> footer();
        $ini -> scripts();
    ?>
    <script src="js/adaptive-tabs.js"></script>
</body>

</html>