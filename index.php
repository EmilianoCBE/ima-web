<!DOCTYPE html>
<html lang="es">

<?php 
    $page_title = "Inicio - IMA EXPRESS";
    include 'includes/head.php'; 
?>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <div id="de-loader"></div>
        
        <?php include 'includes/header.php'; ?>
        
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <section class="text-light no-top no-bottom relative rounded-1 overflow-hidden m-3">
                <div class="mh-800 position-relative">
                    
                    <div class="static-content-layer" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 10; pointer-events: none;">
                        <div class="sw-caption" style="height: 100%;">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center justify-content-center">
                                    <div class="col-lg-10 text-center">
                                        
                                        <div class="sw-text-wrapper mx-auto" style="pointer-events: auto;">
                                            
                                            <img src="images/IMA_logo_white.png" alt="IMA EXPRESS" width="250" class="mb-4 wow fadeInUp mx-auto">
                                            
                                            <h2 class="animated fadeInUp fw-bold mb-4" style="font-size: 36px;">
                                                Conectando distancias,<br> acercando oportunidades
                                            </h2>
                                            
                                            <div class="d-flex justify-content-center gap-3 wow fadeInUp" data-wow-delay=".2s">
                                                <a href="contact.php"  class="btn-main btn-custom-dark-hover">
                                                    Cotizar Ahora
                                                </a>
                                                <a href="servicios.php" class="btn-main btn-custom-dark-hover">Nuestros Servicios</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper" style="z-index: 1;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-inner" style="background-image: url('images/slider/slider_1.jpeg'); background-position: center 30%; background-size: cover;">
                                    <div class="sw-overlay op-4"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-inner" style="background-image: url('images/slider/slider_2.jpeg'); background-position: center 70%; background-size: cover;">
                                    <div class="sw-overlay op-4"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-inner" style="background-image: url('images/slider/slider_3.jpeg'); background-position: center; background-size: cover;">
                                    <div class="sw-overlay op-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </section>

            <section class="mx-3 p-0 relative mt-n50 sm-mt-0 z-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <div class="bg-color text-light p-4 rounded-1 h-100 shadow-lg border-top border-white border-4 hover-scale-effect">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-circle-box bg-white me-3">
                                        <i class="fa-solid fa-map-location-dot fs-24 id-color"></i>
                                    </div>
                                    <h4 class="mb-0 text-white">Cobertura Total</h4>
                                </div>
                                <p class="op-9 mb-3">Operamos en todo México y Estados Unidos con servicio puerta a puerta sin interrupciones.</p>
                                <a href="cobertura.php" class="text-white fw-bold hover-underline">Ver Mapa <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="bg-white text-dark p-4 rounded-1 h-100 shadow-lg border-top border-color border-4 hover-scale-effect">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-circle-box bg-color me-3">
                                        <i class="fa-solid fa-right-left fs-24 text-white"></i>
                                    </div>
                                    <h4 class="mb-0 text-dark">Expertos en Cruce</h4>
                                </div>
                                <p class="text-muted mb-3">Especialistas en la frontera de Laredo, Texas. Agilizamos sus importaciones y exportaciones.</p>
                                <a href="servicios.php" class="id-color fw-bold hover-underline">Nuestros Servicios <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="bg-color text-light p-4 rounded-1 h-100 shadow-lg border-top border-white border-4 hover-scale-effect">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-circle-box bg-white me-3">
                                        <i class="fa-solid fa-headset fs-24 id-color"></i>
                                    </div>
                                    <h4 class="mb-0 text-white">Atención Personal</h4>
                                </div>
                                <p class="op-9 mb-3">Sin sistemas automatizados complicados. Comunicación directa con expertos que conocen su cuenta.</p>
                                <a href="contact.php" class="text-white fw-bold hover-underline">Contactar <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft">
                            <div class="relative">
                                <img src="images/business.jpg" class="w-100 rounded-1 shadow-lg relative z-2" alt="Equipo IMA EXPRESS">
                                
                                <div class="abs bottom-0 start-0 m-4 p-3 bg-white rounded-1 shadow z-3">
                                    <div class="d-flex align-items-center">
                                        <h2 class="mb-0 me-3 id-color display-4 fw-bold">2021</h2>
                                        <div class="lh-sm">
                                            <span class="d-block fw-bold text-dark">Año de</span>
                                            <span class="text-dark">Fundación</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 wow fadeInRight">
                            <div class="ps-lg-4">
                                <div class="subtitle id-color">Sobre Nosotros</div>
                                <h2 class="mb-3">Su Socio Estratégico en Logística Binacional</h2>
                                <p class="lead text-dark">
                                    IMA EXPRESS LLC nació con una misión clara: ofrecer soluciones de transporte seguras y confiables entre México y Estados Unidos.
                                </p>
                                <p class="mb-4">
                                    Entendemos que cada envío es una promesa de negocio. Por eso, combinamos una flota moderna y un equipo apasionado para apoyar el crecimiento de las empresas que confían en nosotros, brindando siempre un trato directo y humano.
                                </p>
                                <a href="about.php" class="btn-main btn-custom-dark-hover">Conoce Nuestra Historia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light mx-3 rounded-1">
                <div class="container">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-lg-7">
                            <div class="subtitle id-color">Lo que hacemos mejor</div>
                            <h2>Soluciones Logísticas Integrales</h2>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <a href="servicios.php" class="d-block h-100 p-4 bg-white rounded-1 shadow-sm hover-shadow-lg transition-all text-dark group">
                                <div class="mb-4 overflow-hidden rounded-1 relative" style="height: 200px;">
                                    <img src="images/card-1.jpg" class="w-100 h-100 object-cover hover-scale-1-1 transition-all" alt="Caja Seca">
                                </div>
                                <h4 class="mb-2 group-hover-color transition-all">Caja Seca 53'</h4>
                                <p class="text-muted mb-0">Transporte FTL y LTL optimizado para maximizar su carga y reducir costos.</p>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                            <a href="servicios.php" class="d-block h-100 p-4 bg-white rounded-1 shadow-sm hover-shadow-lg transition-all text-dark group">
                                <div class="mb-4 overflow-hidden rounded-1 relative" style="height: 200px;">
                                    <img src="images/card-2.jpg" class="w-100 h-100 object-cover hover-scale-1-1 transition-all" alt="Internacional">
                                </div>
                                <h4 class="mb-2 group-hover-color transition-all">Internacional (MX-USA)</h4>
                                <p class="text-muted mb-0">Servicio Door-to-Door sin transbordos. Gestión aduanera y cruce ágil.</p>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <a href="servicios.php" class="d-block h-100 p-4 bg-white rounded-1 shadow-sm hover-shadow-lg transition-all text-dark group">
                                <div class="mb-4 overflow-hidden rounded-1 relative" style="height: 200px;">
                                    <img src="images/card-3.jpg" class="w-100 h-100 object-cover hover-scale-1-1 transition-all" alt="Urgentes">
                                </div>
                                <h4 class="mb-2 group-hover-color transition-all">Envíos Urgentes</h4>
                                <p class="text-muted mb-0">Soluciones Just-in-Time y Expedited para cuando el tiempo es crítico.</p>
                            </a>
                        </div>
                    </div>
                    
                    <style>
                        .btn-custom-dark-hover:hover {
                            background-color: #111 !important;
                            border-color: #111 !important;
                            color: #fff !important;
                        }
                    </style>

                    <div class="text-center mt-5">
                        <a href="servicios.php" class="btn-main btn-custom-dark-hover">Ver Todos los Servicios</a>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-lg-8">
                            <div class="subtitle id-color">Sectores</div>
                            <h2>Experiencia en su Industria</h2>
                        </div>
                    </div>
                    
                    <div class="row g-4 justify-content-center">
                        <div class="col-6 col-md-4 col-lg-2 text-center wow fadeInUp" data-wow-delay="0s">
                            <div class="p-4 rounded-1 border hover-shadow-sm transition-all h-100">
                                <i class="fa-solid fa-industry fs-40 id-color mb-3"></i>
                                <h5 class="fs-16 mb-0">Manufactura</h5>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 text-center wow fadeInUp" data-wow-delay=".1s">
                            <div class="p-4 rounded-1 border hover-shadow-sm transition-all h-100">
                                <i class="fa-solid fa-wheat-awn fs-40 id-color mb-3"></i>
                                <h5 class="fs-16 mb-0">Agro</h5>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 text-center wow fadeInUp" data-wow-delay=".2s">
                            <div class="p-4 rounded-1 border hover-shadow-sm transition-all h-100">
                                <i class="fa-solid fa-helmet-safety fs-40 id-color mb-3"></i>
                                <h5 class="fs-16 mb-0">Construcción</h5>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 text-center wow fadeInUp" data-wow-delay=".3s">
                            <div class="p-4 rounded-1 border hover-shadow-sm transition-all h-100">
                                <i class="fa-solid fa-cart-shopping fs-40 id-color mb-3"></i>
                                <h5 class="fs-16 mb-0">Retail</h5>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 text-center wow fadeInUp" data-wow-delay=".4s">
                            <div class="p-4 rounded-1 border hover-shadow-sm transition-all h-100">
                                <i class="fa-solid fa-recycle fs-40 id-color mb-3"></i>
                                <h5 class="fs-16 mb-0">Med. Ambiente</h5>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 text-center wow fadeInUp" data-wow-delay=".5s">
                            <div class="p-4 rounded-1 border hover-shadow-sm transition-all h-100 relative group">
                                <i class="fa-solid fa-plus fs-40 id-color mb-3 group-hover-scale transition-all"></i>
                                <h5 class="fs-16 mb-0">Ver Más</h5>
                                <a href="sectores.php" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-light mx-3 rounded-1 mb-5 p-4 p-lg-5" style="background-color: #0F172A;">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-8 text-center mb-4">
                            <div class="subtitle text-white-50 wow fadeInUp">Nuestros Valores</div>
                            <h2 class="wow fadeInUp text-white" data-wow-delay=".1s" >¿Por qué elegir IMA EXPRESS LLC?</h2>
                        </div>
                    </div>
                    
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="d-flex h-100 p-3 rounded-1 border border-secondary bg-white-5 hover-bg-dark-2 transition-all" style="white-space: normal;">
                                <div class="me-4 mt-1 flex-shrink-0">
                                    <div class="icon-circle-box bg-color text-white shadow-sm">
                                        <i class="fa-solid fa-comments fs-24"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-2 text-white">Comunicación Directa</h4>
                                    <p class="mb-0 op-8 fs-15 text-light">Sin call centers. Hablará con personas reales que conocen su cuenta y entienden sus necesidades específicas.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="d-flex h-100 p-3 rounded-1 border border-secondary bg-white-5 hover-bg-dark-2 transition-all" style="white-space: normal;">
                                <div class="me-4 mt-1 flex-shrink-0">
                                    <div class="icon-circle-box bg-color text-white shadow-sm">
                                        <i class="fa-solid fa-route fs-24"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-2 text-white">Rutas Optimizadas</h4>
                                    <p class="mb-0 op-8 fs-15 text-light">Planificación inteligente para evitar retrasos, reducir costos operativos y mejorar los tiempos de entrega.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="d-flex h-100 p-3 rounded-1 border border-secondary bg-white-5 hover-bg-dark-2 transition-all" style="white-space: normal;">
                                <div class="me-4 mt-1 flex-shrink-0">
                                    <div class="icon-circle-box bg-color text-white shadow-sm">
                                        <i class="fa-solid fa-shield-halved fs-24"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-2 text-white">Seguridad Primero</h4>
                                    <p class="mb-0 op-8 fs-15 text-light">Protocolos estrictos de manejo y monitoreo constante para garantizar la integridad de su carga en todo momento.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-color text-light pt-50 pb-50">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-9">
                            <h3 class="mb-0 fs-32 split">¿Listo para mover su carga por Norteamérica?</h3>
                        </div>
                        <div class="col-lg-3 text-lg-end">
                            <a class="btn-main bg-white text-dark fx-slide btn-line wow fadeInRight" data-wow-delay=".2s" href="contact.php"><span>Contactar Ahora</span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include 'includes/footer.php'; ?>
    </div>

    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/custom-swiper-1.js"></script>

</body>
</html>