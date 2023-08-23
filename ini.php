<?php 
    /*
    *   Documento: ini.php
    *   Descripción: Clase de configuración para plantilla y sesiones
    *   Autor: amartinez@jardinesdemexico.org
    *   Historial: 
    *       - 12/Abr/2018: Creación del archivo y codificación
    *
    */
    require_once 'data.php';
    require_once 'utils.php';
    require_once 'model/cart.php';
    require_once 'model/user.php';

    if(ENVIROMENT == 'PROD'){
        ini_set('display_errors', 0	);
    }else{
        ini_set('display_errors', 1	);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
    
    class ConfigIni {
        private $baseUrl = "";
        function __construct() {
            // ** Se coloca la zona horaria de la ciudad de Mexico **
            date_default_timezone_set('America/Mexico_City');      
            setlocale(LC_ALL,"es_MX");
            session_start();

            //print_r("Tiempo -> " . (time() - $_SESSION['LAST_ACTIVITY']));
            
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > 60*60) {
                session_unset();
                session_destroy();
                session_start();
            }

            if(isset($_SESSION['token_expires']) && $_SESSION['token_expires'] > time()){
                unset($_SESSION['token']);
                unset($_SESSION['token_expires']);
            }

            if (empty($_SESSION['csrf_token'])) {
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            }   
            // ** Se registra la variable que almacenará el carrito de compras y sesion del usuario
            //session_destroy();
            
            // if(ENVIROMENT == 'PROD'){
                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = new Cart();
                }
            // }
            
            /*foreach($_SESSION['cart']->getAllElements() as $elem){
                print_r("<br>" . decrypt($elem));
            }*/
            
            //print_r($_SESSION['cart']->getAllElements());

            $_SESSION['LAST_ACTIVITY'] = time();
        }
        /**
         * Despliega código HTML que contiene el Header del template
         * 
         * @param string $title titulo de la página a mostrar en navegador
         */
        public function head($title, $basic = false){
            $orginalPage = $title;
            //var_dump($title);
            if($title == 'index'){
                $title = 'Jardines de M&eacute;xico | Naturalmente Inolvidable';
            }else{
                $title = $title;
            }
            $head = '<head>
                        <title>'.$title.'</title>
                        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
                        <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <meta name="facebook-domain-verification" content="828zzp4ooet7kgsagjbf6t21ko07ij" />
                        ';
            
            /*if($title != 'boletos'){
                $head .= '<meta name=”robots” content=”index, follow”>';
            }*/

            // Incluye descripcion personalizada para cada pagina
            switch($orginalPage){
                case 'index': //Para el index
                    $head .= '<meta name="description" content="Un parque temático donde recreamos los colores, aromas y texturas de la flora mexicana y del mundo. Creando un lugar naturalmente inolvidable los jardines florales más grandes del mundo">';
                    break;
                case 'Historia':
                    $head .= '<meta name="description" content="Un lugar 100% Mexicano Donde la belleza de nuestros jardines y la magnífica arquitectura conviven en armonía, creando un lugar naturalmente inolvidable">';
                    break;
                case 'Reglamento':
                    $head .= '<meta name="description" content="C&oacute;digo de Convivencia. Para tener una experiencia inolvidable te invitamos a seguir las indicaciones de nuestros anfitriones">';
                    break;
                case 'Preguntas frecuentes':
                    $head .= '<meta name="description" content="Aquí encontraras precios, promociones, orientacion de como llegar a nuestro parque al igual que la manera de contactarnos">';
                    break;
                case 'Jard&iacute;n estilo Italiano':
                    $head .= '<meta name="description" content="Este Jardín está diseñado para transportarte a una villa italiana de la época del renacimiento. Un lugar representado por la grandeza y excelsitud europea que simboliza la fuerza y prosperidad">';
                    break;
                case 'Jard&iacute;n estilo Japones':
                    $head .= '<meta name="description" content="Es un lugar mágico, donde la naturaleza habla a tus sentidos a través del viento y agua, elementos predominantes en este jardín">';
                    break;
                case 'Jard&iacute;n Tropical':
                    $head .= '<meta name="description" content="Un lugar en donde vivirás la experiencia de visitar la selva tropical de nuestro país">';
                    break;
                case 'Jard&iacute;n de Cactaceas':
                    $head .= '<meta name="description" content="Más de 200 cactáceas que representan nuestras raíces y costumbres. Nos dedicamos a la preservación, conservación y reproducción de las especies creando un espacio auténticamente mágico">';
                    break;
                case 'Jard&iacute;n 4 Primaveras':
                    $head .= '<meta name="description" content="Variedad de miles de flores que cambian cada temporada crean los diseños de este jardín; logrando que en este lugar sólo exista la magia de la primavera">';
                    break;
                case 'Laberinto de los Sentidos':
                    $head .= '<meta name="description" content="El único laberinto diseñado no para perderse sino para encontrARTE">';
                    break;
                case 'ConSentidos':
                    $head .= '<meta name="description" content="ConSentidos es un espacio especialmente diseñado para niños (y no tan niños), donde se propicia la aventura, el aprendizaje y la diversión">';
                    break;
                case 'Foros eventos masivos':
                    $head .= '<meta name="description" content="Aquí es donde se vive la mágia de los eventos, el lugar donde vivirás la experiencia de la combinación perfecta entre música y naturaleza">';
                    break;
                case 'Sal&oacute;n Bamboo':
                    $head .= '<meta name="description" content="Instalaciones con diseño arquitectónico único, exclusivo y confortable, con su propio jardín de recepción y espacio ecuménico para la ceremonia">';
                    break;
                case 'Expo Chriser':
                    $head .= '<meta name="description" content="Un espacio al aire libre que gracias a su amplitud podemos diseñar todo tipo de eventos de ensueño. Rodeado por el espectacular Jardín Cuatro Primaveras">';
                    break;
                case 'Centro de Negocios':
                    $head .= '<meta name="description" content="Facilidades de primera para que tú sólo te preocupes de crear ideas que aseguren el éxito de tus proyectos">';
                    break;
                case 'Galer&iacute;a de arte':
                    $head .= '<meta name="description" content="Un acogedor espacio en el cual puedes apreciar diferentes representaciones de pintura, escultura, arte-objeto, artesanías, fotografía de más de un sinnúmero de artistas en exposiciones temporales o permanente">';
                    break;
                case 'Eventos sociales':
                    $head .= '<meta name="description" content="Espacios para festejar tus grandes momentos con un perfecto equilibrio entre estilo y naturaleza">';
                    break;
                case 'Eventos empresariales':
                    $head .= '<meta name="description" content="Espacios para oranizar grandes oportunidades con un perfecto equilibrio entre estilo y naturaleza">';
                    break;
                case 'Experiencias':
                    $head .= '<meta name="description" content="Pr&oacute;ximamente conocer&aacute;s todas las experiencias especiales que tenemos para ti">';
                    break;
                case 'Restaurante':
                    $head .= '<meta name="description" content="El restaurante m&aacute;s grande del estado de Morelos donde reunimos lo mejor del pasado de la comida mexicana y lo combinamos con el presente, creando acentos de sabores y aromas que harán de tu visita algo muy especial">';
                    break;
                case 'Taquilla':
                    $head .= '<meta name="description" content="Aquí encontraras precios, promociones, orientacion de como llegar a nuestro parque al igual que la manera de contactarnos">';
                    break;
                case 'Boletos':
                    $head .= '<meta name="description" content="Aquí encontraras precios, promociones, orientacion de como llegar a nuestro parque al igual que la manera de contactarnos">';
                    break;
                case 'Revisa tu pedido':
                    $head .= '<meta name="description" content="Da una última revisión del pedido que estás adquiriendo">';
                    break;
                case 'Tours':
                    $head .= '<meta name="description" content="¡Vive una experiencia en grupo naturalmente inolvidable!">';
                    break;
                case 'Dog Friendly':
                        $head .= '<meta name="description" content="Pasa un día inolvidable junto a tu mejor amigo. 🐶">';
                        break;
                case 'Recorridos Navideños 🎄':
                        $head .= '<meta name="description" content="¡Ven a vivir la navidad con una experiencia inolvidable llena de magia! 🎄">';
                        break;
                default:
                    $head .= '<meta name="description" content="Un parque temático donde recreamos los colores, aromas y texturas de la flora mexicana y del mundo. Creando un lugar naturalmente inolvidable los jardines florales más grandes del mundo">';
                    break;
            }
            $head .= '<meta name="author" content="Jardines de M&eacute;xico">
                      <meta name="keywords" content="jardines, jardines de méxico, turismo morelos, morelos, entretenimiento, diversión, vacaciones, niños, adultos, promociones" />
                        <meta name="csrf-token" content="'.$_SESSION['csrf_token'].'">
                        <link rel="stylesheet" href="css/style.css">
                        <link rel="stylesheet" href="css/fontawesome/all.css" rel="preload" as="style">';
            if(!$basic){
              $head .= '<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
                        <link rel="stylesheet" href="css/animate.css" rel="preload" as="style">
                        <link rel="stylesheet" href="css/owl.carousel.min.css" rel="preload" as="style">
                        <link rel="stylesheet" href="css/owl.theme.default.min.css" rel="preload" as="style">
                        <link rel="stylesheet" href="css/aos.css" rel="preload" as="style">
                        <link rel="stylesheet" href="css/ionicons.min.css" rel="preload" as="style">
                        <link rel="stylesheet" href="css/flaticon.css" rel="preload" as="style">
                        <link rel="stylesheet" href="css/icomoon.css" rel="preload" as="style">
                        <link rel="stylesheet" href="css/ekko-lightbox.css" rel="preload" as="style">
                        <link rel="stylesheet" href="css/lib/izitoast/iziToast.min.css" rel="preload" as="style">
                        <link rel="stylesheet" href="css/lib/sweetalert/sweetalert2.min.css" rel="preload" as="style">';
            
            if(ENVIROMENT == 'PROD'){
                $head .= "<!-- Google Tag Manager -->
                        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                        })(window,document,'script','dataLayer','GTM-P2W5TDM');</script>
                        <!-- End Google Tag Manager -->";
            }

            }
            $head .= '</head>';
            print_r($head);
        }

        /**
         * Despliega código HTML necesario para incluir scripts del template
         * 
         */
        public function scripts($tabs = false){
            $value = '<!-- loader -->
                        <div id="ftco-loader" class="show fullscreen">
                            <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#d2158b"/></svg>
                            <h3 class="text-center">Agregando al carrito</h3>
                        </div>
                        <script type="text/javascript" src="js/jquery.min.js"></script>
                        <script type="text/javascript" src="js/jquery-migrate-3.0.1.min.js"></script>
                        <script type="text/javascript" src="js/popper.min.js"></script>
                        <script type="text/javascript" src="js/bootstrap.min.js"></script>
                        <script  type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                        <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
                        <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
                        <script type="text/javascript" src="js/aos.js"></script>
                        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
                        <script type="text/javascript" src="js/scrollax.min.js"></script>
                        <script type="text/javascript" src="js/main.js"></script>
                        <script async type="text/javascript" src="js/lib/izitoast/iziToast.min.js"></script>
                        <script async type="text/javascript" src="js/lib/sweetalert/sweetalert2.all.min.js"></script>
                        <script async type="text/javascript" src="js/ekko-lightbox.js"></script>
                        <script async type="text/javascript" src="js/utils.js"></script>
                        <script>';
                            if($tabs){
                                $value .= 'var tabs = $(\'.tabs\');
                                        var items = $(\'.tabs\').find(\'a\').length;
                                        var selector = $(".tabs").find(".selector");
                                        var activeItem = tabs.find(\'.active\');
                                        var activeWidth = activeItem.innerWidth();
                                        $(".selector").css({
                                        "left": activeItem.position.left + "px", 
                                        "width": activeWidth + "px"
                                        });
                                        
                                        $(\'.detail-carousel\').owlCarousel({
                                            loop:false,
                                            margin:10,
                                            nav:true,
                                            responsive:{
                                                0:{
                                                    items:1
                                                },
                                                600:{
                                                    items:1
                                                },
                                                1000:{
                                                    items:1
                                                }
                                            }
                                        });

                                        $(".tabs").on("click","a",function(){
                                            $(\'.tabs a\').removeClass("active");
                                            $(this).addClass(\'active\');
                                            var activeWidth = $(this).innerWidth();
                                            var itemPos = $(this).position();
                                            $(".selector").css({
                                                "left":itemPos.left + "px", 
                                                "width": activeWidth + "px"
                                            });
                                        });
                                        function toggleTabs(id){
                                            if(id == 2){
                                                $(\'#info\').fadeToggle(200);
                                                setTimeout(() => {
                                                    $(\'#plants\').fadeToggle();
                                                }, 200);
                                            }else{
                                                $(\'#plants\').fadeToggle(200);
                                                setTimeout(() => {
                                                    $(\'#info\').fadeToggle();
                                                }, 200);
                                            }
                                        }';
                            }
                            $value .= '$(document).on(\'click\', \'[data-toggle="lightbox"]\', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });
                            (function($) {
                                var $timeline_block = $(".cd-timeline-block");

                                //hide timeline blocks which are outside the viewport
                                $timeline_block.each(function(){
                                    if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
                                        $(this).find(".cd-timeline-img, .cd-timeline-content").addClass("is-hidden");
                                    }
                                });

                                //on scolling, show/animate timeline blocks when enter the viewport
                                $(window).on("scroll", function(){
                                    $timeline_block.each(function(){
                                        if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find(".cd-timeline-img").hasClass("is-hidden") ) {
                                            $(this).find(".cd-timeline-img, .cd-timeline-content").removeClass("is-hidden").addClass("bounce-in");
                                        }
                                    });
                                });
                            })(jQuery);
                        </script>';
                        if(ENVIROMENT == 'PROD' && 1 > 2){
                            // $value .= '<!-- Global site tag (gtag.js) - Google Analytics -->
                            //         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126119946-2"></script>
                            //         <script>
                            //         window.dataLayer = window.dataLayer || [];
                            //         function gtag(){dataLayer.push(arguments);}
                            //         gtag("js", new Date());
                                    
                            //         gtag("config", "UA-126119946-2");
                            //         </script>';
                                    
                            $value .= '<!-- Google tag (gtag.js) -->
                            <script async src="https://www.googletagmanager.com/gtag/js?id=G-GYGV2N5F9J"></script>
                            <script>
                              window.dataLayer = window.dataLayer || [];
                              function gtag(){dataLayer.push(arguments);}
                              gtag("js", new Date());
                            
                              gtag("config", "G-GYGV2N5F9J");
                            </script>';
                        }
            print_r($value);
        }

        /**
         * Despliega código HTML necesario para incluir la barra superior del template 
         * Contiene opciones de cierre de sesión, logo, y datos del usuario básicos
         * 
         */
        public function displayHeader($page = '', $title = ''){
            $imageHeader = '../images/jardines/headers/';
            $classSlider = 'slider-text';

            $header = '<!-- Google Tag Manager (noscript) -->
                    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2W5TDM"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                    <!-- End Google Tag Manager (noscript) -->';

            $header .= '<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                        <div class="container">
                        <a href="/">
                            <img class="navbar-brand-bco" src="../images/logo.png">
                            <img class="navbar-brand-color" src="../images/logo-color.png">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="oi oi-menu"></span> Menu
                        </button>
                    
                        <div class="collapse navbar-collapse" id="ftco-nav">
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nosotros</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="historia">Historia</a>
                                    <a class="dropdown-item" href="reglamento">Reglamento</a>
                                    <a class="dropdown-item" href="faqs">FAQS</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jardines Y Espacios</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown02">
                                    <a class="dropdown-item" href="jardin-italiano">Jard&iacute;n estilo Italiano</a>
                                    <a class="dropdown-item" href="jardin-japones">Jard&iacute;n estilo Japon&eacute;s</a>
                                    <a class="dropdown-item" href="jardin-tropical">Jard&iacute;n Tropical</a>
                                    <a class="dropdown-item" href="jardin-cactaceas">Jard&iacute;n de Cact&aacute;ceas</a>
                                    <a class="dropdown-item" href="cuatro-primaveras">Jard&iacute;n 4 primaveras</a>
                                    <a class="dropdown-item" href="laberinto">Laberinto de los sentidos</a>
                                    <a class="dropdown-item" href="consentidos">ConSentidos</a>
                                    <a class="dropdown-item" href="foro-jdm">Foros eventos masivos</a>
                                    <a class="dropdown-item" href="bamboo">Sal&oacute;n Bamboo</a>
                                    <a class="dropdown-item" href="chriser">Expo Chriser</a>
                                    <a class="dropdown-item" href="centro-negocios">Centro de negocios</a>
                                    <a class="dropdown-item" href="galeria-arte">Galer&iacute;a de arte</a>
                                    <a class="dropdown-item" href="tienda">Souvenirs</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos y Experiencias</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown03">
                                    <a class="dropdown-item" href="evento-social">Eventos Sociales</a>
                                    <a class="dropdown-item" href="evento-empresarial">Eventos Empresariales</a>
                                    <a class="dropdown-item" href="experiencias">Experiencias</a>
                                    <a class="dropdown-item" href="tours">Tours</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="restaurante-jdm" class="nav-link">Restaurante</a></li>
                            <li class="nav-item"><a href="https://www.escueladejardineria.com.mx" target="_blank" class="nav-link">EDJ</a></li>';
                            $header .='<li class="nav-item"><a href="https://www.bodasjdm.com/" target="_blank" class="nav-link color-primary"><span>Bodas</span></a></li>';
                            if(ENVIROMENT == 'PROD'){ 
                                $header .='<li class="nav-item cta"><a href="boletos" class="nav-link">Taquilla</a></li>';
                            }else{
                                $header .='<li class="nav-item cta"><a href="boletos" class="nav-link">Taquilla</a></li>';
                            }
                            if(ENVIROMENT == 'PROD'){
                                $header .='<li class="nav-item cart">
                                    <a href="cart" class="nav-link">
                                    <i class="fas fa-shopping-cart"></i>';
                                    if(isset($_SESSION['cart']) && count($_SESSION['cart']->getAllElements()) > 0)
                                        $header .= '<span id="taq-btn" class="badge-ex">0'. intval($_SESSION['cart']->getQuantity()) .'</span>';
                                $header .= '</a></li>';

                                $header .='<li class="nav-item dropdown profile">
                                            <a href="javascript:void(0)" id="dropdown04" class="user-menu nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-user"></i>
                                                <span id="taq-btn" class="badge-ex' . (isset($_SESSION['user']) ? ' bg-active' : ' bg-inactive') . '">*</span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown04">';
                                            if(isset($_SESSION['user'])){
                                                $header .= '<span class="user-text-info">¡Hola ' . decrypt($_SESSION['user']->getName()) .'!</span>';
                                            }else{
                                                $header .= '<a href="javascript:void(0)" class="btn-identify" data-toggle="modal" data-target="#exampleModal">Identifícate</a>';
                                            }
                                            if(isset($_SESSION['user'])){
                                                $header .= '<hr>';
                                                $header .= '<a class="dropdown-item" href="profile">Mis pedidos</a>
                                                            <a class="dropdown-item" href="javascript:logout(\'/\')">Cerrar sesión</a>';
                                            }else{
                                                //$header .= '<a class="dropdown-item" href="experiencias">Crear cuenta</a>';
                                            }
                                            $header .= '</div>
                                        </li>';
                            }
                            $header .= '</ul>
                        </div>
                        </div>
                    </nav>
                    <!-- END nav -->'; 
                      
                    if($page == 'index' || $page == 'como-llegar' || $page == 'bamboo' || $page == 'restaurante-jdm' || $page == 'chriser' || $page == 'centro-negocios' || $page == 'galeria-arte' || $page == 'forojdm' || $page == 'experiencias' || $page == 'boletos'){
                        
                        if($page === 'boletos'){
                            $header .= '<div class="hero-wrap js-fullheight boletos-header" style="height: 50vh">';
                        } else  if($page === 'index'){
                            $header .= '<div class="hero-wrap " style="height: 90px">';
                        } else {
                            $header .= '<div class="hero-wrap js-fullheight">';
                        }
                        if($page === 'inicio'){
                            $header .= '<video poster="video/portada.jpg" loop playsinline autoplay muted>
                                        <source src="../video/video_v3.mp4" type="video/mp4">
                                    </video>';
                            /*$header .= '<video poster="video/portada.jpg" loop playsinline muted>
                                        <source src="video/video_v3.mp4" type="video/mp4">
                                    </video>';*/
                        }else{
                            $header .= '<img loading="lazy" src="' . $imageHeader . $page . '.jpg'. '">';
                        }
                    } else{
                        $classSlider .= '-section';
                        $header .= '<div class="hero-wrap-section">';
                        switch ($page) {
                            case 'cartelera':
                                $imageHeader .= 'cartelera.png';
                                break;
                            case 'mapa-parque':
                                $imageHeader .= 'mapa-jdm.png';
                                break;
                            case 'servicios':
                                $imageHeader .= 'servicios.jpg';
                                break;
                            case 'como-llegar':
                                $imageHeader .= 'como-llegar.jpg';
                                break;
                            case 'taquilla':
                                $imageHeader .= 'taquilla.jpg';
                                break;
                            case 'boletos':
                                $imageHeader .= 'boletos.jpg';
                                break;
                            case 'faq':
                                $imageHeader .= 'faq.jpg';
                                break;
                            case 'AvisoPrivacidad':
                                $imageHeader .= 'faq.jpg';
                                break;
                            case 'TerminosCondiciones':
                                $imageHeader .= 'faq.jpg';
                                break;
                            case 'laberinto':
                                $imageHeader .= 'laberinto.jpg';
                                break;
                            case 'forojdm':
                                $imageHeader .= 'forojdm.jpg';
                                break;
                            case 'historia':
                                $imageHeader .= 'historia-2.jpg';
                                break;
                            case 'abanico-flores':
                                $imageHeader .= 'abanico-flores.jpg';
                                break;
                            case 'consentidos':
                                $imageHeader .= 'consentidos.jpg';
                                break;
                            case 'evento-social':
                                $imageHeader .= 'evento-social.jpg';
                                break;
                            case 'evento-empresarial':
                                $imageHeader .= 'evento-empresarial.jpg';
                                break;
                            case 'tienda':
                                $imageHeader .= 'tienda.jpg';
                                break;
                            case 'spectare':
                                $imageHeader .= 'spectare.jpg';
                                break;
                            case 'reglamento':
                                $imageHeader .= 'reglamento-head.jpg';
                                break;
                            case 'cuatro-primaveras':
                                $imageHeader .= 'cuatro-prim.jpg';
                                break;
                            case 'jardin-tropical':
                                $imageHeader .= 'jardin-tropical.jpg';
                                break;
                            case 'jardin-cactaceas':
                                $imageHeader .= 'jardin-cactaceas.jpg';
                                break;
                            case 'jardin-italiano':
                                $imageHeader .= 'jardin-italiano.jpg';
                                break;
                            case 'jardin-japones':
                                $imageHeader .= 'jardin-japones.jpg';
                                break;
                            case 'fiestas-infantiles':
                                $imageHeader .= 'fiestas-infantiles.jpg';
                                break;
                            case 'experiencias':
                                $imageHeader .= 'experiencias.jpg';
                                break;
                            case 'carrito':
                                $imageHeader .= 'carrito_h.jpg';
                                break;
                            case 'checkout':
                                $imageHeader .= 'carrito_h.jpg';
                                break;
                            case 'perfil':
                                $imageHeader .= 'profile-2.jpg';
                                break;
                            case 'nochebuena':
                                $imageHeader .= 'nochebuena.jpg';
                                break;
                            case 'noche-magica-maria-jose':
                                $imageHeader .= 'noche-magica-maria-jose.jpg';
                            break; 
                            case 'tours':
                                $imageHeader .= 'foto_inicial.jpg';
                            break; 
                            case 'dog-friendly':
                                $imageHeader .= 'dog-friendly-taquilla.png';
                            break; 
                            case 'recorridos-navidenos':
                                $imageHeader .= 'portada_recorridos_navidenos_2022.png';
                            break; 
                            default:
                                $imageHeader .= '';
                                break;
                        }
                        $header .= '<img loading="lazy" src="' . $imageHeader . '">';
                    }
                    $header .= '<div class="overlay ' . ($page != 'index' ? 'op-max' : '') .'"></div>
                    <div class="container">
                        <!-- modal politicas de privacidad -->
                        <div class="modal fade" id="modalPoliticas" tabindex="-1" role="dialog" aria-labelledby="modalPoliticas" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Aviso de privacidad</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-4">
                                En JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV) se tiene implementado un Sistema Integral para proteger sus datos personales en cumplimiento con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares en lo sucesivo LFPDPPP. El presente aviso de privacidad está conformado con fundamento en los artículos 15 y 16 de la ley. JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV) es responsable del tratamiento y protección de sus datos personales; tiene como domicilio, Autopista México - Acapulco Km. 129, Col. Centro, C.P. 62910 Jojutla, Morelos, México.<br>
                                Su información personal será utilizada de acuerdo al perfil que usted tenga con nosotros con las siguientes finalidades:<br><br>
                                Empleados<br>
                                (i) el análisis de datos, la investigación, los estudios socioeconómicos y reportes estadísticos de empleados o de candidatos a empleados de JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ) y sus empresas afiliadas y subsidiarias; (ii) informar sobre beneficios, sorteos, descuentos, promociones para empleados y otros servicios financieros relacionados con los empleados; (iii) atender requerimientos legales de autoridades competentes; (iv) notificar sobre cambio en condiciones y en general toda la publicidad derivada de los servicios que ofrece JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ) y/o sus empresas afiliadas y subsidiarias a sus empleados; (v) Análisis de candidatos laborales y empleados de JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ) y de sus empresas afiliadas y subsidiarias; (vi) para el cumplimiento de las obligaciones laborales con los empleados de JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ) y sus empresas afiliadas y subsidiarias; y (vii) solicitar y proporcionar referencias laborales a terceros de los candidatos a empleados o de los ex-empleados de JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ) y alguna de sus empresas afiliadas y subsidiarias. Los datos sensibles que se pudieran recabar, podrán ser utilizados para la investigación, análisis de datos, reportes estadísticos, promociones, beneficios, sorteos, productos y servicios financieros para candidatos a empleados o empleados y otros servicios relacionados con JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ) y sus empresas afiliadas y subsidiarias.<br><br>
                                Clientes:<br>
                                (i) cotizar servicios y productos, (ii) proveer los servicios y productos que usted solicite; (iii) notificarle sobre nuevos servicios o productos que tengan relación con los ya contratados o adquiridos; (iv) comunicarle sobre cambios en los mismos; (v) elaborar estudios y programas que son necesarios para determinar hábitos de consumo; (vi) realizar evaluaciones periódicas de nuestros productos y servicios a efecto de mejorar la calidad de los mismos; (vii) mantener actualizados nuestros registros, evaluar la calidad del servicio que brindamos, así como (viii) mantener la comunicación en general y dar seguimiento a nuestra relación comercial y (ix) en general para dar cumplimiento a las obligaciones que hemos contado con usted.<br><br>
                                Proveedores:<br>
                                (i)Para garantizar que las transacciones económicas realizadas con nuestros proveedores, sean transparentes y de forma licita cumpliendo con la Ley Federal para la Prevención e Identificación de Operaciones con Recursos de Procedencia Ilícita (Ley Contra Lavado de Dinero), (ii)integrar su expediente como proveedor del corporativo,(iii) para la celebración de un contrato, (iv) para crear un registro y base de datos de proveedores, (v) con la finalidad de contactarlos cuando se requiera la prestación de sus servicios o la adquisición de bienes. Las formas en que podemos recabar sus datos personales son cuando usted nos los proporciona directamente, visita nuestros sitios de Internet o utiliza nuestros servicios en línea o a través de subsidiarias, filiales, afiliadas y/o controladoras de JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX S.A. DE C.V.) y cuando obtenemos información a través de otras fuentes que están permitidas por la ley. Su información personal será recabada de acuerdo al perfil que usted tenga con nosotros:<br><br>
                                Empleados:<br>
                                Solicitud de Trabajo y/o Contrato Colectivo de Trabajo, (aplica en los casos de candidatos y empleados adscritos). Los datos que obtenemos por estos medios son: nombre, edad, fecha de nacimiento, estado civil, nacionalidad, domicilio particular, sexo, lugar de nacimiento, teléfono, cuenta de correo electrónico número de seguro social, número de cartilla del servicio militar (hombres), clase y tipo de licencia, escolaridad, , Registro Federal del Contribuyente (RFC), Clave Única de Registro de Población (CURP) .Datos sensibles: Certificado de salud (incluyendo estatura y peso), antecedentes penales, antecedentes laborales (incluyendo sueldos anteriores), fotografía, personas con quien vive, estado civil de la persona con quien vive, nombre de padre, nombre de madre, nombre de esposo(a) nombre y edades de hijos, firma autógrafa y huella digital.<br><br>
                                Clientes:<br>
                                Recabamos sus datos personales de forma directa cuando usted mismo nos los proporciona por diversos medios, como cuando requiere que le hagamos una propuesta o cotización, participa en nuestras promociones o nos da información con el objeto de que le prestemos nuestros servicios. Los datos que obtenemos por este medio pueden ser, entre otros: nombre completo, teléfono fijo y/o celular, correo electrónico, firma autógrafa, dirección física y/o dirección fiscal, Registro Federal del Contribuyente (RFC) y/o Clave Única de Registro de Población (CURP).Datos sensibles: Copia de acta constitutiva con su última modificación, Copia de poder notarial del Representante legal.<br><br>
                                Proveedores:<br>
                                Copia de Alta ante hacienda, impresión actualizada de Registro Federal del Contribuyente (RFC, no mayor a tres meses), copia de identificación oficial del representante legal, copia de comprobante de domicilio (no mayor a tres meses), copia de la carátula del estado de cuenta mostrando únicamente la clabe interbancaria y una Carta de Presentación.<br><br>
                                Datos sensibles:<br>
                                Copia de acta constitutiva con su última modificación, Copia de poder notarial del Representante legal. En el caso de Proveedores de especies nativas de México de flora silvestre en categoría de riesgo, se solicitará el registro de Unidades de Manejo para la Conservación de la Vida Silvestre (UMA) ante SEMARNAT y para los casos de proveedores que manejen agroquímicos; el certificado ante PROFEPA. De acuerdo a la Ley General del Equilibrio Ecológico y la Protección al Ambiente (LGEEPA) y la Normatividad vigente en los Estados Unidos Mexicanos.<br><br>
                                Videovigilancia:<br>
                                Cuando usted en calidad de Cliente, Proveedor, Empleado o Visitante, acude a nuestras instalaciones, puede ser video grabado por las cámaras de seguridad de JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV) con domicilio en Autopista México - Acapulco Km. 129, Col. Centro, C.P. 62910 Jojutla, Morelos, México. Las imágenes y sonidos captados por las cámaras serán utilizados para seguridad tanto de la empresa como de las personas que nos visitan. La video vigilancia se realiza en los siguientes lugares de la empresa: entrada principal, taquillas, escalinatas, andadores, oficinas administrativas, jardines, patios, servidores de sistemas y circulación en pasillos.<br><br>
                                Al proporcionarnos sus datos personales, usted nos autoriza su tratamiento tanto dentro como fuera de los Estados Unidos Mexicanos y entiende que podrán ser tratados directa o indirectamente por JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ) sus sociedades subsidiarias, afiliadas o relacionadas, con autoridades competentes, así como sus terceros proveedores de servicios con quienes tenga una relación jurídica, incluyendo sin limitación con abogados y consultores.<br>
                                Usted o su representante legal debidamente acreditado, podrán limitar el uso o divulgación de sus datos personales; así como ejercer, cuando procedan, los derechos de Acceso, Rectificación, Cancelación u Oposición (Derechos ARCO) que la Ley prevé.<br>
                                En base a lo anterior usted tiene derecho de acceder a sus datos personales que poseemos y a los detalles del tratamiento de los mismos, así como a rectificarlos en caso de ser inexactos o incompletos; cancelarlos cuando considere que no se requieren para alguna de las finalidades señaladas en el presente aviso de privacidad, están siendo utilizados para finalidades no consentidas o haya finalizado la relación contractual o de servicio, o bien, oponerse al tratamiento de los mismos para fines específicos.<br>
                                Para conocer dicho proceso, los requisitos y plazos y hacer valer, en su caso, los derechos antes mencionados, usted puede acudir al domicilio de JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV) llamar al área de Protección de Datos Personales de JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV) al teléfono (777) 333 0140 al 45 ext. 3112 o vía correo electrónico a arco_floriner@jardinesdemexico.org el cual solicitamos confirme vía telefónica para garantizar su correcta recepción. La atención de solicitudes se realizará de lunes a viernes en un horario de 9:00 a 17:00 hrs. Es importante que envíe junto con su correo de solicitud de derechos ARCO, una copia de su credencial IFE, Pasaporte y/o Cartilla liberada escaneada, para acreditar su identidad antes de realizar cualquier cambio a los datos personales o proporcionar información.<br>
                                En un plazo máximo de 10 días hábiles atenderemos su solicitud, para lo cual entregaremos los datos que usted nos solicita vía correo electrónico.
                                Usted podrá revocar el consentimiento que nos ha otorgado para el tratamiento de sus datos personales en todo momento, a fin de que dejemos de hacer uso de los mismos. Para ello, es necesario que presente su petición de acuerdo a derechos JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV) enviando correo a la dirección: arco_floriner@jardinesdemexico.org<br><br>
                                En algunos casos JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV) podrá transferir sus datos a terceros bajo el cumplimiento de la ley, sólo para fines de dar referencias comerciales sobre clientes y proyectos realizados por JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV) o para completar la entrega de algún proyecto suyo donde participe un tercero.<br>
                                Así como sus terceros proveedores de servicios con quienes tenga una relación jurídica, incluyendo sin limitación: (i) con agentes e instituciones de seguros; (ii) Instituto Mexicano del Seguro Social y el Instituto del Fondo Nacional de la Vivienda para los Trabajadores; (iii) terceros proveedores de servicios para el cumplimiento de las obligaciones legales adquiridas por JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ); (iv) terceros proveedores de servicios para efectos de investigación, análisis de datos, reportes estadísticos, almacenamiento y manejo de datos, promociones, beneficios y servicios relacionados con los empleados o los candidatos a empleados de JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ); (v) terceros que soliciten referencias laborales de los ex-empleados de JARDINES DE MEXICO ( FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV ) o de alguna de sus empresas afiliadas y subsidiarias; (vi) terceros derivado de un reestructura corporativa, incluyendo, la fusión, consolidación, venta, liquidación o transferencia de activos; y (vii) otras transmisiones previstas en la ley citada y su reglamento.
                                Nos comprometemos a no transferir sus datos personales a terceros sin su consentimiento, salvo las excepciones previstas en el artículo 37 de la LFPDPPP, así como a realizar esa transferencia en los términos que marca la ley.<br>
                                Si usted no manifiesta su oposición para que sus datos personales sean transferidos, mediante los mecanismos antes mencionados (Derechos ARCO) se entenderá que ha otorgado su consentimiento para ello.
                                Nos reservamos el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad, para la atención de modificaciones a regulaciones legislativas, políticas internas o nuevos requerimientos para la prestación u ofrecimiento de nuestros servicios o productos. Dichas modificaciones serán oportunamente informadas a través de nuestras oficinas, o en nuestra página de Internet www.jardinesdemexico.com o cualquier otro medio de comunicación oral, impreso o electrónico que JARDINES DE MEXICO (FLORINER SA DE CV / FLORYJARDIN PARAISO MEXICANO AC / INTERLAMEX SA DE CV) determine para tal efecto.
                                Para cualquier duda o pregunta se puede comunicar con nuestro Departamento de Administración y Protección de Datos Personales al correo: arco_floriner@jardinesdemexico.org. Si usted considera que su derecho de protección de datos personales ha sido lesionado por alguna conducta indebida o existe alguna violación a las disposiciones previstas en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, podrá interponer la queja o denuncia correspondiente ante el IFAI, para mayor información visite www.ifai.org.mx.
                        
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal terminos y condiciones -->
                        <div class="modal fade" id="modalTyC" tabindex="-1" role="dialog" aria-labelledby="modalPoliticas" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">T&eacute;rminos y Condiciones</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-4">
                                <h5>ASPECTOS GENERALES</h5>
                                Gracias por visitar la página web de FLORINER, S.A. DE C.V., con signo distintivo de “JARDINES DE MÉXICO”; Parque temático donde recreamos los colores, aromas y textura de la flora mexicana y del mundo, ubicado en Autopista México Acapulco, Kilometro 129, Jojutla, Morelos.
                                El acceso y uso de cualquiera de nuestros sitios web constituye un reconocimiento y aceptación a los Términos y Condiciones que a continuación se establecen.<br>
                                <br>1.	Al acceder y navegar en los Sitios web de FLORINER, S.A. DE C.V., usted como Usuario acepta estos Términos y Condiciones, sin limitación o condición alguna, incluyendo los términos y condiciones adicionales o modificados que FLORINER, S.A. DE C.V. publique de tiempo en tiempo; en su caso, usted podrá presentar las reclamaciones procedentes conforme a lo aquí previsto. 
                                <br>2.	Ciertos servicios y otras ofertas disponibles en los sitios web de FLORINER, S.A. DE C.V., pueden tener términos y condiciones adicionales aplicables, los cuales pueden leerse en las páginas que contengan dichos servicios u ofertas o por medio de un vínculo en dichas páginas u otras direcciones referenciadas hacia dichos términos y condiciones adicionales.
                                <br>3.	Son materia de los presentes Términos y Condiciones todo lo relacionado a la VENTA DE LOS BOLETOS DEL PARQUE JARDINES DE MÉXICO, que sean ofertados por FLORINER S.A. DE C.V. en los sitios web y se encuentren disponibles para su venta y cuyas características y detalles aparezcan en la tienda online, en lo sucesivo los “servicios”.
                                <br>4.	La relación comercial entre FLORINER, S.A. DE C.V. y usted como Usuario se perfeccionará una vez que el precio de los servicios haya sido cubierto y procesado por los sistemas de pago y reconocido por FLORINER, S.A. DE C.V. en un plazo no mayor a 3 (tres) días hábiles contados a partir de la fecha en que el Usuario proporcione los datos de su tarjeta de crédito o débito una vez reconocido el pago, FLORINER, S.A. DE C.V. enviará un correo electrónico al Usuario a la dirección que éste haya indicado al efectuar la selección de los servicios, informando que su transacción ha sido completada.
                                <br>5.	Los servicios que brinda FLORINER S.A DE C.V., son exclusivamente para uso personal del Usuario y de ninguna forma podrán ser para uso comercial o de cualquier otro tipo. No pueden ser utilizados para vender o promocionar o comercializar un producto o servicio propio o de terceros, o para incrementar el tráfico a cualquier otro sitio o página de Internet para fines comerciales o cualquier distinto a personal y privado.
                                <br>6.	FLORINER S.A. DE C.V., se encuentra debidamente autorizado para hacer uso de la información que el Usuario registre en el sitio, siempre y cuando el uso de dicha información se limite a facilitar el envío al Usuario de información sobre promociones o servicios, que FLORINER, S.A. DE C.V., comercialice, de tiempo en tiempo. FLORINER, S.A. DE C.V., utilizará la información en concordancia con los Términos y Condiciones, así como con la Política de Privacidad publicada en el sitio.
                                <br>7.	FLORINER S.A. DE C.V. se reserva el derecho de diferir, suspender o denegar la prestación de los servicios, en tanto el Usuario no cumpla con las condiciones y requisitos exigidos en el Sitio.
                                <br>8.	Asimismo, FLORINER S.A. DE C.V. se reserva el derecho de suspender, modificar o terminar en cualquier momento, total o parcialmente sus actividades y servicios, sin responsabilidad alguna y sin mayor formalidad que las disposiciones vigentes que así pudieran establecer.
                                <br>9.	FLORINER S.A. DE C.V. se reserva el derecho de hacer cambios a la página de Internet, así como a realizar exclusiones o modificaciones a los Términos y Condiciones, en cualquier tiempo; por lo que es responsabilidad del Usuario revisar periódicamente estos Términos, a fin de estar enterado de los vigentes en cada momento, mismo que serán publicados en dicho sitio. 
                                <br>10.	El uso de los servicios posterior a las modificaciones a los Términos aquí establecidos implica el consentimiento del Usuario a dichos cambios.
                                <br>11.	De la misma manera, FLORINER S.A. DE C.V. podrá suspender los servicios en cualquier momento, por disposición legal, en caso de que el Usuario haga mal uso de los sitios o en caso de detectar cualquier irregularidad con el Usuario. Todo lo anterior, no obstante, a las acciones, vías y/o derechos que FLORINER S.A. DE C.V. y/o las personas físicas o morales tengan que hacer valer en contra del responsable del mal uso o irregularidad referida.
                                <br>12.	El Usuario acepta que ni los Términos, ni el uso que realice del servicio crean entre FLORINER, S.A. DE C.V. y dicho Usuario una asociación, sociedad, relación laboral, agencia, comisión o cualquier similar. Asimismo, el Usuario acepta que el presente documento no constituye una licencia, cesión o transmisión de ningún tipo de derecho.
                                <br>13.	Si cualquier estipulación de lo aquí expuesto se declara nula o no ejecutable de acuerdo con la legislación aplicable, incluida, pero sin limitarse a la renuncia a garantías, limitaciones de responsabilidad y pago de daños y perjuicios establecidos previamente; dicha estipulación se considerará reemplazada por aquella otra estipulación válida y ejecutable que más se asemeje a la intención de la estipulación original, continuando vigentes las restantes estipulaciones de este
                                <br><br>
                                <h5>ÁMBITO DE APLICACIÓN</h5>
                                <br>1.	Estos Términos y Condiciones aplican a todos los Usuarios que de cualquier forma hagan uso de (i) la página de internet www.jardinesdemexico.com; (ii) cualesquiera de las páginas y/o ligas de FLORINER, S.A. DE C.V. y/o Jardines de México; (iii) reservación y/o compra de servicios a través de la página de internet citada y/o a través de la línea telefónica de FLORINER, S.A. DE C.V. y/o Jardines de México, vigente para tales efectos; (iv) correo electrónico (v) en general, a cualesquier servicios o promociones que se ofrezcan y/o provean en dichas páginas, salvo disposición expresa en específico en contrario en cada uno de dichos servicios.
                                <br>2.	Tanto FLORINER, S.A. DE C.V. como el Usuario, al momento de hacer uso de cualquiera de los servicios que se bridan, acuerdan voluntariamente y se obligan a sujetarse a estos Términos, así como a cualquier otra disposición, requerimiento, lineamiento o similar, que sea de tiempo en tiempo establecida en los sitios, directamente o a través de los vínculos que muestren dicha información.
                                <br>3.	Los Usuarios acceden libre y voluntariamente al sitio, con el objeto de solicitar y adquirir de FLORINER, S.A. DE C.V., la obtención de los servicios, sujetándose de igual forma libremente a los Términos vigentes, así como a cualquier disposición que sea emitida por FLORINER S.A. DE C.V., directa o indirectamente, relacionada con los mismos.
                                <br>4.	Los servicios están sujetos a la aceptación íntegra de los Términos aquí contenidos, por parte de cualquier persona.
                                <br><br>
                                <h5>POLÍTICA DE PRIVACIDAD</h5>
                                <br>1.	FLORINER S.A. DE C.V. reconoce la importancia de la privacidad de sus Usuarios, por lo que los servicios están diseñados considerando la protección de la información que es proveída a FLORINER S.A. DE C.V.
                                <br>2.	La Política de Privacidad de FLORINER S.A. DE C.V. describe los tipos de Información Personal que recolectamos de nuestros Usuarios cuando utilizan nuestros servicios, así como el destino y salvaguarda de la misma.
                                <br>3.	Nuestra Política de Privacidad está basada en lo siguiente:
                                <br>a)	RECOLECCIÓN DE INFORMACIÓN. Aquellos Servicios que no requieren autentificar al Usuario, recolectan información general y no Información Personal, relativa al navegador que se utiliza, el tipo de conexión a Internet, el sistema operativo y otros elementos de configuración destinados a mejorar nuestros servicios. Esta información puede ser guardada en una Cookie en la computadora del Usuario, para futura referencia al navegar en el sitio.
                                Algunos de nuestros servicios requieren explícitamente que el Usuario abra una cuenta y proporcione Información Personal, en virtud de la funcionalidad del Sitio o por disposición legal aplicable. En este caso, el Sitio solicita algunos datos para la cuenta como nombre, dirección, edad, sexo, entre otros, incluyendo Información Personal. Esta Información Personal puede solicitarse al Usuario al entrar a un Sitio o cuando solicita un servicio.
                                Para algunos servicios, requerimos información de tarjeta de crédito u otras formas de pago, entre otros, la cual es contenida en forma cifrada en servidores y equipo seguros, en cumplimiento de las disposiciones legales aplicables.
                                Al momento de registrarse en nuestro Sitio, el Usuario tiene la opción de solicitar no recibir correos electrónicos por parte de FLORINER S.A. DE C.V. ni de terceros.
                                <br>b)	COOKIES. Son utilizadas para mejorar la calidad del Servicio y para entender mejor la forma en que nuestros Usuarios interactúan con FLORINER S.A. DE C.V. Esto se hace almacenando preferencias y otros datos del Usuario en las Cookies. La mayoría de los navegadores están configurados para aceptar Cookies. El Usuario puede deshabilitar esta aceptación automática en la configuración de su navegador, con la advertencia de que algunos de los servicios ofrecidos pueden no funcionar adecuadamente sin dichas Cookies.
                                El Usuario reconoce y acepta que FLORINER S.A. DE C.V. puede colocar Cookies en su computadora, así como permitir que terceros que se anuncian en los Sitios, de igual forma lo hagan.
                                <br>c)	INFORMACIÓN COMPARTIDA. FLORINER S.A. DE C.V. no vende ni renta la Información Personal a otras personas físicas o morales. En todo caso, FLORINER S.A. DE C.V. podrá compartir la información personal identificable de los Usuarios, en cualquiera de los siguientes casos: 
                                Proveemos dicha Información Personal o no, con personas morales o físicas de confianza, para el sólo hecho de procesar la información por encargo de FLORINER S.A. DE C.V. Cuando esto sucede, se está bajo acuerdos que obligan a tales personas morales o individuos a procesar dicha información solamente bajo instrucciones de FLORINER S.A. DE C.V. y en concordancia con esta Política de Privacidad, Términos y medidas apropiadas de confidencialidad y seguridad.
                                Si FLORINER S.A. DE C.V. es requerido por Ley o, estamos en el entendido en buena fe, que el acceso, preservación o divulgación de dicha información, incluso Información Personal, es razonablemente necesario para proteger los derechos de FLORINER S.A. DE C.V., sus Usuarios o el público en general.
                                Podemos compartir la información para proveer una experiencia más amigable y mejorar la calidad de nuestros Servicios.
                                Cuando se trate de compartir información estadística de los Sitios y nuestros Usuarios. Esta información no identifica al Usuario, pero sí a las tendencias y comportamientos del mismo.
                                <br>d)	SEGURIDAD DE LA INFORMACIÓN. FLORINER S.A. DE C.V. toma las medidas conducentes para proteger la Información Personal y sus bases de datos, contra acceso o alteración no autorizados, divulgación o destrucción de información.
                                <br>e)	FLORINER S.A. DE C.V. permite el acceso a la Información Personal, solamente a aquellos empleados que requieren conocerla con objeto de operar, desarrollar o mejorar nuestros Servicios.
                                <br>f)	ACTUALIZACIÓN DE LA INFORMACIÓN. FLORINER S.A. DE C.V. provee a los Usuarios mecanismos de actualización o corrección de la Información Personal previamente proveída, la cual es utilizada en nuestros Servicios.
                                <br>4.	La Política de Privacidad puede cambiar en cualquier momento por cualquier causa. Normalmente los cambios serán menores, sin embargo, en algunas ocasiones habrá cambios significativos. Conforme realicemos dichos cambios, significativos o no, los publicaremos en el Sitio de que se trate; si los cambios son significativos, podremos dar a nuestros Usuarios algún otro tipo de aviso o notificación, sin que ocurra en todos los casos.
                                <br><br>
                                <h5>PROPIEDAD INTELECTUAL</h5>
                                <br>1.	Los Sitios web de FLORINER, S.A. DE C.V. son propiedad de y operados por FLORINER, S.A. DE C.V. y/o sus afiliadas, y están protegidos por las leyes de derecho de autor bajo las leyes de los Estados Unidos Mexicanos, así como tratados internacionales celebrados por dicho país. 
                                <br>2.	Todos los derechos son reservados. 
                                <br>3.	Los derechos de autor sobre el contenido y el software proporcionado son propiedad de o están licenciados a favor de FLORINER, S.A. DE C.V.
                                <br>4.	Están reservados todos los derechos no otorgados expresamente aquí establecidos. El material de los Sitios web de FLORINER, S.A. DE C.V. no puede reproducirse, distribuirse o transmitirse de forma alguna sin autorización previa y por escrito de FLORINER, S.A. DE C.V. Ningún vínculo a cualquiera de los Sitios web de FLORINER, S.A. DE C.V. puede crearse sin autorización expresa y por escrito de FLORINER, S.A. DE C.V.
                                <br>5.	Los Usuarios de cualquiera de los Sitios web de FLORINER, S.A. DE C.V. pueden descargar una copia de cualquier o todo material en dicho sitio web para su uso personal y sin fines comerciales, siempre que no se modifique o altere dicho material de forma alguna, o elimine o modifique cualquier aviso o leyenda en materia de derechos de autor o propiedad industrial. 
                                <br>6.	No se otorga ni está implícito derecho o licencia alguna sobre dicho material. Todo el material de dicho sitio web se proporciona únicamente para fines lícitos. 
                                <br>7.	Las imágenes de individuos o lugares en dicho sitio web son propiedad de FLORINER, S.A. DE C.V. o se utilizan mediante autorización a favor de FLORINER, S.A. DE C.V. El uso indebido de dichas imágenes queda prohibido, salvo por el uso expresamente autorizado. FLORINER, S.A. DE C.V. se reserva todo título y derechos intelectuales de los materiales descargados de dicho sitio.
                                <br>8.	Dichas patentes y marcas no sólo reconocen la innovación y originalidad de los derechos de propiedad intelectual de FLORINER, S.A. DE C.V. en sus productos y marcas, sino también ofrecen protección legal a FLORINER, S.A. DE C.V. en contra de las infracciones a dichos derechos de propiedad intelectual. Nuestra política es ejercer diligentemente todos los derechos de propiedad. 
                                <br>9.	En este acto se notifica al lector sobre los derechos de FLORINER, S.A. DE C.V. en México, relacionadas en este sitio y asociadas con sus productos y servicios.
                                <br>10.	Todas las demás marcas de productos y de servicios utilizadas aquí son propiedad de sus respectivos titulares.
                                <br>11.	Cualquier información, incluyendo sin limitación los comentarios, sugerencias, ideas, gráficas u otra información comunicada a FLORINER, S.A. DE C.V. por medio de este sitio no es confidencial de acuerdo con nuestra Política de Privacidad.
                                <br>12.	FLORINER, S.A. DE C.V. se reserva el derecho de reproducir, distribuir o utilizar dicha información comunicada para cualquier fin y sin compensación a la persona que envíe dicha información.
                                <br>13.	El Usuario reconoce la originalidad de cualquier información comunicada a FLORINER, S.A. DE C.V. y asume la responsabilidad de su precisión, adecuación y legalidad.
                                <br><br>
                                <h5>ELEMENTOS DE LOS SITIOS</h5>
                                <br>FLORINER S.A. DE C.V. establece que, en aquellos materiales en los que no sea su titular, ni haya participado directamente en el desarrollo de toda la información contenida en los Sitios, algunos de los textos, gráficos, vínculos y/o el contenido de algunos artículos incluidos en la misma, podrían no ser veraces o no estar actualizados, por lo que FLORINER S.A. DE C.V. no tiene responsabilidad alguna.
                                <br><br>
                                <h5>SITIOS ENLAZADOS Y LIMITACIÓN DE RESPONSABILIDAD</h5>
                                <br>1.	El uso de los Sitios es bajo riesgo y responsabilidad de cada Usuario, la responsabilidad de FLORINER S.A. DE C.V. se limita en todo momento a los presentes Términos vigentes en cada momento, así como al cumplimiento de las disposiciones aplicables en aquello no establecido en los Términos.
                                <br>2.	Los Sitios Enlazados pueden permitirle al Usuario abandonar los Sitios propiedad de FLORINER S.A. DE C.V.; Dichos sitios no son controlados por FLORINER S.A. DE C.V., no siendo esta responsable del contenido de estos ni de cualquier aspecto que con ellos se vincule directa o indirectamente.
                                <br>3.	Los Sitios Enlazados en los Sitios, se limita a facilitar a los Usuarios la búsqueda de y/o acceso en internet, a la información disponible de dichos Sitios Enlazados; no presupone, ni se establece explícitamente, la existencia de alguna clase de vínculo, comisión, agencia, distribución, comercialización, responsabilidad, obligación o asociación entre FLORINER S.A. DE C.V. y los operadores, sociedades, individuos y/o cualesquier tercero, de los Sitios Enlazados y/o los terceros propietarios de dichos Sitios Enlazados.
                                <br>4.	FLORINER S.A. DE C.V. no controla, aprueba ni hace propios los servicios, información, datos, archivos, productos y/o cualquier clase de material existente en los Sitios Enlazados, incluyendo ofertas, información, datos, concursos y/o promociones. El Usuario, por lo tanto, debe extremar la prudencia en la valoración y utilización de cualquier clase de material existente en los Sitios Enlazados.
                                <br>5.	FLORINER S.A. DE C.V. no garantiza ni asume responsabilidad alguna por los daños y/o perjuicios de toda clase que puedan causarse por: (i) El funcionamiento, disponibilidad, accesibilidad o continuidad de los Sitios Enlazados; (ii) El mantenimiento de los servicios, información, datos, archivos, productos y/o cualquier clase de material existente en los Sitios Enlazados; (iii) Las obligaciones, ofertas, concursos y/o promociones existentes en los Sitios Enlazados; (iv) Utilidad, veracidad, parcialidad, objetividad, entre otros, de la información contenida en los Sitios Enlazados; (v) Virus no generados o trasladados por cualquiera de los Sitios.
                                <br>6.	Mediante la utilización de los servicios, el Usuario reconoce y acepta que FLORINER S.A. DE C.V. no garantiza de forma alguna, los Sitios Enlazados o la información proporcionada por terceros; de igual forma, no garantiza que los Sitios Enlazados funcionen correctamente, sean útiles para la realización de actividad alguna en particular o para cualquier otro fin, estén libres de información dañina, entre otros.
                                <br>7.	Mediante el uso de los servicios, el Usuario reconoce y acepta que FLORINER S.A. DE C.V. queda excluida de cualquier responsabilidad por los daños y perjuicios que pudieran haber sido causados por la veracidad de la información o calidad de servicios contenidos u ofrecidos por terceros o que se encuentre en los Sitios Enlazados, o los que surjan con relación a este Sitio.
                                <br>8.	Tanto el acceso a los Sitios o a los Sitios Enlazados, como el uso que pueda hacerse de la información contenida en los mismos, son exclusiva responsabilidad del Usuario y no de FLORINER S.A. DE C.V.
                                <br>9.	FLORINER S.A. DE C.V. no es responsable de la información recibida de cualquier Sitio Enlazado.
                                <br>10.	FLORINER S.A. DE C.V. facilita al Usuario estos vínculos, en tal virtud, la inclusión de cualquier Sitio Enlazado no implica la aprobación de FLORINER S.A. DE C.V. respecto de la información que ahí se contenga, asimismo, no implica relación alguna entre FLORINER S.A. DE C.V. y el operador o propietario del mismo.
                                <br><br>
                                <h5>RESTRICCIONES DE CONTENIDO</h5>
                                <br>El Usuario acepta abstenerse de publicar, distribuir o transmitir cualquier contenido que: (i) sea ilícito, acosador, difamatorio, abusivo, amenazante, obsceno, doloso, calumnioso o invasivo de la privacidad de otro individuo; (ii) viole o vulnere los derechos de autor, marcas, secretos industriales, patentes u otros derechos de propiedad intelectual de cualquier parte, incluyendo sin limitación el uso de materiales de terceros protegidos por la ley de derechos de autor sin la autorización correspondiente, utilizar marcas de terceros sin la autorización o atribución correspondiente, y utilizar o distribuir información de terceros protegida o no como secreto industrial en violación a cualquier obligación de confidencialidad; (iii) el Usuario no tenga derecho a distribuir o transmitir de acuerdo con la ley o con relaciones contractuales o fiduciarias; (iv) contenga datos personales de menores de edad, o bien, (v) que contenga datos personales sensibles de otro individuo.
                                <br><br>
                                <h5>COMPORTAMIENTO ILEGAL</h5>
                                <br>El Usuario acepta abstenerse de: (i) utilizar los Sitios web de FLORINER, S.A. DE C.V. para cualquier fin ilícito, en violación a las leyes y regulaciones aplicables, incluyendo sin limitación las leyes mexicanas aplicables y cualquier regulación que tenga fuerza de ley; (ii) publicar páginas web que contengan vínculos que inicien descargas de material en franca infracción de propiedad intelectual o que sea ilícito; (iii) acosar u hostigar de manera electrónica a otra persona; (iv) participar en cualquier actividad de Internet que viole los derechos de privacidad de otras personas, incluyendo sin limitación, recabar y distribuir información sobre Usuarios de Internet sin su autorización, con excepción de lo que permita la ley, o (v) realizar rifas, sorteos o concursos por Internet que violen las leyes aplicables.
                                <br><br>
                                <h5>COMPORTAMIENTO PERJUDICIAL</h5>
                                <br>Como condición adicional para el uso y acceso a los Sitios web de FLORINER, S.A. DE C.V., el Usuario acepta no: (i) publicar, distribuir o transmitir cualquier gusano, virus, archivo u otro código, archivo o programa perjudicial por medio de los Sitios web de FLORINER, S.A. DE C.V.; (ii) utilizar Internet Relay Chat (IRC) bits, tales como programas que utilicen recursos excesivos conectándose a una red IRC con actividad 24 horas al día; (iii) afectar la capacidad de otros de utilizar el IRC; (iv) alterar el flujo normal de diálogos de los Sitios web de FLORINER, S.A. DE C.V. o de cualquier otra forma afectar de forma negativa la capacidad de otros Usuarios de participar en intercambios en tiempo real; (v) ejecutar cualquier programa que ofrezca un servicio o recurso a otras personas, incluyendo sin limitación, re-direccionamiento de puertos, servidores proxy, servidores de chat o Multi-User Dungeons; (vi) interferir, afectar o perjudicar en cualquier modo los Sitios web de FLORINER, S.A. DE C.V. o los servidores o redes conectados a dichos sitios; (vii) ejecutar programas o configurar especialmente equipos de tal manera que mantengan una conexión de marcado activa aunque no se use o de cualquier otra forma eludir la desconexión automática por inactividad, a menos que se provea una cuenta de acceso dedicado; (viii) utilizar los Sitios web de FLORINER, S.A. DE C.V. en violación de las disposiciones de cualquier otro proveedor de sitios web, sitios web, salas de chat o elementos similares; (ix) utilizar los Sitios web de FLORINER, S.A. DE C.V. para acceder a las cuentas de otras personas sin su autorización; (x) intentar vulnerar las medidas de seguridad de FLORINER, S.A. DE C.V. o de otra entidad, u obtener o eludir las contraseñas de otras personas, o (xi) participar en ataques de denegación de servicio, esto es, en acciones diseñadas para afectar el acceso a la red bombardeando a un sitio o a Internet con tráfico inútil.
                                <br><br>
                                <h5>APLICABILIDAD DEL CONTENIDO</h5>
                                <br>1.	La información en este sitio incluye la descripción de los servicios que pueden estar disponibles únicamente en los Estados Unidos Mexicanos.
                                <br>2.	 Este sitio es operado en México y FLORINER, S.A. DE C.V. no realiza declaración alguna respecto a que el contenido que se provee es aplicable o apropiado para el uso en otros lugares.
                                <br><br>
                                <h5>RESTRICCIONES DE EDAD</h5>
                                <br>1.	Los Sitios web de FLORINER, S.A. DE C.V. están diseñados para ser usados por individuos que tengan al menos 18 años de edad cumplidos o mayores. 
                                <br>2.	Los Sitios web de FLORINER, S.A. DE C.V. no están diseñados para ser usados por niños menores de 18 años de edad. 
                                <br>3.	Los Usuarios menores a 18 años de edad deben obtener la ayuda de su padre o tutor para utilizar el Sitio web. 
                                <br><br>
                                <h5>RESERVACIÓN Y COMPRAVENTA ELECTRÓNICA</h5>
                                <br>1.	Una vez que el Usuario hace uso de los Sitios, en caso de que decida realizar la compraventa electrónica de los servicios que así estén disponibles en los Sitios, FLORINER, S.A. DE C.V., acepta vender y el Usuario acepta comprar, la cantidad de Boletos seleccionados por el Usuario en el Sitio, acorde con el cumplimiento de requisitos que se establezcan en cada caso. A partir de ese momento, los presentes Términos y Condiciones se establecen en un contrato válido y vigente entre FLORINER, S.A. DE C.V. y el Usuario.
                                <br>2.	Para realizar la compra de Boletos, el Usuario deberá dirigirse a la sección de Taquilla, en la que deberá realizar el siguiente proceso:
                                <br>a)	Si el Usuario está ya se encuentra registrado en el Sitio, deberá digitar su nombre de usuario y contraseña para iniciar sesión.
                                <br>b)	Si el Usuario aún no se encuentra registrado en el Sitio, deberá registrarse previamente a realizar la compra de boletos, creando para ello, un usuario e ingresando los datos correspondientes, dentro de los cuales se solicitará el correo electrónico. Dichos datos serán protegidos conforme a la Política de Privacidad aquí citada.
                                <br>c)	Una vez estando en la plataforma como usuario registrado, el Usuario seleccionará la cantidad de boletos a adquirir. El sitio muestra en pantalla el total a pagar.
                                <br>d)	Se selecciona el método de pago de tarjeta bancaria.
                                <br>e)	El sistema solicitará los datos de la tarjeta bancaria para realizar la compra. FLORINER, S.A. DE C.V. NO almacena los datos bancarios proporcionados.
                                <br>f)	 Se realiza la transacción bancaria, de aceptarse el cargo, el sistema envía correo electrónico al Usuario de confirmación y con el detalle de la compra efectuada.
                                <br>g)	En caso de que la transacción sea rechazada, se muestra en pantalla, la notificación de que el cargo fue rechazado.
                                <br>h)	Una vez que el Usuario arriba al Parque Jardines de México, se deberá dirigir al área de Torniquetes o taquillas, donde proporcionará su Boleto electrónico y personal de FLORINER, S.A. DE C.V., realizará la validación correspondiente, por medio del escaneo del código de dicho boleto.
                                <br>i)	Si el boleto es válido, se le permitirá el acceso al Usuario y el sistema marcará como ya utilizado dicho Boleto, para evitar que en lo subsecuente, alguien más presente el mismo Boleto.
                                <br>3.	FLORINER, S.A. DE C.V. no se encuentra obligada a entregar Boleto o producto alguno, en tanto no exista certeza de que la contraprestación por el pago de los Servicios haya tenido verificativo. FLORINER, S.A. DE C.V., entre otros aspectos, se cerciorará de que el Usuario presente la tarjeta de pago e identificación oficial, para recoger los Boletos cubiertos o reservados.
                                <br>4.	FLORINER, S.A. DE C.V. hará su mejor esfuerzo para proporcionar los Servicios a través del Sitio, así como dar buen uso a la información que el Usuario proporcione al momento de registrarse en el Sitio. FLORINER, S.A. DE C.V. no se hace responsable por fallas en el sistema o Internet, que limiten o impidan la prestación de los Servicios.
                                <br>5.	El Usuario libera de responsabilidad y se compromete a sacar en paz y a salvo a FLORINER, S.A. DE C.V. por cualquier demanda, reclamo, daño o perjuicio sufrido, derivado del uso de la tarjeta bancaría que el Usuario utilice para solicitar los Servicios.
                                <br>6.	Una vez realizada la compra de los Boletos por el Usuario, no habrá reembolso, salvo que por causas razonables e imputables a FLORINER, S.A. DE C.V., lo amerite.
                                <br><br>
                                <h5>POLÍTICAS REGLAMENTARÍAS DEL PARQUE JARDINES DE MÉXICO</h5>
                                <br>1.	Al adquirir los servicios publicados en el Sitio, el Usuario acepta las Políticas Reglamentarias que rigen en el Parque Jardines de México, sin limitación o condición alguna, incluyendo aquellas adiciones o modificaciones que en su caso FLORINER, S.A. DE C.V. publique de tiempo en tiempo, mismas que se encuentra detalladas y que deben ser consultadas por el Usuario en www.jardinesdemexico.com. Dichas Políticas Reglamentarias también se encuentran publicadas dentro del interior del Parque.
                                <br>2.	Es responsabilidad del Usuario revisar periódicamente estas políticas reglamentarias, fin de estar enterado de las vigentes en cada momento, mismas que serán publicadas en dicho sitio. 
                                <br>3.	El uso de los servicios implica el consentimiento del Usuario respecto a dicha Políticas Reglamentarias.
                                <br>4.	El Usuario se obliga a cumplir cabalmente con las políticas y disposiciones reglamentarias que rigen el Parque Jardines de México, así como también se obliga a que sus dependientes observen y cumplan con las mismas, ya que de no hacerlo así, el Usuario reconoce y acepta que será el responsable de los daños, incidentes, decesos, siniestros, accidentes o cualquier otro concepto que pudiere derivar por la falta de cumplimiento a las políticas y normativas mencionadas. 
                                <br>5.	Los servicios con los que cuenta el Parque y que no hayan sido adquiridos por el Usuario, no formarán parte de éstos y el Usuario no tendrá derecho a su uso, por lo que en caso de que éste último hagan uso de ellos, deberá cubrir a favor de FLORINER, S.A. DE C.V., los pagos correspondientes.
                                <br>6.	En caso de que el Parque o mobiliario que lo integra sufran algún deterioro, daño o pérdida y sean ocasionados por el Usuario o sus dependientes, el Usuario se compromete a pagarle a FLORINER, S.A. DE C.V. los daños y/ perdidas que éstos sufran, mismos que deberán estar debidamente comprobados para que el Usuario esté obligado a pagarlos. 
                                <br>7.	El Usuario reconoce y acepta que el Parque Jardines de México está integrado por diversos espacios destinados para llevar a cabo diversos eventos sociales, tales como conciertos, festivales, exposiciones, presentaciones, entre otros; mismos que podrán coincidir en el tiempo en el que el Usuario acuda al Parque, por lo que éste último manifiesta que al estar debidamente informado de lo anterior, acepta las condiciones del servicio. 
                                <br>8.	El servicio de resguardo de objetos personales del Usuario y sus dependientes no forma parte de los servicios que el Usuario se compromete a brindar, por lo que FLORINER, S.A. DE C.V., no será responsable de los daños o pérdidas que puedan sufrir dichos objetos.
                                <br>9.	Queda expresamente pactado que el Usuario y sus dependientes no podrán introducir, conservar o utilizar dentro del Parque substancias tóxicas, inflamables o explosivas. De igual forma queda expresamente prohibido introducir al establecimiento cualquier tipo de arma que atente seguridad e integridad física de las personas. 
                                <br><br>
                                <h5>¿QUÉ PUEDE HACER EL USUARIO SI NO QUEDA SATISFECHO?</h5>
                                <br>1.	El Usuario puede enviar sus reclamaciones sobre la aceptación de los presente términos y condiciones y su cumplimiento. 
                                <br>2.	El Usuario podrá expresar una queja verbal al número de contacto de Atención al Clientes de FLORINER, S.A. DE C.V.
                                <br>3.	FLORINER, S.A. DE C.V. responderá a en un plazo de cuarenta y ocho horas contados a partir de la recepción de su queja.
                                <br><br>
                                <h5>CONTACTO</h5>
                                <br>1.	Si tiene comentarios o requiere información adicional, relacionada con FLORINER, S.A. DE C.V., así como en lo referente a sus servicios, Sitios o los presentes términos, por favor no dude en ponerse en contacto con nosotros al teléfono +52 777 333 01 40 y/o en el buzón de correo electrónico contacto@jardinesdemexico.org.
                                <br>2.	En su caso, el personal que atienda la llamada o a cargo de dicha dirección de correo electrónico los pondrá en contacto con la persona adecuada para dar respuesta o atender la situación que se plantee.
                                <br><br>
                                <h6 class="text-center">FLORINER, S.A. DE C.V. Y EL USUARIO EXPRESAN SU CONFORMIDAD EN LO EXPUESTO EN LOS PRESENTES TÉRMINOS Y CONDICIONES</h6>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Emergencia sanitaria -->
                        <div class="modal fade" id="modalEmergencia" tabindex="-1" role="dialog" aria-labelledby="modalEmergencia" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width:90% !important;">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¡Nos vemos hasta el 2021! ¡Gracias por su apoyo! </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img loading="lazy" src="../images/jardines/home/comunicado-cierre-jdm.jpg" class="img-fluid">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Modal Restaurante -->
                        <div class="modal fade" id="modalRestaurante" tabindex="-1" role="dialog" aria-labelledby="modalRestaurante" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width: 70% !important; margin:45px auto;">
                                <div class="modal-content">
                                <div class="modal-header" style="display:none">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel"></h5> -->
                                </div>
                                <div class="modal-body" style="padding: 5px !important;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="X" style="position: absolute; top: -20px; right: -25px; background: white; padding: 2px; border-radius: 50%; width: 28px;">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <img loading="lazy" src="../images/jardines/home/restaurante_nominados_imperdibles23.png" class="img-fluid">
                                </div>
                                <div class="modal-footer" style="display:none">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters ' . $classSlider . ' align-items-center justify-content-center" data-scrollax-parent="true">
                        <div class="col-lg-9 col-sm-8 col-xs-10 ftco-animate text-center" data-scrollax=" properties: { translateY: \'70%\' }">';
                    if($page == 'index'){
                        $header .= '<h1 class="mt-4 text-white" data-scrollax="properties: { translateY: \'30%\', opacity: 1.6 }">
                                        Vive una experiencia inolvidable en los jardines florales <strong>m&aacute;s grandes </strong>del mundo
                                    </h1>';
                                    /*$header .= '<a class="anm-arrow" href="javascript:doScrollTo();">
                                    <p class="mt-5">
                                        <span id="flecha-ind" class="lead icon-long-arrow-down text-white no-show">
                                        </span>
                                    </p>
                                </a>';*/
                    }else{
                        if($page == 'consentidos'){
                            $header .= '<div class="row justify-content-md-center"><div class="col-md-10 col-lg-8 f-center"><img loading="lazy" src="../images/jardines/headers/cons-logo.png" class="img-fluid"></div></div>'; 
                        }else{
                            $header .= '<p class="breadcrumbs" data-scrollax="properties: { translateY: \'30%\', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>' . $page . '</span></p>';
                            $header .= '<h1 class="mb-3 bread" data-scrollax="properties: { translateY: \'30%\', opacity: 1.6 }">' . $title . '</h1>';
                        }
                    }       
                    $header .= '</div>
                        </div>
                    </div>
                    </div>';
                    
                    if(ENVIROMENT == 'PROD'){
                        $header .= '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content modal-signup">
                                            <form class="p-4" id="credentialsForm" action="javascript:void(0);" onsubmit="validateCredentials(\'profile\')" method="post">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="text-primary mb-3">Inicia sesión</h4>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input id="email-sesion" name="email-sesion" type="email" class="form-control" placeholder="Correo electr&oacute;nico" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input id="password-sesion" name="password-sesion" type="password" class="form-control" placeholder="Contraseña" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <input type="submit" value="Iniciar sesión" class="btn btn-primary py-2 px-3 mr-3">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <a class="lost-pwd" href="javascript:recuperaPassword();">¿Olvidaste tu contraseña?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>';
                    }

            print_r($header);
        }

        public function displayBanners($onlyEvents = false){
            $today = new DateTime();
            $banners = array(
                array(
                    "image" => "../images/sliders/banner_imperdibles_votacion.png",
                    "mobile" => "../images/sliders/banner_imperdibles_votacion-m.png",
                    "type" => "notice",
                    "title" => "Imperdibles 2023",
                    "initialDate" => new DateTime("2023-07-24 08:00:00"),
                    "finalDate" => new DateTime('2023-09-01 23:59:00'),
                    "link" => "https://bit.ly/3qmiNvH" 
                ),
                array(
                    "image" => "../images/sliders/promo_verano23.png",
                    "mobile" => "../images/sliders/promo_verano23-m.png",
                    "type" => "notice",
                    "title" => "Promoción Verano JDM 2023",
                    "initialDate" => new DateTime("2023-07-21 08:00:00"),
                    "finalDate" => new DateTime('2023-09-30 23:59:59'),
                    "link" => "/boletos?utm_source=website&utm_medium=banner&utm_campaign=verano_web_it&utm_id=promo_verano23" 
                ),
                array(
                    "image" => "../images/sliders/banner_promo_verano_taquilla.png",
                    "mobile" => "../images/sliders/banner_promo_verano_taquilla-m.png",
                    "type" => "notice",
                    "title" => "Promoción Verano JDM 2023",
                    "initialDate" => new DateTime("2023-07-21 08:00:00"),
                    "finalDate" => new DateTime('2023-09-30 23:59:59'),
                    "link" => "" 
                ),
                array(
                    "image" => "../images/sliders/banner-restaurante-verano23.png",
                    "mobile" => "../images/sliders/banner-restaurante-verano23-m.png",
                    "type" => "notice",
                    "title" => "Eden Muñoz 2023",
                    "initialDate" => new DateTime("2023-07-29 08:00:00"),
                    "finalDate" => new DateTime('2023-08-28 00:01:00'),
                    "link" => "/restaurante-jdm?utm_source=website&utm_medium=banner&utm_campaign=verano_web_restaurante_it&utm_id=promo_verano23_restaurante" 
                ),
                array(
                    "image" => "../images/sliders/banner-fgn23.png",
                    "mobile" => "../images/sliders/banner-fgn23-m.png",
                    "type" => "notice",
                    "title" => "Beer Fest 2023",
                    "initialDate" => new DateTime("2023-06-12 08:00:00"),
                    "finalDate" => new DateTime('2023-08-21 23:59:59'),
                    "link" => "https://bit.ly/3PkEne5" 
                ),
                array(
                    "image" => "../images/sliders/banner_edenmunoz23.png",
                    "mobile" => "../images/sliders/banner_edenmunoz23-m.png",
                    "type" => "notice",
                    "title" => "Eden Muñoz 2023",
                    "initialDate" => new DateTime("2023-07-24 08:00:00"),
                    "finalDate" => new DateTime('2023-11-25 18:00:00'),
                    "link" => "https://bit.ly/44VBKEb" 
                )
            );
            
            // Desktop Slider
            $variableBanners = '<div id="slider-promo" class="owl-carousel owl-spaces desktopshow">';
            
            foreach($banners as $banner){
                //print_r("Banner -> " . ($banner['finalDate'] > $today));
                if($banner['initialDate'] < $today && $banner['finalDate'] > $today){
                    //print_r($banner['finalDate']);
                    //print_r('Fecha HOY');
                    
                    if($onlyEvents && $banner['type'] == 'notice'){ 
                        continue;
                    }else{
                        $variableBanners .= '<div class="item">
                            <img loading="lazy" src="' . $banner['image'] . '" alt="'. $banner['title'] .'" class="img-fluid" ';
                            if($banner['link'] != '')
                                $variableBanners .= 'data-link="' . $banner['link'] . '">';
                            else
                                $variableBanners .= '>';

                            
                        $variableBanners .= '</div>';
                    }
                }
            }
            $variableBanners .= '</div>';

            // Mobile Slider
            $variableBanners_mobile = '<div id="slider-promo-m" class="owl-carousel owl-spaces mobileshow">';
            
            foreach($banners as $banner){
                //print_r("Banner -> " . ($banner['finalDate'] > $today));
                if($banner['initialDate'] < $today && $banner['finalDate'] > $today){
                    //print_r($banner['finalDate']);
                    //print_r('Fecha HOY');
                    
                    if($onlyEvents && $banner['type'] == 'notice'){ 
                        continue;
                    }else{
                        $variableBanners_mobile .= '<div class="item">
                            <img loading="lazy" src="' . $banner['mobile'] . '" alt="'. $banner['title'] .'" class="img-fluid" ';
                            if($banner['link'] != '')
                                $variableBanners_mobile .= 'data-link="' . $banner['link'] . '">';
                            else
                                $variableBanners_mobile .= '>';

                            
                        $variableBanners_mobile .= '</div>';
                    }
                }
            }
            $variableBanners_mobile .= '</div>';

            // Print Desktop Slider
            print_r($variableBanners);
            
            // Print Mobile Slider
            print_r($variableBanners_mobile);
        }

        public function fb_messenger(){
            print_r('<!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <script async>
              window.fbAsyncInit = function() {
                FB.init({
                  xfbml            : true,
                  version          : \'v3.3\'
                });
              };
            
              (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = \'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js\';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, \'script\', \'facebook-jssdk\'));</script>
            
            <!-- Your customer chat code -->
            <div class="fb-customerchat"
              attribution=setup_tool
              page_id="295394560518714"
              theme_color="#f90590"
              logged_in_greeting="Hola. ¿Cómo podemos ayudarte?"
              logged_out_greeting="Hola. ¿Cómo podemos ayudarte?">
            </div>');


            /*
            print_r('<div id="fb-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1\';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, \'script\', \'facebook-jssdk\'));</script>
        
            <!-- Your customer chat code -->
            <div class="fb-customerchat"
            attribution=setup_tool
            page_id="1672653659705774"
            theme_color="#ee76ad"
            logged_in_greeting="Hola, ¿En qué podemos ayudarte?"
            logged_out_greeting="Hola, ¿En qué podemos ayudarte?">
            </div>');*/
        }

        /**
         * Despliega código HTML necesario para incluir el footer del template
         * 
         */
        public function footer(){
            print_r('<footer class="ftco-footer ftco-bg-dark ftco-section">
                    <div class="container">
                    <div class="row mb-3">
                        <div class="col-md col-lg-4">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Atenci&oacute;n a clientes</h2>
                                <ul class="list-unstyled">
                                <li><a href="tel://7773330140" class="d-block">+52 777 333 01 40</a></li>
                                <li><a href="tel://018008108888" class="d-block">01800 810 88 88</a></li>
                                <li><a href="mailto:contacto@jardinesdemexico.org" class="d-block">contacto@jardinesdemexico.org</a></li>
                                <li><p class="mb-0">Abierto de martes a domingo de 9:00 am a 6:00 pm.</p></li>
                                <li><a href="javascript:void(0)" onclick="javascript:showMap(\'18.6063628,-99.291238\')" class="d-block">Autopista M&eacute;xico - Acapulco km 129, Tehuixtla, 62900 Tehuixtla, Mor.</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md col-lg-2">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Planea tu visita</h2>
                                <ul class="list-unstyled">
                                    <li><a href="boletos" class="d-block">Taquilla</a></li>
                                    <li><a href="boletos" class="d-block">Servicios</a></li>
                                    <li><a href="reglamento" class="d-block">Reglamento</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md col-lg-3">
                            <div class="accs-rap ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Accesos r&aacute;pidos</h2>
                                <ul class="list-unstyled">
                                    <li><a href="index" class="d-block">Home</a></li>
                                    <li><a href="restaurante-jdm" class="d-block">Restaurante</a></li>
                                    <li><a href="faqs" class="d-block">Preguntas frecuentes</a></li>
                                    <li><a href="/aviso-de-privacidad" class="d-block">Aviso de privacidad</a></li>
                                    <li><a href="/tyc" class="d-block">T&eacute;rminos y Condiciones</a></li>
                                    <li><a href="boletos" class="d-block">Promociones</a></li>
                                    <li><a href="#" class="d-block">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md col-lg-3">
                            <div class="ftco-footer-widget mb-4 mt-4">
                                <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                                <li class="ftco-animate"><a target="_blank" alt="Facebook" href="https://es-la.facebook.com/jardinesdemexico"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a target="_blank" alt="Twitter" href="https://twitter.com/jardinesdemex?lang=es"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a target="_blank" alt="Instagram" href="https://www.instagram.com/jardinesdemexico/"><span class="icon-instagram"></span></a></li>
                                <li class="ftco-animate"><a target="_blank" alt="YouTube" href="https://www.youtube.com/user/JardinesdeMexico"><span class="icon-youtube"></span></a></li>
                                <li class="ftco-animate"><a target="_blank" alt="Pinterest" href="https://www.pinterest.com.mx/jardinesdemexico"><span class="icon-pinterest"></span></a></li>
                                <li class="ftco-animate"><a target="_blank" alt="Tripadvisor" href="https://www.tripadvisor.com.mx/Attraction_Review-g3180071-d6420150-Reviews-Jardines_de_Mexico-Jojutla_Central_Mexico_and_Gulf_Coast.html"><span class="icon-tripadvisor"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 justify-content-lg-center">
                        <div class="col-lg-2 col-md-4 col-sm-12"><img src="../images/jardines/home/dif-logo.png" class="img-fluid"></div>
                        <div class="col-lg-2 col-md-4 col-sm-12"><img src="../images/jardines/home/hdist-logo.png" class="img-fluid"></div>
                        <div class="col-lg-2 col-md-4 col-sm-12"><img src="../images/jardines/home/uma-logo.png" class="img-fluid"></div>
                        <div class="col-lg-2 col-md-4 col-sm-12"><img src="../images/jardines/home/guiness-logo.png" class="img-fluid"></div>
                        <div class="col-lg-2 col-md-4 col-sm-12"><img src="../images/jardines/home/trip-logo.png" class="img-fluid"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | </i> by <a href="#" target="_blank">JDM</a></p>
                        </div>
                    </div>
                    </div>
                </footer>');
        }

        public function getContactForm($spaceName = ''){
            $texto = '';
            if($spaceName == 'Galería de arte'){
                $texto = '¿Quieres exponer tu obra en este espacio?';
            }else{
                $texto = '¿Quieres organizar tu evento en este espacio?';
            }
            print_r('<h5 id="title-contact" class="mt-1 text-primary">'.$texto.'</h5>
                    <span>Ingresa tu informaci&oacute;n de contacto y nosotros nos comunicaremos contigo.</span>
                    <form id="form-contact-info" action="javascript:contactInfo()" class="mt-4">
                        <input type="hidden" id="space" name="space" value="'.$spaceName.'">
                        <div class="form-group">
                            <input id="name" name="name" type="text" class="form-control" placeholder="Nombre completo" required>
                        </div>
                        <div class="form-group">
                            <input id="email" name="email" type="mail" class="form-control" placeholder="Correo electr&oacute;nico" required>
                        </div>
                        <div class="form-group">
                            <input id="phone" name="phone" type="text" class="form-control" placeholder="Tel&eacute;fono" required maxlength="13">
                        </div>
                        <div class="form-group">
                            <input id="event" name="event" type="text" class="form-control" value="Evento Social" hidden>
                            <textarea id="message" name="message" cols="30" rows="7" class="form-control" placeholder="Plat&iacute;canos un poco de tu evento"></textarea>
                        </div>
                        <div class="form-group">
                            <input id="submitInfoBtn" type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>');
        }
        
        public function getInfoEvent($spaceName = ''){
            $texto = '¿Quieres organizar tu visita en Jardines de México?';
            print_r('<h5 id="title-contact" class="mt-1 text-primary">'.$texto.'</h5>
                    <span>Ingresa tu informaci&oacute;n de contacto y nosotros nos comunicaremos contigo.</span>
                    <form id="form-tours-info" action="javascript:contactTour()" class="mt-4">
                        <input type="hidden" id="space" name="space" value="'.$spaceName.'">
                        <div class="form-group">
                            <input id="name_tour" name="name" type="text" class="form-control" placeholder="Nombre completo" required>
                        </div>
                        <div class="form-group">
                            <input id="email_tour" name="email" type="mail" class="form-control" placeholder="Correo electr&oacute;nico" required>
                        </div>
                        <div class="form-group">
                            <input id="phone_tour" name="phone" type="phone" class="form-control" placeholder="Tel&eacute;fono" required maxlength="13">
                        </div>
                        <div class="form-group">
                            <input id="people_tour" name="people" type="number" class="form-control" placeholder="Número de Personas (mínimo 10)" min=10 required maxlength="5">
                        </div>
                        <div class="form-group">
                            <!-- <input id="date_tour" name="date_tour" type="text" class="form-control" placeholder="Fecha de Visita" required > -->
                            <input id="date_tour" name="date_tour" type="text" class="form-control" placeholder="Fecha de Visita" required >
                        </div>
                        <div class="form-group">
                            <textarea id="message_tour" name="message" cols="30" rows="7" class="form-control" placeholder="Déjanos cualquier información adicional que quieras saber de tu visita."></textarea>
                        </div>
                        <div class="form-group">
                            <input id="submitTourBtn" type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>');
        }

        

        public function makeItemInfoGarden($image, $title, $description){
            print_r('<div class="item">
                        <div class="card">
                            <a class="card__image" style="background-image: url(\'' . $image . '\');" href="'.$image.'" data-toggle="lightbox" data-gallery="'. ($title == '¿Sabias qu&eacute;?' ? 'sab' : 'obs').'-gallery"></a>
                            <div class="card__content text-left">
                                <h5>'.$title.'</h5>
                                <p class="card__text">'.$description.'</p>
                            </div>
                        </div>
                    </div>');
        }

        public function makeItemFlower($image, $name, $description){
            print_r('<div class="col-lg-4 col-md-6 pt-4 ftco-animate">
                <div class="list-block">
                    <figure>
                        <img loading="lazy" src="'.$image.'" alt="'.$name.'"/>
                        <figcaption>
                            <h3>'.$name.'</h3>
                            <p>'.$description.'</p>
                        </figcaption>
                    </figure>
                </div>
            </div>');
        }

    }
?>  