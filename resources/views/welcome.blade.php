<!DOCTYPE html>
<html lang="zxx">

<head>
    <style>
        .gm-control-active>img {
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            margin:0%;
        }

        .gm-control-active>img:nth-child(1) {
            display: block
        }

        .gm-control-active:hover>img:nth-child(1),
        .gm-control-active:active>img:nth-child(1),
        .gm-control-active:disabled>img:nth-child(1) {
            display: none
        }

        .gm-control-active:hover>img:nth-child(2),
        .gm-control-active:active>img:nth-child(3),
        .gm-control-active:disabled>img:nth-child(4) {
            display: block
        }
    </style>
    <link rel="shortcut icon" href="favicon.ico">


    <link type="text/css" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans_old:400,500,700|Google+Sans+Text:400">
    <link type="text/css" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93">
    <style>
        .gm-ui-hover-effect {
            opacity: .6
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }
    </style>
    <style>
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-cc button,
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-mtc div {
            font-size: 10px;
            box-sizing: border-box
        }

        .gm-style .gm-style-cc a,
        .gm-style .gm-style-cc button,
        .gm-style .gm-style-cc span {
            outline-offset: 3px
        }
    </style>
    <style>
        @media print {

            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {

            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style>
        .dismissButton {
            background-color: #fff;
            border: 1px solid #dadce0;
            color: #1a73e8;
            border-radius: 4px;
            font-family: Roboto, sans-serif;
            font-size: 14px;
            height: 36px;
            cursor: pointer;
            padding: 0 24px
        }

        .dismissButton:hover {
            background-color: rgba(66, 133, 244, 0.04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:focus {
            background-color: rgba(66, 133, 244, 0.12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:focus:not(:focus-visible) {
            background-color: #fff;
            border: 1px solid #dadce0;
            outline: none
        }

        .dismissButton:focus-visible {
            background-color: rgba(66, 133, 244, 0.12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:hover:focus {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:hover:focus:not(:focus-visible) {
            background-color: rgba(66, 133, 244, 0.04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:hover:focus-visible {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:active {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
        }

        .dismissButton:disabled {
            background-color: #fff;
            border: 1px solid #f1f3f4;
            color: #3c4043
        }
    </style>
    <style>
        .gm-style-moc {
            background-color: rgba(0, 0, 0, 0.45);
            pointer-events: none;
            text-align: center;
            transition: opacity ease-in-out
        }

        .gm-style-mot {
            color: white;
            font-family: Roboto, Arial, sans-serif;
            font-size: 22px;
            margin: 0;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%)
        }
    </style>
    <style>
        .gm-style img {
            max-width: none;
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="description" content=" ... ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset('css/bootstrap/bootstrap.min.css')}}>

    <!-- Scrolling Tabs CSS -->
    <link rel="stylesheet" href={{asset('css/bootstrap/jquery.scrolling-tabs.min.css')}}>

    <!-- Owl Carousel 2 CSS -->
    <!-- <link rel="stylesheet" href="css/owl-carousel2/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href={{asset('css/owl-carousel2/owl.carousel.min.css')}}>

    <!-- Simple Bar CSS -->
    <link rel="stylesheet" href={{asset('css/simplebar/simplebar.min.css')}}>

    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href={{asset('css/magnific-popup/magnific-popup.min.css')}}>

    <!-- Main CSS -->
    <link rel="stylesheet" href={{asset('css/main.min.css')}}>

    <title>Softwow</title>

    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/47/1/intl/es_419/common.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/47/1/intl/es_419/util.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/47/1/intl/es_419/map.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/47/1/intl/es_419/marker.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/47/1/intl/es_419/controls.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/47/1/intl/es_419/onion.js"></script>
</head>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21201467.js"></script>
<!-- End of HubSpot Embed Code -->
<body>

    <!-- -> Preloader -->
    <div id="preloader" class="preloader-hidden">
        <div class="load-content align-items-center d-flex">
            <div class="frame position-absolute">
                <div class="center position-absolute">
                    <div class="dot-1 center-dot position-absolute"></div>
                    <div class="dot-2 center-dot position-absolute"></div>
                    <div class="dot-3 center-dot position-absolute"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader -->



    <div class="container-fluid overflow-hidden position-relative">
        <main>
            <header id="header" class="position-relative">

                <!-- Horizontal navbar -> -->
                <nav class="navbar horizontal-navbar fixed-top navbar-expand-lg navbar-light scroll-menu">
                    <div class="container w-100 pr-0">
                        <div class="row w-100">
                            <div class="col-12 align-items-lg-start align-items-lg-center d-lg-flex pr-0">
                                <div class="d-flex justify-content-between w-100">
                                    <a class="navbar-brand mr-auto" href="#header">SOFTWOW</a>
                                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                                        data-target="#topmenu" aria-controls="topmenu" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <svg class="burger burgerRotate" viewBox="0 0 100 100"
                                            onclick="this.classList.toggle('active')">
                                            <path class="burgerLine burgerTop"
                                                d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                                            <path class="burgerLine middle" d="m 70,50 h -40" />
                                            <path class="burgerLine burgerBottom"
                                                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse topmenu-vertical position-relative show-menu"
                                    id="topmenu">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a href="#about" class="nav-link text-uppercase">nosotros</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#services" class="nav-link text-uppercase">servicios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#skills" class="nav-link text-uppercase">habilidades</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="#portfolio" class="nav-link text-uppercase">portafolio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#blog" class="nav-link text-uppercase">blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#contact" class="nav-link text-uppercase">contacto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Horizontal navbar -> -->

                <div id="home" class="container-fluid">
                    <div id="carouselTop" class="carousel carouselTop slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel__slide bg-img1 align-items-center d-flex active">
                                    <div class="container-fluid fixContainer1">
                                        <div class="row">
                                            <div class="col-sm-10 col-11 homeStyle mobileStyle"
                                                style="margin-left: 7rem; margin-top: 10rem;">
                                                <div class="carouselTop__content">
                                                    <h1 class="carouselTop__title">SOFT <span id="title-slide-1"
                                                            class="color-active-hover d-inline-flex"
                                                            style="margin-left: -1%;">WOW</span></h1>
                                                    <div class="carouselTop__overhead mb-5" style="width: 53%;">Tú socio
                                                        en la
                                                        transformación digital de tus proyectos.</div>

                                                    <div class="carouselTop__buttons d-flex ">
                                                        <a class="contact__submit3 d-flex justify-content-center align-items-center mr-5 "
                                                            type="button" href="#portfolio">Portafolio</a>
                                                        <a class="contact__submit3 d-flex justify-content-center align-items-center"
                                                            type="button" href="#services">Servicios</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </header>

            <div class="container">
                <div class="row d-flex">

                    <div class="col-lg-6 col-md-12 mt-5">
                        <h2 class="section-title text-uppercase position-relative show"><span
                                class="color-red">N</span>osotros</h2>
                        <div class="col-md-12 col-sm-12 mt-5 hide3">
                            <img class=" hide3 img-thumbnail mx-auto d-block pd-5" src="images/slide2.png"
                                alt="My photo">
                        </div>
                        <h6 class="mt-4 ml-2">Softwow es una agencia de desarrollo web y marketing digital de servicio
                            completo con sede en Cúcuta, Colombia. Ofrecemos diseño web personalizado, desarrollo de
                            marca, creación de contenido y soluciones de marketing diseñadas para ayudarlo a competir en
                            el mercado en línea actual.</h6>
                        <h6 class="mt-3 ml-2">Contamos con un equipo calificado que, por medio de metodologías de
                            trabajo ágiles, podrán generar la solución optima que requiere tu proyecto.</h6>
                        <h6 class="mt-3 ml-2">No solo vendemos páginas web, creamos soluciones eficientes para ese
                            proyecto que tanto deseas.</h6>

                    </div>

                    <div class="d-flex justify-content-end pl-lg-0 hide2">
                        <div class="about-block__img d-flex justify-content-end">

                            <img class=" hide2 imgDesktop position-absolute " src="images/slide2.png" alt="My photo">

                        </div>
                    </div>
                </div>
            </div>

            <section id="services" class="services">
                <div class="container ">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title text-uppercase position-relative show"><span
                                    class="color-red">S</span>ervicios</h2>
                        </div>

                    </div>
                    <div class="row services__items position-relative">
                        <svg class="position-absolute line-services" width="489" height="666" viewBox="0 0 489 666"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_f)">
                                <path class="line-services-path show"
                                    d="M6 7.5H42V296.37V319C42 325.627 47.3726 331 54 331H104.626H442V646.5C442 653.127 447.373 658.5 454 658.5H482.5"
                                    stroke-width="2"></path>
                            </g>
                            <defs>
                                <filter id="filter0_f" x="0" y="0.5" width="488.5" height="665"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                    </feBlend>
                                    <feGaussianBlur stdDeviation="3" result="effect1_foregroundBlur"></feGaussianBlur>
                                </filter>
                            </defs>
                        </svg>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="services__item overflow-hidden position-relative">
                                <div class="graphic-design d-flex flex-column justify-content-center position-absolute">
                                    <div class="services__icon align-items-center d-flex justify-content-center">
                                        <img src="svg/services/noun-graphic-design.svg" alt="Graphic Design">
                                    </div>
                                    <h3 class="services__titleService text-center">Desarrollo Web</h3>
                                    <div data-simplebar="init" class="services__info">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <p class="services__infoText show">Como agencia de
                                                                transformación digital generamos soluciones acorde a
                                                                cada proyecto o reto planteado por nuestros clientes,
                                                                utilizando metodologías ágiles y basados en los
                                                                principios de: comunicación, responsabilidad, honestidad
                                                                e innovación creamos sitios web a la medida.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="services__item overflow-hidden position-relative">
                                <div class="photography1 d-flex flex-column justify-content-center position-absolute">
                                    <div class="services__icon align-items-center d-flex justify-content-center">
                                        <img src="svg/services/camara-icono-01.svg" alt="Photography">
                                    </div>
                                    <h3 class="services__titleService text-center text-white">Fotografía</h3>
                                    <div data-simplebar="init" class="services__info">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content text-white" style="padding: 0px;">
                                                            <p class="services__infoText show">Tener fotos de calidad en
                                                                tu tienda virtual, redes sociales o catálogo de
                                                                productos puede ser un factor determinante que influya
                                                                en la decisión de compra de tus clientes, traemos para
                                                                ti el servicio de toma de fotografía de productos
                                                                (exteriores o estudio) con personal altamente calificado
                                                                y cámaras de última tecnología.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="services__item overflow-hidden position-relative">
                                <div class="web-design d-flex flex-column justify-content-center position-absolute">
                                    <div class="services__icon align-items-center d-flex justify-content-center">
                                        <img src="images/png1.png" alt="Web Design">
                                    </div>
                                    <h3 class="services__titleService text-center">Diseño UI/UX</h3>
                                    <div data-simplebar="init" class="services__info">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <p class="services__infoText show">Tener una interfaz
                                                                amigable con el usuario ya dejo de ser solo para las
                                                                grandes compañías, sabías que una página web bien
                                                                diseñada aumenta exponencialmente que los usuarios se
                                                                queden más tiempo en la misma. Te apoyamos en dicha
                                                                actividad con un equipo actualizado en tendencias de
                                                                diseño y uso de herramientas digitales para tal fin.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="services__item overflow-hidden position-relative">
                                <div class="branding d-flex flex-column justify-content-center position-absolute">
                                    <div class="services__icon align-items-center d-flex justify-content-center">
                                        <img src="svg/services/branding.svg" alt="Branding">
                                    </div>
                                    <h3 class="services__titleService text-center text-white">Marketing Digital</h3>
                                    <div data-simplebar="init" class="services__info">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <p class="services__infoText show text-white">Planificamos
                                                                estrategias de marketing integrales, para ayudarte a dar
                                                                visibilidad a tu negocio, con generación de una hoja de
                                                                ruta clara y definición de objetivos SMART. Crea canales
                                                                de comunicación y prospección sólidos para tu compañía o
                                                                emprendimiento.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="services__item overflow-hidden position-relative">
                                <div class="marketing d-flex flex-column justify-content-center position-absolute">
                                    <div class="services__icon align-items-center d-flex justify-content-center">
                                        <img src="images/png2.png" alt="Marketing">
                                    </div>
                                    <h3 class="services__titleService text-center">Gestión Documental</h3>
                                    <div data-simplebar="init" class="services__info">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <p class="services__infoText show">La gestión de los
                                                                documentos de tu compañía es parte fundamental a la hora
                                                                de certificarse en normas de calidad o estar en línea
                                                                con los lineamientos de manejo de la información de
                                                                entidades privadas que prestan servicios públicos.
                                                                Digitalizamos, procesamos y alojamos en la nube tu
                                                                archivo físico. Ten la información segura y a la mano.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="services__item overflow-hidden position-relative">
                                <div class="logo-design d-flex flex-column justify-content-center position-absolute">
                                    <div class="services__icon align-items-center d-flex justify-content-center">
                                        <img src="svg/services/branding-icono-01.svg" alt="Logo Design">
                                    </div>
                                    <h3 class="services__titleService text-center text-white">Branding</h3>
                                    <div data-simplebar="init" class="services__info">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <p class="services__infoText show text-white">Las marcas
                                                                dejaron de ser solo un logo, son la personificación de
                                                                lo que queremos que represente, ayudamos a las marcas a
                                                                descubrir su identidad basados en los valores y
                                                                objetivos que la compañía o emprendedor quiera que las
                                                                personas perciban de ella.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="about" class="position-absolute"></div>

            <section id="skills" class="skills counterStyle">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title text-uppercase position-relative show"><span
                                    class="color-red">Nuestras</span> Habilidades</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 pr-lg-4">
                            <div class="skills__info">

                                <p class="show">Contamos con un equipo con habilidades en múltiples tecnologías de
                                    programación y desarrollo de soluciones digitales integrales, basamos cada proyecto
                                    en las necesidades puntuales de cada cliente, usando las herramientas acordes a cada
                                    reto.


                                </p>
                                <p class="show"> A continuación, te mostramos algunas de las áreas o tecnologías que
                                    usamos recurrentemente.</p>



                            </div>
                        </div>
                        <div class="col-lg-6 pl-lg-4">
                            <div class="skills__experience">
                                <p class="show"><strong class="d-block experience-skill">Experiencia de
                                        Habilidad</strong></p>
                            </div>
                            <div class="skills__progressbars">
                                <p class="skills__title-bar show">Angular</p>
                                <div class="progress">
                                    <div class="progress-bar ad-photoshop show" role="progressbar">
                                        <div
                                            class="progress__number align-items-center d-flex justify-content-center ml-auto">
                                            100</div>
                                    </div>
                                </div>
                                <p class="skills__title-bar show">Laravel</p>
                                <div class="progress">
                                    <div class="progress-bar ad-illustrator show" role="progressbar">
                                        <div
                                            class="progress__number align-items-center d-flex justify-content-center ml-auto">
                                            80</div>
                                    </div>
                                </div>
                                <p class="skills__title-bar show">Scrum</p>
                                <div class="progress">
                                    <div class="progress-bar skatch show" role="progressbar">
                                        <div
                                            class="progress__number align-items-center d-flex justify-content-center ml-auto">
                                            90</div>
                                    </div>
                                </div>
                                <p class="skills__title-bar show">Prototipado UI/UX</p>
                                <div class="progress">
                                    <div class="progress-bar figma show" role="progressbar">
                                        <div
                                            class="progress__number align-items-center d-flex justify-content-center ml-auto">
                                            75</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="skills__counters counterStyle2">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-3 col-6">
                                <div
                                    class="skills__counter h-100 align-items-center d-flex flex-column justify-content-start text-center">
                                    <img src="svg/skills/projects-completed.svg" alt="Projects Completed">
                                    <span class="number" style="opacity: 1;">18</span>
                                    <div class="skills-counter__name">Proyectos Completados</div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div
                                    class="skills__counter h-100 align-items-center d-flex flex-column justify-content-start text-center">
                                    <img src="svg/skills/positive-feedbacks.svg" alt="Positive Feedbacks">
                                    <span class="number" style="opacity: 1;">30</span>
                                    <div class="skills-counter__name">Feedbacks Positivos</div>
                                </div>
                            </div>
                            <div class="col-sm-3 mt-sm-0 mt-5 col-6">
                                <div
                                    class="skills__counter h-100 align-items-center d-flex flex-column justify-content-start text-center">
                                    <img src="svg/skills/working-hours.svg" alt="Working Hours">
                                    <span class="number" style="opacity: 1;">900</span>
                                    <div class="skills-counter__name">Horas Trabajadas</div>
                                </div>
                            </div>
                            <div class="col-sm-3 mt-sm-0 mt-5 col-6">
                                <div
                                    class="skills__counter h-100 align-items-center d-flex flex-column justify-content-start text-center">
                                    <img src="svg/skills/happy-clients.svg" alt="Happy Clients">
                                    <span class="number" style="opacity: 1;">10</span>
                                    <div class="skills-counter__name">Clientes Felices</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio" class="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title text-uppercase position-relative show"><span
                                    class="color-red">P</span>ortafolio</h2>
                        </div>
                    </div>
                </div>
                <div class="portfolio__works">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="scrtabs-tab-container" style="visibility: visible;">
                                    <div class="scrtabs-tab-scroll-arrow scrtabs-tab-scroll-arrow-left"
                                        style="display: none;"><span class="glyphicon glyphicon-chevron-left"></span>
                                    </div>
                                    <div class="scrtabs-tabs-fixed-container" style="width: 930px;">
                                        <div class="scrtabs-tabs-movable-container" style="width: 930px; left: 0px;">
                                            <ul class="d-flex flex-nowrap portfolio__list nav nav-pills" role="tablist">
                                                <li class="works-all portfolio__item nav-item">
                                                    <a class="nav-link active" data-toggle="pill"
                                                        href="#works-all">Todo</a>
                                                </li>
                                                <li class="works-design portfolio__item nav-item">
                                                    <a class="nav-link" data-toggle="pill"
                                                        href="#works-design">Desarrollo Web</a>
                                                </li>
                                                <li class="works-photography portfolio__item nav-item">
                                                    <a class="nav-link" data-toggle="pill"
                                                        href="#works-photography">Fotografía</a>
                                                </li>
                                                <li class="works-development portfolio__item nav-item">
                                                    <a class="nav-link" data-toggle="pill"
                                                        href="#works-development">Documentales</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="scrtabs-tab-scroll-arrow scrtabs-tab-scroll-arrow-right"
                                        style="display: none;"><span class="glyphicon glyphicon-chevron-right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="works-all" class="container tab-pane active">
                            <div class="row portfolio__works">
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design3.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <h3 class="text-uppercase">
                                            <a href="#exampleModal">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show" href="#exampleModal" data-toggle="modal"
                                            data-target="#exampleModal">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design4.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <h3 class="text-uppercase">
                                            <a href="#exampleModal">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/design1.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design1.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/design2.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design2.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-development align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/development1.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/development1.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-photography align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/photography1.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/photography1.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <a class="image-link" href="images/portfolio/big/design3.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design3.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <h3 class="text-uppercase">
                                            <a href="#exampleModal">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show" href="#exampleModal" data-toggle="modal"
                                            data-target="#exampleModal">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/design4.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design4.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/design1.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design1.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="works-design" class="container tab-pane fade">
                            <div class="row">
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/design2.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design2.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/design3.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design3.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/design1.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design1.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-6 portfolio__work work-design align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/design4.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/design4.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="works-photography" class="container tab-pane fade">
                            <div class="row">
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-photography align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/photography1.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/photography1.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-photography align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/photography6.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/photography6.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-photography align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/photography3.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/photography3.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-photography align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/photography2.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/photography2.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-photography align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/photography5.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/photography5.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-photography align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/photography4.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/photography4.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="works-development" class="container tab-pane fade">
                            <div class="row">
                                <div
                                    class="col-6 col-sm-4 portfolio__work work-development align-items-center d-flex justify-content-center position-relative">
                                    <div class="portfolio__iconLink position-absolute">
                                        <a class="image-link" href="images/portfolio/big/development1.jpg">
                                            <img src="svg/portfolio/open-work.svg" alt="Work">
                                        </a>
                                    </div>
                                    <img class="portfolio__image w-100" src="images/portfolio/mini/development1.jpg"
                                        alt="Work">
                                    <div class="portfolio__info text-center position-absolute">
                                        <h3 class="text-uppercase">
                                            <a href="#">Project title</a>
                                        </h3>
                                        <p class="text-uppercase show">skill</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="reviews" class="reviews">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="section-title position-relative show"><span class="color-red">Nuestro</span>
                                Equipo</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <div class="reviews__wrap-line1 overflow-hidden position-absolute">
                                <svg class="reviews__line1 position-relative" width="908" height="340"
                                    viewBox="0 0 908 340" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter1_d)">
                                        <path class="reviews-line1-path show" d="M472 1H5V331H904"></path>
                                    </g>
                                    <defs>
                                        <filter id="filter1_d" x="0.5" y="0.5" width="907.5" height="339"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                            <feOffset dy="4"></feOffset>
                                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow">
                                            </feBlend>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                            <div class="reviews__wrap-line2 overflow-hidden position-absolute d-none d-md-block">
                                <svg class="reviews__line2 position-relative" width="476" height="340"
                                    viewBox="0 0 476 340" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter2_d)">
                                        <path class="reviews-line2-path show" d="M4 331L471 331L471 1L4.00003 0.999959">
                                        </path>
                                    </g>
                                    <defs>
                                        <filter id="filter2_d" x="0" y="0.5" width="475.5" height="339"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                            <feOffset dy="4"></feOffset>
                                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow">
                                            </feBlend>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                            <div class="reviews__wrap-line3 overflow-hidden position-absolute d-none d-md-block">
                                <svg class="reviews__line3 position-relative" width="910" height="340"
                                    viewBox="0 0 910 340" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter3_d)">
                                        <path class="reviews-line3-path show" d="M906 1H5V331H472"></path>
                                    </g>
                                    <defs>
                                        <filter id="filter3_d" x="0.5" y="0.5" width="909.5" height="339"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                            <feOffset dy="4"></feOffset>
                                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow">
                                            </feBlend>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                            <div class="reviews__wrap-line4 overflow-hidden position-absolute d-none d-md-block">
                                <svg class="reviews__line4 position-relative" width="476" height="340"
                                    viewBox="0 0 476 340" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter4_d)">
                                        <path class="reviews-line4-path show" d="M4 331L471 331L471 1L4.00003 0.999959">
                                        </path>
                                    </g>
                                    <defs>
                                        <filter id="filter4_d" x="0" y="0.5" width="475.5" height="339"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                            <feOffset dy="4"></feOffset>
                                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow">
                                            </feBlend>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                            <div id="reviews__mobileTabletCarousel"
                                class="owl-carousel owl-theme d-md-none d-block mobileTabletCarousel owl-loaded">











                                <!--  //mobile -->
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Erikson Rojas</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init"
                                                        class="reviews__blockText overflow-auto w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Director general</p>
                                                                            <p class="reviews__text show">
                                                                                “Muévete rápido y rompe objetos. Si no
                                                                                estás rompiendo cosas, no te estás
                                                                                moviendo lo suficientemente rápido.”
                                                                                <br>
                                                                                <br>
                                                                                Mark Zuckerberg, CEO de Facebook.

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Anna.jpg" alt="Anna">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Sebastián Ovalles</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Gerente de proyectos e
                                                                                innovación</p>
                                                                            <p class="reviews__text show">
                                                                                “Los managers les dicen a las personas
                                                                                qué hacer, mientras que los líderes les
                                                                                inspiran para hacerlo.”
                                                                                <br>
                                                                                <br>
                                                                                Jeff Weiner, CEO de LinkedIn.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Milla.jpg" alt="Milla">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Andrés Parra</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Programador senior
                                                                                Frontend</p>
                                                                            <p class="reviews__text show">
                                                                                "Hay dos maneras de diseñar software:
                                                                                una es hacerlo tan simple que sea obvia
                                                                                su falta de deficiencias, y la otra es
                                                                                hacerlo tan complejo que no haya
                                                                                deficiencias obvias"
                                                                                <br>
                                                                                <br>
                                                                                C.A.R. Hoare.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Maria.jpg" alt="Maria">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Andrés Patiño</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Programador junior
                                                                                Backend</p>
                                                                            <p class="reviews__text show">“La tarea del
                                                                                programador no es sólo escribir un
                                                                                programa, sino que su tarea principal es
                                                                                dar una prueba formal de que el programa
                                                                                que propone cumple la especificación
                                                                                funcional”.
                                                                                <br>
                                                                                <br>
                                                                                Edsger Dijkstra.

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/John.jpg" alt="John">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">David Cortes</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Programador junior
                                                                                Frontend</p>
                                                                            <p class="reviews__text show">"El buen
                                                                                código es su mejor documentación"

                                                                                Steve McConnell.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Evan.jpg" alt="Evan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Sebastián Ortiz</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Gerente de seguridad y
                                                                                salud en el trabajo</p>
                                                                            <p class="reviews__text show">“No se
                                                                                apresure, primero asegúrese.”</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Evan.jpg" alt="Evan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Alexandra Ortiz</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Contadora</p>
                                                                            <p class="reviews__text show">
                                                                                “Un activo coloca dinero en tu bolsillo.
                                                                                Un pasivo saca dinero de tu bolsillo”.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Evan.jpg" alt="Evan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Anthony Contreras</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red"> Creador de contenido
                                                                            </p>
                                                                            <p class="reviews__text show">
                                                                                “Muchas veces la gente no sabe lo que
                                                                                quiere hasta que se lo enseñas”
                                                                                <br>
                                                                                <br>
                                                                                Steve Jobs.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Evan.jpg" alt="Evan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Manuel Castañeda</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Copywriter</p>
                                                                            <p class="reviews__text show">
                                                                                “Todo se reduce a una comunicación
                                                                                integrada de marketing”
                                                                                <br>
                                                                                <br>
                                                                                Ann Stone.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Evan.jpg" alt="Evan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Liz Garrido</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red"> Ejecutiva comercial
                                                                            </p>
                                                                            <p class="reviews__text show">
                                                                                “Todo lo que alguna vez deseaste está
                                                                                del otro lado del miedo.”
                                                                                <br>
                                                                                <br>
                                                                                George Adair.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Evan.jpg" alt="Evan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Alejandro Vallejo</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Diseñador gráfico</p>
                                                                            <p class="reviews__text show">
                                                                                </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Evan.jpg" alt="Evan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="reviews__review item">
                                                <h3 class="reviews__name">Marisabel Pérez</h3>
                                                <div
                                                    class="reviews__content align-items-start d-flex position-relative">
                                                    <div data-simplebar="init" class="reviews__blockText w-100">
                                                        <div class="simplebar-wrapper" style="margin: 0px -15px;">
                                                            <div class="simplebar-height-auto-observer-wrapper">
                                                                <div class="simplebar-height-auto-observer"></div>
                                                            </div>
                                                            <div class="simplebar-mask">
                                                                <div class="simplebar-offset"
                                                                    style="right: 0px; bottom: 0px;">
                                                                    <div class="simplebar-content-wrapper"
                                                                        style="height: auto; overflow: hidden;">
                                                                        <div class="simplebar-content"
                                                                            style="padding: 0px 15px;">
                                                                            <p class="color-red">Diseñadora gráfica</p>
                                                                            <p class="reviews__text show">
                                                                                </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="simplebar-placeholder"
                                                                style="width: 0px; height: 0px;"></div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-horizontal"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-track simplebar-vertical"
                                                            style="visibility: hidden;">
                                                            <div class="simplebar-scrollbar"
                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                        <div class="bg-w46 position-absolute"></div>
                                                        <img class="reviews__photo position-relative w-100"
                                                            src="images/reviews/Evan.jpg" alt="Evan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation"
                                        class="owl-prev disabled"><svg viewBox="0 0 35 35" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M23 35C29.6274 35 35 29.6274 35 23L35 12C35 5.37258 29.6274 0 23 0L12 2.01072e-06C5.37258 2.59011e-06 0 5.37259 0 12L2.76562e-06 23C3.34501e-06 29.6274 5.37259 35 12 35L23 35ZM24 26.18L21.18 29L9.18 17L21.18 5L24 7.82L14.84 17L24 26.18Z">
                                            </path>
                                        </svg></button><button type="button" role="presentation" class="owl-next"><svg
                                            viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 -2.01072e-06C5.37258 -2.59011e-06 -1.22459e-06 5.37258 -1.80397e-06 12L1.04907e-06 23C4.69686e-07 29.6274 5.37258 35 12 35L23 35C29.6274 35 35 29.6274 35 23L35 12C35 5.37258 29.6274 -4.28438e-06 23 -4.86377e-06L12 -2.01072e-06ZM11 8.82L13.82 6L25.82 18L13.82 30L11 27.18L20.16 18L11 8.82Z">
                                            </path>
                                        </svg></button></div>
                                <div class="owl-dots"><button role="button"
                                        class="owl-dot "><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button></div>
                            </div>
                            <div id="reviews__desktopCarousel"
                                class="owl-carousel owl-theme d-none d-md-block owl-loaded">


                                <!-- //desktop -->
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3330px;">
                                        <div class="owl-item active" style="width: 1110px;">
                                            <div class="item">
                                                <div class="container">
                                                    <div
                                                        class="row reviews__wrapReviews d-flex justify-content-between">
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Erikson Rojas</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">
                                                                                                Director general</p>
                                                                                            <p
                                                                                                class="reviews__text show">
                                                                                                “Muévete rápido y rompe
                                                                                                objetos. Si no estás
                                                                                                rompiendo cosas, no te
                                                                                                estás moviendo lo
                                                                                                suficientemente rápido.”
                                                                                                <br>
                                                                                                <br>
                                                                                                Mark Zuckerberg, CEO de
                                                                                                Facebook.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Anna.jpg" alt="Anna">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Sebastián Ovalles</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">Gerente
                                                                                                de proyectos e
                                                                                                innovación</p>
                                                                                            <p
                                                                                                class="reviews__text show">

                                                                                                “Los managers les dicen
                                                                                                a las personas qué
                                                                                                hacer, mientras que los
                                                                                                líderes les inspiran
                                                                                                para hacerlo.”
                                                                                                <br>
                                                                                                <br>
                                                                                                Jeff Weiner, CEO de
                                                                                                LinkedIn.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Milla.jpg" alt="Milla">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Andrés Parra</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">
                                                                                                Programador senior
                                                                                                Frontend</p>
                                                                                            <p
                                                                                                class="reviews__text show">

                                                                                                "Hay dos maneras de
                                                                                                diseñar software: una es
                                                                                                hacerlo tan simple que
                                                                                                sea obvia su falta de
                                                                                                deficiencias, y la otra
                                                                                                es hacerlo tan complejo
                                                                                                que no haya deficiencias
                                                                                                obvias"
                                                                                                <br>
                                                                                                <br>
                                                                                                C.A.R. Hoare.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Maria.jpg" alt="Maria">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Andrés Patiño</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">
                                                                                                Programador junior
                                                                                                Backend</p>
                                                                                            <p
                                                                                                class="reviews__text show">

                                                                                                “La tarea del
                                                                                                programador no es sólo
                                                                                                escribir un programa,
                                                                                                sino que su tarea
                                                                                                principal es dar una
                                                                                                prueba formal de que el
                                                                                                programa que propone
                                                                                                cumple la especificación
                                                                                                funcional”.
                                                                                                <br>
                                                                                                <br>
                                                                                                Edsger Dijkstra.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/John.jpg" alt="John">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 1110px;">
                                            <div class="item">
                                                <div class="container">
                                                    <div
                                                        class="row reviews__wrapReviews d-flex justify-content-between">
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">David Cortes</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">
                                                                                                Programador junior
                                                                                                Frontend</p>
                                                                                            <p
                                                                                                class="reviews__text show">
                                                                                                "El buen código es su
                                                                                                mejor documentación"
                                                                                                <br>
                                                                                                <br>
                                                                                                Steve McConnell.

                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Evan.jpg" alt="Evan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Sebastián Ortiz</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">Gerente
                                                                                                de seguridad y
                                                                                                salud en el trabajo.</p>
                                                                                            <p
                                                                                                class="reviews__text show">
                                                                                                “No se apresure, primero
                                                                                                asegúrese.”</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Melissa.jpg"
                                                                            alt="Melissa">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Alexandra Ortiz.</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">
                                                                                                Contadora</p>
                                                                                            <p
                                                                                                class="reviews__text show">
                                                                                                “Un activo coloca dinero
                                                                                                en tu bolsillo. Un
                                                                                                pasivo saca dinero de tu
                                                                                                bolsillo”.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Erick.jpg" alt="Erick">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Anthony Contreras</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">
                                                                                                Creador de contenido</p>
                                                                                            <p
                                                                                                class="reviews__text show">
                                                                                                “Muchas veces la gente
                                                                                                no sabe lo que quiere
                                                                                                hasta que se lo enseñas”
                                                                                                <br>
                                                                                                <br>
                                                                                                Steve Jobs.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Barlow.jpg"
                                                                            alt="Barlow">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 1110px;">
                                            <div class="item">
                                                <div class="container">
                                                    <div
                                                        class="row reviews__wrapReviews d-flex justify-content-between">
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Manuel Castañeda</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">
                                                                                                Copywriter</p>
                                                                                            <p
                                                                                                class="reviews__text show">
                                                                                                “Todo se reduce a una
                                                                                                comunicación integrada
                                                                                                de marketing”</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Barbara.jpg"
                                                                            alt="Barbara">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Liz Garrido</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">
                                                                                                Ejecutiva comercial</p>
                                                                                            <p
                                                                                                class="reviews__text show">
                                                                                                “Todo lo que alguna vez
                                                                                                deseaste está del otro
                                                                                                lado del miedo.”
                                                                                                <br>
                                                                                                <br>
                                                                                                George Adair.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Henry.jpg" alt="Henry">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Alejandro Vallejo</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red">Diseñador gráfico</p>
                                                                                            <p
                                                                                                class="reviews__text show">
                                                                                                </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Melinda.jpg"
                                                                            alt="Melinda">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="reviews__review">
                                                                <h3 class="reviews__name">Marisabel Pérez</h3>
                                                                <div
                                                                    class="reviews__content align-items-start d-flex position-relative">
                                                                    <div data-simplebar="init"
                                                                        class="reviews__blockText w-100">
                                                                        <div class="simplebar-wrapper"
                                                                            style="margin: 0px -15px;">
                                                                            <div
                                                                                class="simplebar-height-auto-observer-wrapper">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-mask">
                                                                                <div class="simplebar-offset"
                                                                                    style="right: 0px; bottom: 0px;">
                                                                                    <div class="simplebar-content-wrapper"
                                                                                        style="height: 100%; overflow: hidden;">
                                                                                        <div class="simplebar-content"
                                                                                            style="padding: 0px 15px;">
                                                                                            <p class="color-red"> Diseñadora gráfica</p>
                                                                                            <p
                                                                                                class="reviews__text show">
                                                                                               </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-placeholder"
                                                                                style="width: auto; height: 133px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-horizontal"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="simplebar-track simplebar-vertical"
                                                                            style="visibility: hidden;">
                                                                            <div class="simplebar-scrollbar"
                                                                                style="transform: translate3d(0px, 0px, 0px); display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="reviews__blockPhoto align-items-center d-flex justify-content-center">
                                                                        <div class="bg-w46 position-absolute"></div>
                                                                        <img class="reviews__photo position-relative w-100"
                                                                            src="images/reviews/Jessica.jpg"
                                                                            alt="Jessica">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation"
                                        class="owl-prev disabled"><svg viewBox="0 0 35 35" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M23 35C29.6274 35 35 29.6274 35 23L35 12C35 5.37258 29.6274 0 23 0L12 2.01072e-06C5.37258 2.59011e-06 0 5.37259 0 12L2.76562e-06 23C3.34501e-06 29.6274 5.37259 35 12 35L23 35ZM24 26.18L21.18 29L9.18 17L21.18 5L24 7.82L14.84 17L24 26.18Z">
                                            </path>
                                        </svg></button><button type="button" role="presentation" class="owl-next"><svg
                                            viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 -2.01072e-06C5.37258 -2.59011e-06 -1.22459e-06 5.37258 -1.80397e-06 12L1.04907e-06 23C4.69686e-07 29.6274 5.37258 35 12 35L23 35C29.6274 35 35 29.6274 35 23L35 12C35 5.37258 29.6274 -4.28438e-06 23 -4.86377e-06L12 -2.01072e-06ZM11 8.82L13.82 6L25.82 18L13.82 30L11 27.18L20.16 18L11 8.82Z">
                                            </path>
                                        </svg></button></div>
                                <div class="owl-dots"><button role="button"
                                        class="owl-dot active"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews__carousel-logos">
                    <div class="container">
                        <div class="row">
                            <div class="col d-flex align-items-center flex-column">
                                <!-- <h3 class="title-blog-page text-center"></h3> -->
                                <div class="col">
                                    <h2 class="subTitle-blog-page font-weight-bold text-uppercase position-relative show mb-5 d-flex justify-content-center"
                                        style="font-size: 25px;"><span class="color-red">N</span>uestros Clientes </h2>

                                </div>
                                <!-- <p class="reviews__carousel-logosSubTitle text-center show">Lorem ipsum dolor sit amet,
                                    consectetuer adipiscing elit.</p> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div id="reviews-carousel-logo" class="owl-carousel owl-theme owl-loaded owl-drag">






                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-1520px, 0px, 0px); transition: all 0.25s ease 0s; width: 3040px;">
                                            <div class="owl-item " style="width: 90px !important;">
                                                <div class="reviews__carousel-itemLogo">
                                                    <img class="reviews__carousel-logo"
                                                        style="width: 72px; height: 90px;"
                                                        src="images/empresas/diocesis-cucuta-logo-main.png" Paint Shop">
                                                </div>
                                            </div>
                                            <div class="owl-item " style="width: 90px !important;">
                                                <div class="reviews__carousel-itemLogo">
                                                    <img class="reviews__carousel-logo"
                                                        style="width: 220px; height: 90px;"
                                                        src="images/empresas/LogoCuraduria2cucuta.png" alt="Chocolate">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-nav disabled"><button type="button" role="presentation"
                                            class="owl-prev"><span aria-label="Previous">‹</span></button><button
                                            type="button" role="presentation" class="owl-next"><span
                                                aria-label="Next">›</span></button></div>
                                    <div class="owl-dots"><button role="button"
                                            class="owl-dot active"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="blog" class="blog position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="section-title text-uppercase position-relative show"><span
                                    class="color-red">B</span>log</h2>
                            <p class="section-subtitle m-0 show">Ultimos agregados</p>
                        </div>
                    </div>
                    <div class="row blog__news">
                        <div class="col-12 col-md-6 align-items-md-end d-flex">
                            <article class="blog__new w-100">

                                <div class="blog__blockImg position-relative">
                                    <img class="w-100" src="images/blog/new1.jpg" alt="New">
                                    <div class="blog__metadate position-absolute">
                                        <h3 class="blog__title text-uppercase">Single post</h3>
                                        <p class="blog__date text-uppercase show">Aug 16, 2016</p>
                                    </div>
                                </div>
                                <div class="blog__bottomInfo">
                                    <div data-simplebar="init" class="blog__text">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <p class="show">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Velinteger sed consequat donec
                                                                adipiscing pellentesque facilisi. Lorem ipsum dolor sit
                                                                amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="blog__bottom align-items-center d-flex justify-content-center">
                                        <a class="blog__link show text-center" href="single-post-3.html">Ver más</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 align-items-md-end d-flex">
                            <article class="blog__new w-100">

                                <div class="blog__blockImg position-relative">
                                    <img class="w-100" src="images/blog/new2.jpg" alt="New">
                                    <div class="blog__metadate position-absolute">
                                        <h3 class="blog__title text-uppercase">Single post</h3>
                                        <p class="blog__date text-uppercase show">Aug 16, 2016</p>
                                    </div>
                                </div>
                                <div class="blog__bottomInfo">
                                    <div data-simplebar="init" class="blog__text">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <p class="show">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Velinteger sed consequat donec
                                                                adipiscing pellentesque facilisi. Lorem ipsum dolor sit
                                                                amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="blog__bottom align-items-center d-flex justify-content-center">
                                        <a class="blog__link show text-center" href="single-post-3.html">Ver más</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 align-items-md-end d-flex">
                            <article class="blog__new w-100">

                                <div class="blog__blockImg position-relative">
                                    <img class="w-100" src="images/blog/new3.jpg" alt="New">
                                    <div class="blog__metadate position-absolute">
                                        <h3 class="blog__title text-uppercase">Single post</h3>
                                        <p class="blog__date text-uppercase show">Aug 16, 2016</p>
                                    </div>
                                </div>
                                <div class="blog__bottomInfo rty">
                                    <div data-simplebar="init" class="blog__text">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <p class="show">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Velinteger sed consequat donec
                                                                adipiscing pellentesque facilisi. Lorem ipsum dolor sit
                                                                amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="blog__bottom align-items-center d-flex justify-content-center">
                                        <a class="blog__link show text-center" href="single-post-3.html">Ver más</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 align-items-md-end d-flex">
                            <article class="blog__new w-100">

                                <div class="blog__blockImg position-relative">
                                    <img class="w-100" src="images/blog/new4.jpg" alt="New">
                                    <div class="blog__metadate position-absolute">
                                        <h3 class="blog__title text-uppercase">Single post</h3>
                                        <p class="blog__date text-uppercase show">Aug 16, 2016</p>
                                    </div>
                                </div>
                                <div class="blog__bottomInfo rty">
                                    <div data-simplebar="init" class="blog__text">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <p class="show">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Velinteger sed consequat donec
                                                                adipiscing pellentesque facilisi. Lorem ipsum dolor sit
                                                                amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 88px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="blog__bottom align-items-center d-flex justify-content-center">
                                        <a class="blog__link show text-center" href="single-post-3.html">Ver más</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="section-title text-uppercase position-relative show"><span
                                    class="color-red">C</span>ontacto</h2>
                            <p class="section-subtitle m-0 show">Escríbenos!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="contact__list">
                                <li class="contact__item">
                                    <address><strong>Dirección: </strong>Cll 6AN # 15AE-52 San Eduardo</address>
                                </li>
                                <li class="contact__item"><strong>Email: </strong>contacto@softwow.co</li>
                                <li class="contact__item"><strong>Teléfono: </strong>+57 3193347893</li>
                                <li class="contact__item"><strong>WhatsApp: </strong><a
                                        onclick="return !window.open(this.href)"
                                        href="https://api.whatsapp.com/send?phone=573138815094&text=Hola%2C%20estoy%20interesado%20en%20los%20servicios%20softwow">+57
                                        3138815094</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <form class="contact__form needs-validation ml-auto" id="contactForm" name="contactForm"
                                action="feedback.php" method="post">
                                <input required="" id="name" class="d-block contact__name reset w-100" name="name"
                                    type="text" placeholder="Nombre">
                                <input required="" id="email" class="d-block contact__email reset w-100" name="email"
                                    type="email" placeholder="Email">
                                <input type="text" name="invisible" class="reset d-none w-100" value="">
                                <input required="" id="message" class="d-block contact__message reset w-100"
                                    name="message" placeholder="Mensaje">
                                <div id="sent" class="position-absolute text-center">
                                    <p class="show">Message sent successfully.</p>
                                </div>
                                <button class="contact__submit btn" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
            </section>

        </main>
        <br>
        <footer class="footer justify-content-end d-flex flex-column ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7 footer__wrapList d-flex flex-wrap justify-content-center">
                        <nav class="footer__list d-flex justify-content-center">
                            <ul>
                                <li class="footer__listItem">
                                    <a class="footer__listLink" href="#about">Nosotros</a>
                                </li>
                                <li class="footer__listItem">
                                    <a class="footer__listLink" href="#services">Servicios</a>
                                </li>
                            </ul>
                        </nav>
                        <nav class="footer__list d-flex justify-content-center">
                            <ul>
                                <li class="footer__listItem">
                                    <a class="footer__listLink" href="#skills">Habilidades</a>
                                </li>
                                <li class="footer__listItem">
                                    <a class="footer__listLink" href="#portfolio">Portafolio</a>
                                </li>

                            </ul>
                        </nav>
                        <nav class="footer__list d-flex justify-content-center">
                            <ul>
                                <li class="footer__listItem">
                                    <a class="footer__listLink" href="#blog">Blog</a>
                                </li>
                                <li class="footer__listItem">
                                    <a class="footer__listLink" href="#contact">contacto</a>
                                </li>

                            </ul>
                        </nav>

                    </div>
                    <div class="row col-md-5 col-12 d-md-flex align-items-md-end  justify-content-center mb-5 ">
                        <div class="col-2 col-sm-2 col-md-3 col-lg-2 text-center text-md-left">
                            <a target="_blank" href="https://www.linkedin.com/company/softwow-colombia"
                                class="footer__icon show">
                                <img src="/svg/media/linkedin.svg" alt="">
                            </a>
                        </div>
                        <div class="col-2 col-sm-2 col-md-3 col-lg-2 col-sm-2 col-md-1 text-center text-md-left ">
                            <a target="_blank" href="https://www.youtube.com" class="footer__icon show">
                                <img src="/svg/media/youtube.svg" alt="">
                            </a>
                        </div>
                        <div class="col-2 col-sm-2 col-md-3 col-lg-2 col-sm-2 col-md-1 text-center text-md-left ">
                            <a target="_blank" href="https://www.instagram.com/softwowcol/" class="footer__icon show">
                                <img src="/svg/media/instagram.svg" alt="">
                            </a>
                        </div>
                        <div class="col-2 col-sm-2 col-md-3 col-lg-2 col-sm-2 col-md-1 text-center text-md-left ">
                            <a target="_blank" href="https://www.facebook.com/softwowcol/" class="footer__icon show">
                                <img src="/svg/media/facebook.svg">
                            </a>
                        </div>
                        <div class="col-2 col-sm-2 col-md-3 col-lg-2 col-sm-2 col-md-1 text-center text-md-left ">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send?phone=573138815094&text=Hola%2C%20estoy%20interesado%20en%20los%20servicios%20softwow"
                                target="_blank" class="footer__icon show">
                                <img src="/svg/media/whatsapp.svg" alt="">
                            </a>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-2">

                        <p class="text-center footer__copyright m-0 show">© Copyright 2021. Todos los derechos
                            reservados.</p>
                        <p class="text-center footer__copyright m-0 show">Sitio web diseñado y desarrollado por manos
                            Cucuteñas.</p>
                        <p class="text-center footer__copyright m-0 show">Hecho con ❤ Softwow!</p>

                    </div>
                </div>
            </div>
        </footer>

        <div id="top" class="fixed-bottom" style="display: block;">
            <svg class="position-absolute" viewBox="0 0 48 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="stroke"
                    d="M23.9171 0.00304877C22.882 0.0425276 21.83 0.469523 21.0338 1.25907L1.23415 20.9423C-0.411383 22.574 -0.411383 25.1445 1.23415 26.7762C2.87968 28.4079 5.48851 28.4079 7.13405 26.7762L24.0004 10.0347L40.8835 26.7762C42.529 28.4079 45.1378 28.4079 46.7834 26.7762C47.5796 25.9866 48 24.9368 48 23.884C48 22.8313 47.5796 21.7845 46.7834 20.9423L26.717 1.04423C25.9739 0.307313 24.9522 -0.036429 23.9171 0.00304877ZM23.9171 2.11846C24.4081 2.07898 24.8887 2.22254 25.2337 2.56468L45.3 22.4627C46.0963 23.2523 46.0963 24.5654 45.3 25.3549C44.5038 26.1445 43.163 26.1445 42.3668 25.3549L24.0004 7.14256L5.63407 25.3549C4.83785 26.1445 3.51368 26.1445 2.71746 25.3549C2.2928 24.9338 2.13413 24.4104 2.13413 23.884C2.13413 23.3577 2.34589 22.8343 2.71746 22.4132L22.5171 2.77952C22.9152 2.38475 23.4261 2.15794 23.9171 2.11846Z">
                </path>
                <path id="fill"
                    d="M23.9171 2.11846C24.4081 2.07898 24.8887 2.22254 25.2337 2.56468L45.3 22.4627C46.0963 23.2523 46.0963 24.5654 45.3 25.3549C44.5038 26.1445 43.163 26.1445 42.3668 25.3549L24.0004 7.14256L5.63407 25.3549C4.83785 26.1445 3.51368 26.1445 2.71746 25.3549C2.2928 24.9338 2.13413 24.4104 2.13413 23.884C2.13413 23.3577 2.34589 22.8343 2.71746 22.4132L22.5171 2.77952C22.9152 2.38475 23.4261 2.15794 23.9171 2.11846Z">
                </path>
            </svg>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header container-fluid">
                        <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <img class="img-fluid show" src="/images/my-photo2.jpg" alt="">
                    </div>

                    <div class="modal-body">
                        <h4 class="font-weight-bold" style="font-size: 25px;">
                            <span class="color-red">Nombre</span> Proyecto</h4>
                        <p class="show" style="font-size: 16px;">text descriptivo del proyecto</p>
                        <hr>
                        <h5 class="font-weight-bold section-title2 show mb-3" style="font-size: 20px;">Detalles</h5>
                        <h5 class="font-weight-bold" style="font-size: 16px;">Clientes: <span
                                class="font-weight-normal"> Safero</span></h5>
                        <h5 class="font-weight-bold" style="font-size: 16px;">Fecha: <span class="font-weight-normal">
                                24, enero, 2020</span></h5>
                        <h5 class="font-weight-bold" style="font-size: 16px;">URL: <span class="font-weight-normal"><a
                                    target="_blank" href="https://Safero.co">Ver proyecto<i aria-hidden="true"
                                        class="fa fa-external-link"></i></a></span></h5>


                    </div>
                    <div class="modal-footer d-flex justify-content-center">

                        <a class="contact__submit2 d-flex justify-content-center align-items-center" target="_blank"
                            href="https://safero.co">Ver proyecto</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/bootstrap/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap/popper.1.16.0.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/jQuery-v3.3.1.min.js"></script>
    <script src="js/main.min.js"></script>
    <!-- <script src="js/main.js"></script> -->

    <script src="js/front-page.min.js"></script>

    <!-- Contact form -->
    <!-- <script src="js/feedback.js"></script> -->
    <script src="js/feedback.min.js"></script>

    <!-- Preloader -->
    <script src="js/preloader.min.js"></script>

    <!-- Scroll Animations -->
    <script src="js/scroll-animations.min.js"></script>
    <!-- <script src="js/scroll-animations.js"></script> -->

    <!-- Owl Carousel 2 -->
    <script src="js/owl-carousel2/owl.carousel.min.js"></script>

    <script src="js/jquery-2.2.1.min.js"></script>

    <!-- Scrolling Tabs -->
    <script src="js/bootstrap/jquery.scrolling-tabs.min.js"></script>
    <script src="js/bootstrap/portfolio-link-tabs.min.js"></script>

    <!-- Magnific Popup -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Menu -->
    <script src="js/menu.min.js"></script>
    <!-- <script src="js/menu.js"></script> -->

    <!-- Simple Bar -->
    <script src="js/simplebar/simplebar.js"></script>

    <!-- Counter section MY SKILLS -->
    <script src="js/counter.min.js"></script>
    <!-- <script src="js/counter.js"></script> -->

    <!-- Google map -> -->
    <script>
        function initMap() {
            var uluru = {
                lat: 46.4598865, // latitude in degrees
                lng: 30.5717043 // longitude in degrees
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 7,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <!-- Google map api key -->
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?&amp;callback=initMap"></script>
    <!-- <- Google map -->

    <!-- A JavaScript Typing Animation Library -->
    <script src="js/typed/typed.min.js"></script>
    <script src="js/typed/typed-title-1.min.js"></script>
    <!-- <script src="js/typed/typed-title-1.js"></script> -->
    <script src="js/typed/typed-title-2.min.js"></script>
    <!-- <script src="js/typed/typed-title-2.js"></script> -->
    <script src="js/typed/typed-title-3.min.js"></script>
    <!-- <script src="js/typed/typed-title-3.js"></script> -->

    <!-- Block copy -->
    <script src="js/block-copy.min.js"></script>
    <!-- <script src="js/block-copy.js"></script> -->

</body>

</html>