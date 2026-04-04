<?php include 'includes/idioma.php'; ?>
<!DOCTYPE html>
<html lang="es">

<?php 
    // Usamos la variable para que el título de la pestaña también se traduzca
    $page_title = $lang['sec_header_title'] . " - IMA EXPRESS";
    include 'includes/head.php'; 
?>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <div id="de-loader"></div>
        <?php include 'includes/header.php'; ?>
        
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="text-light sm-mt-90 relative rounded-1 overflow-hidden m-3" data-bgimage="url(images/sectores.jpeg) center">
                <div class="container relative z-2">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-12">
                            <h1 class="split"><?php echo $lang['sec_header_title']; ?></h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php"><?php echo $lang['nav_home']; ?></a></li>
                                <li class="active"><?php echo $lang['sec_header_title']; ?></li>
                            </ul>   
                        </div>
                    </div>
                </div>
                <div class="gradient-edge-bottom color op-7 h-80"></div>
                <div class="sw-overlay op-7"></div>
            </section>

            <section class="pb-0">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8 wow fadeInUp">
                            <div class="subtitle id-color"><?php echo $lang['sec_subtitle']; ?></div>
                            <h2 class="mb-3"><?php echo $lang['sec_title']; ?></h2>
                            <p class="lead">
                                <?php echo $lang['sec_desc']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0s">
                            <div class="rounded-1 overflow-hidden shadow-sm hover-shadow-lg transition-all h-100 bg-white border-light group">
                                <div class="row g-0 h-100">
                                    <div class="col-md-5 relative overflow-hidden h-min-200">
                                        <div class="abs w-100 h-100 bg-color op-1 z-2"></div>
                                        <img src="images/sector-1.jpg" class="w-100 h-100 object-cover hover-scale-1-1 transition-all" alt="Industria">
                                    </div>
                                    <div class="col-md-7 d-flex align-items-center" style="white-space: normal;">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fa-solid fa-industry fs-30 id-color me-3"></i>
                                                <h4 class="mb-0"><?php echo $lang['sec_1_title']; ?></h4>
                                            </div>
                                            <p class="fs-14 text-muted mb-3"><?php echo $lang['sec_1_desc']; ?></p>
                                            <ul class="list-unstyled fw-bold text-dark op-8 fs-13">
                                                <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_1_li1']; ?></li>
                                                <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_1_li2']; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".1s">
                            <div class="rounded-1 overflow-hidden shadow-sm hover-shadow-lg transition-all h-100 bg-white border-light group">
                                <div class="row g-0 h-100">
                                    <div class="col-md-5 relative overflow-hidden h-min-200 order-md-2"> 
                                        <div class="abs w-100 h-100 bg-color op-1 z-2"></div>
                                        <img src="images/sector-2.jpg" class="w-100 h-100 object-cover hover-scale-1-1 transition-all" alt="Agroalimentario">
                                    </div>
                                    <div class="col-md-7 d-flex align-items-center order-md-1" style="white-space: normal;">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fa-solid fa-wheat-awn fs-30 id-color me-3"></i>
                                                <h4 class="mb-0"><?php echo $lang['sec_2_title']; ?></h4>
                                            </div>
                                            <p class="fs-14 text-muted mb-3"><?php echo $lang['sec_2_desc']; ?></p>
                                            <ul class="list-unstyled fw-bold text-dark op-8 fs-13">
                                                <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_2_li1']; ?></li>
                                                <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_2_li2']; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="rounded-1 overflow-hidden shadow-sm hover-shadow-lg transition-all h-100 bg-white border-light group">
                                <div class="relative overflow-hidden" style="height: 200px;">
                                    <div class="abs w-100 h-100 bg-color op-1 z-2"></div>
                                    <img src="images/sector-3.jpg" class="w-100 h-100 object-cover hover-scale-1-1 transition-all" alt="Construcción">
                                </div>
                                <div class="p-4" style="white-space: normal;">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-helmet-safety fs-24 id-color me-3"></i>
                                        <h4 class="mb-0 fs-20"><?php echo $lang['sec_3_title']; ?></h4>
                                    </div>
                                    <p class="fs-14 text-muted mb-3"><?php echo $lang['sec_3_desc']; ?></p>
                                    <ul class="list-unstyled fw-bold text-dark op-8 fs-13 mb-0">
                                        <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_3_li1']; ?></li>
                                        <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_3_li2']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="rounded-1 overflow-hidden shadow-sm hover-shadow-lg transition-all h-100 bg-white border-light group">
                                <div class="relative overflow-hidden" style="height: 200px;">
                                    <div class="abs w-100 h-100 bg-color op-1 z-2"></div>
                                    <img src="images/sector-4.jpg" class="w-100 h-100 object-cover hover-scale-1-1 transition-all" alt="Comercio">
                                </div>
                                <div class="p-4" style="white-space: normal;">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-cart-shopping fs-24 id-color me-3"></i>
                                        <h4 class="mb-0 fs-20"><?php echo $lang['sec_4_title']; ?></h4>
                                    </div>
                                    <p class="fs-14 text-muted mb-3"><?php echo $lang['sec_4_desc']; ?></p>
                                    <ul class="list-unstyled fw-bold text-dark op-8 fs-13 mb-0">
                                        <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_4_li1']; ?></li>
                                        <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_4_li2']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="rounded-1 overflow-hidden shadow-sm hover-shadow-lg transition-all h-100 bg-white border-light group">
                                <div class="relative overflow-hidden" style="height: 200px;">
                                    <div class="abs w-100 h-100 bg-color op-1 z-2"></div>
                                    <img src="images/sector-5.jpg" class="w-100 h-100 object-cover hover-scale-1-1 transition-all" alt="Salud">
                                </div>
                                <div class="p-4" style="white-space: normal;">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-heart-pulse fs-24 id-color me-3"></i>
                                        <h4 class="mb-0 fs-20"><?php echo $lang['sec_5_title']; ?></h4>
                                    </div>
                                    <p class="fs-14 text-muted mb-3"><?php echo $lang['sec_5_desc']; ?></p>
                                    <ul class="list-unstyled fw-bold text-dark op-8 fs-13 mb-0">
                                        <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_5_li1']; ?></li>
                                        <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_5_li2']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="rounded-1 overflow-hidden shadow-sm hover-shadow-lg transition-all h-100 bg-white border-light group">
                                <div class="row g-0 h-100">
                                    <div class="col-md-5 relative overflow-hidden h-min-200">
                                        <div class="abs w-100 h-100 bg-color op-1 z-2"></div>
                                        <img src="images/sector-6.jpg" 
                                            class="w-100 h-100 object-cover hover-scale-1-1 transition-all" 
                                            alt="Medio Ambiente"
                                            style="object-fit: cover; object-position: center;">
                                    </div>
                                    <div class="col-md-7 d-flex align-items-center" style="white-space: normal;">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fa-solid fa-recycle fs-30 id-color me-3"></i>
                                                <h4 class="mb-0"><?php echo $lang['sec_6_title']; ?></h4>
                                            </div>
                                            <p class="fs-14 text-muted mb-3"><?php echo $lang['sec_6_desc']; ?></p>
                                            <ul class="list-unstyled fw-bold text-dark op-8 fs-13">
                                                <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_6_li1']; ?></li>
                                                <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_6_li2']; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="rounded-1 overflow-hidden shadow-sm hover-shadow-lg transition-all h-100 bg-white border-light group">
                                <div class="row g-0 h-100">
                                    <div class="col-md-5 relative overflow-hidden h-min-200 order-md-2"> 
                                        <div class="abs w-100 h-100 bg-color op-1 z-2"></div>
                                        <img src="images/sector-7.jpg" class="w-100 h-100 object-cover hover-scale-1-1 transition-all" alt="Logística Especializada">
                                    </div>
                                    <div class="col-md-7 d-flex align-items-center order-md-1" style="white-space: normal;">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fa-solid fa-boxes-packing fs-30 id-color me-3"></i>
                                                <h4 class="mb-0"><?php echo $lang['sec_7_title']; ?></h4>
                                            </div>
                                            <p class="fs-14 text-muted mb-3"><?php echo $lang['sec_7_desc']; ?></p>
                                            <ul class="list-unstyled fw-bold text-dark op-8 fs-13">
                                                <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_7_li1']; ?></li>
                                                <li><i class="fa-solid fa-check text-success me-2"></i><?php echo $lang['sec_7_li2']; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="bg-color text-light pt-50 pb-50">
                <div class="container">
                    <div class="row g-4 align-items-center" style="white-space: normal;">
                        <div class="col-md-9 text-center text-md-start">
                            <h3 class="mb-0 fs-32 split"><?php echo $lang['sec_cta_title']; ?></h3>
                            <p class="mb-0 mt-2 op-8"><?php echo $lang['sec_cta_desc']; ?></p>
                        </div>
                        <div class="col-lg-3 text-center text-lg-end">
                            <a class="btn-main bg-white text-dark fx-slide btn-line wow fadeInRight" data-wow-delay=".2s" href="contact.php"><span><?php echo $lang['sec_cta_btn']; ?></span></a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php include 'includes/footer.php'; ?>
    </div>

    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>
</html>