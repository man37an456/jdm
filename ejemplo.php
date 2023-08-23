<?php
/**
 * Documento:   index.php
 * Descripcion: Pagina inicial del documento
 * Auto:        amartinez@jardinesdemexico.org
 * Historial:
 *      - 11/Sep/2018 Creacion del archivo y codificacion
 */
require_once 'conf/ini.php';
$conf = new ConfigIni();
?>
<!DOCTYPE html>
<html lang="en">
  <?php
$conf->head('index');
?>
  <body>
  <?php
$conf->displayHeader('index');
?>
    <section style="heigh:90px; background: #DB0087">
    </section>
    <section class="ftco-animate">
      <div data-scrollax-parent="true">
        <?php $conf->displayBanners();?>
      </div>
    </section>

    <!-- <section class="ftco-animate">
      <div data-scrollax-parent="true">
        <a href="/boletos?utm_source=website&utm_medium=banner&utm_campaign=verano_web_it&utm_id=promo_verano23" >
          <img style="width:100%" src="images/sliders/promo_verano_online.png" alt="promo verano jdm 2023"/>
        </a>
      </div>
    </section> -->

    <style>
      .breadcrumbs,.slider-text {
        display:none !important;
      }
      #home-top-video:before {
        content:"";
        position: absolute;
        top:0;
        right:0;
        left:0;
        bottom:0;
        z-index:0;
        background: linear-gradient(rgb(166, 0, 94) -100%, rgba(209, 0, 122, 0.74) 0%, rgba(255, 135, 205, 0) 100%)
      }
      .overlay{display: none;}
      .mobileshow{display:none !important}
      .desktopshow{display:block !important}
      .ftco-navbar-light, .hero-wrap {background:#343a40 !important}
      .video_text_new{top:35% !important}
      .hero-wrap>img{display: none !important;}
      @media (max-width: 1023px) {
        
        .video_text_new{top:15% !important}
        .mobileshow{display:block !important}
        .desktopshow{display:none !important}

        .hero-wrap{ 
          display: none;
        }
      }
    </style>
    
    <div class="" style="position: relative; overflow: hidden;">
      <div id="home-top-video">
        <video style="width:100vw" poster="video/portada.jpg" loop="" playsinline="" autoplay="" muted="">
            <source src="video/video_v3.mp4" type="video/mp4">
        </video>
        <div class="row no-gutters slider-text align-items-center justify-content-center video_text_new" style="display:block !important;">
          <div class="col-lg-9 col-sm-8 col-xs-10 ftco-animate text-center fadeInUp ftco-animated" >
            <p class="mt-4 text-white mobileshow" style="transform: translateZ(0px) translateY(50%);" >Vive una experiencia inolvidable en los jardines florales <strong>más grandes </strong>del mundo</p>
            <h1 class="mt-4 text-white desktopshow" style="transform: translateX(20%) translateY(50%);" >Vive una experiencia inolvidable en los jardines florales <strong>más grandes </strong>del mundo</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light">
    <section id="page-init" class="ftco-section-featured ftco-animate pt-5 pb-4">
      <div class="container-fluid" data-scrollax-parent="true">
        <div class="row d-flex justify-content-center mt-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="h1">Nuestra esencia se concentra en la <strong class="px-3">contemplaci&oacute;n de la belleza</strong> de cada uno de los jardines tem&aacute;ticos y en disfrutar de la arquitectura que convive en armon&iacute;a con elementos naturales.</h2>
            <p><a href="historia" class="btn btn-primary mt-3 py-3 px-5">¡Conoce m&aacute;s de nosotros!</a></p>
          </div>
        </div>
      </div>
    </section>
    </div>


    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-7 col-md-9 col-sm-12 text-center heading-section heading-section-white ftco-animate">
              <h2>Suscr&iacute;bete a nuestro Newsletter</h2>
              <p>No te pierdas de nada y recibe en tu coreo electr&oacute;nico nuestras noticias, promociones y pr&oacute;ximos eventos antes que nadie</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-lg-8 col-md-10 col-sm-12">
                  <form id="form-newsletter" action="javascript:suscribe(this)" class="subscribe-form">
                    <div class="form-group mb-3">
                      <span class="icon icon-user"></span>
                      <input id="name" type="text" class="form-control" placeholder="Nombre completo" required>
                    </div>
                    <div class="form-group">
                      <span class="icon icon-envelope"></span>
                      <input id="mail" type="email" class="form-control" placeholder="Correo electr&oacute;nico" required>
                    </div>
                    <div class="form-group">
                      <input id="submit-newsletter" type="submit" value="Registrarse" class="btn btn-block btn-primary py-3 px-5 mt-4">
                    </div>
                    <div class="form-group mt-5">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="newsCheck" required>
                        <label class="form-check-label ml-2 text-white" for="newsCheck">
                          Acepto los t&eacute;rminos y condiciones
                        </label>
                      </div>
                    </div>
                    <a class="text-light" href="javascript:void(0)" data-toggle="modal" data-target="#modalPoliticas">Pol&iacute;litica de privacidad</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section pb-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
              <div id="slider-info-1" class="owl-carousel owl-spaces ftco-animate">
                  <div class="item">
                    <img src="images/jardines/home/slider-info/5hectareas.jpg" alt="Area total de Jardines de M&eacute;xico" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/orquideas_tropical.jpg" alt="Orquideas Tropical" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/22arboles.jpg" alt="Árboles" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/pagoda_japones.jpg" alt="Pagoda en Japon&eacute;es" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/3lugares.jpg" alt="Centro de negocios" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/centro_negocios.jpg" alt="Centro de negocios" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/2foros.jpg" alt="Foros al aire libre" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/escuela_imagen.jpg" alt="Escuela de jardiner&iacute;a" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/restaurante.jpg" alt="Restaurante Jardines de M&eacute;xico" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/ninia_primaveras.jpg" alt="Cuatro primaveras" class="img-fluid">
                  </div>
              </div> <!-- .owl-carousel -->
          </div>
          <div class="col-lg-6">
            <a href="/boletos" style="cursor:pointer">
              <img src="images/jardines/home/boleto_modif.png" class="img-fluid center-image ftco-animate" alt="Compra tus boletos"/>
            </a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">
          <video class="ftco-animate" width="100%" autoplay loop playsinline muted>
          
            <source src="images/jardines/home/video_tips_jardines.mp4" type="video/mp4">
          </video>
          </div>
          <div class="col-lg-6">
              <div id="slider-info-2" class="owl-carousel owl-spaces ftco-animate">
                  <div class="item">
                    <img src="images/jardines/home/slider-info/aerea_insignia.jpg" alt="Cuatro primaveras" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/1experiencia.jpg" alt="Experiencia" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/restaurante.jpg" alt="Restaurante Jardines de M&eacute;xico" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/escuela_jardineria.jpg" alt="Escuela de Jardiner&iacute;a" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/concierto.jpg" alt="Concierto" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/2salones.jpg" alt="Salones" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/bamboo_noche.jpg" alt="Bamboo nocturna" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/7jardines_tematicos.jpg" alt="Jardines tem&aacute;ticos" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/tropical.jpg" alt="Tropical" class="img-fluid">
                  </div>
                  <div class="item">
                    <img src="images/jardines/home/slider-info/65mil_flores.jpg" alt="Flores" class="img-fluid">
                  </div>
              </div> <!-- .owl-carousel -->
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section pt-4">
      <div class="container">
        <div class="row justify-content-center mt-5 mb-1">
						<div class="col-lg-12 col-md-10 text-center heading-section ftco-animate">
								<h2 class="mb-2">C&oacute;mo llegar</h2>
                <p class="f-s-18">Jardines de M&eacute;xico se encuentra ubicado en el poblado de Tequesquitengo, Morelos, a un costado del lago de Tequesquitengo.</p>
                <button id="map-android" onclick="javascript:showMap('18.6063628,-99.291238')" class="btn btn-primary mt-3 py-3 px-5">Abrir en Google Maps</button>
						</div>
				</div>
        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="ftco-animate">
              <img src="images/jardines/home/map-landing.png" alt="Mapa jardines de M&eacute;xico" id="map-lg">
              <img src="images/jardines/home/map-landing-smart.png" alt="Mapa jardines de M&eacute;xico" id="map-sm">
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8 col-md-10 col-sm-12 text-center heading-section ftco-animate">
            <span class="subheading"><span class="icon-tripadvisor m-r-5"></span>Trip Advisor</span>
            <h2 class="mb-2">CLASIFICADO <span class="text-primary">TOP 2</span> EN TRIP ADVISOR</h2>
            <h3 class="mb-4">Cosas que hacer en Morelos</h3>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(https://media-cdn.tripadvisor.com/media/photo-l/11/a9/0f/4a/mario-u.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name text-primary mb-1">Mario U</p>
                    <p class="mb-3">Hermoso lugar. Muy bien diseñado y cuidado. Vale la pena ir con niños de pueden correr y conocer al mismo tiempo.</p>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(https://media-cdn.tripadvisor.com/media/photo-l/14/28/ea/58/octavioaguilar.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name text-primary mb-1">Actavio Aguilar</p>
                    <p class="mb-3">Los Jardines de México es un parque muy bien montado. Muy limpio, excelente mantenimiento y ordenado. Los jardines, plantas, árboles y flores son bellísimos.</p>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(https://media-cdn.tripadvisor.com/media/photo-s/01/2e/70/7a/avatar061.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name text-primary mb-1">Esteliux S</p>
                    <p class="mb-3">Un lugar increíble, super bien cuidado, limpio, cuenta con diferentes jardines temáticos, áreas de descanso e hidratación. El calor es intenso, así que debes llevar protector, sombrero y ropa adecuada, así como calzado cómodo para caminar alrededor de 8-10km.</p>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(https://media-cdn.tripadvisor.com/media/photo-l/08/69/d3/30/hugo-c.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name text-primary mb-1">Hugo C</p>
                    <p class="mb-3">Excelente lugar, donde el arte se funde con la naturaleza, muy buenas instalaciones, y restaurantes con atención y alimentos de primera</p>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(https://media-cdn.tripadvisor.com/media/photo-s/01/2e/70/6f/avatar052.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name text-primary mb-1">Isaac R</p>
                    <p class="mb-3">Extraordinario o oasis a la mitad de nuestro país, honestamente una joya para compartir y dar difusión al mundo entero de que en México podemos hacer las cosas de manera impecable y admirable.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

  <?php
$conf->footer();
$conf->scripts();
?>
  <script src="js/lib/modernizr/modernizr-custom.js"></script>
  <script src="js/fl-landing.js"></script>  
  </body>
  <?php $conf->fb_messenger(); ?>
</html>