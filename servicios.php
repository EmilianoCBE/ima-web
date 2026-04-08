<?php include 'includes/idioma.php'; ?>
<!DOCTYPE html>
<html lang="es">

<?php 
    // Título dinámico para la pestaña del navegador
    $page_title = $lang['srv_page_header_title'] . " - IMA EXPRESS";
    include 'includes/head.php'; 
?>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <?php include 'includes/header.php'; ?>
        
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="text-light sm-mt-90 relative rounded-1 overflow-hidden m-3" data-bgimage="url(images/servicios.jpg) center"
            style="background-size: cover !important; image-rendering: -webkit-optimize-contrast;"
            >
                <div class="container relative z-2">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-12">
                            <h1 class="split"><?php echo $lang['srv_page_header_title']; ?></h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php"><?php echo $lang['nav_home']; ?></a></li>
                                <li class="active"><?php echo $lang['srv_page_header_breadcrumb']; ?></li>
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
                            <div class="subtitle id-color"><?php echo $lang['srv_page_subtitle']; ?></div>
                            <h2 class="mb-3"><?php echo $lang['srv_page_title']; ?></h2>
                            <p class="lead">
                                <?php echo $lang['srv_page_desc']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    
                    <div class="row g-5 align-items-center mb-5">
                        <div class="col-lg-6 wow fadeInLeft"> 
                            <div class="relative rounded-1 overflow-hidden shadow-lg border-light group">
                                <div class="abs w-100 h-100 bg-color op-1 z-1 group-hover-op-0 transition-all"></div>
                                <img src="images/servicios-1.jpeg" 
                                    class="w-100 h-100 object-cover hover-scale-1-1 transition-all" 
                                    alt="<?php echo strip_tags($lang['srv_page_s1_title']); ?>" 
                                    style="aspect-ratio: 1 / 1; object-fit: cover; object-position: 0% center;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInRight">
                            <div class="ps-lg-4">
                                <div class="d-flex align-items-center mb-3" style="white-space: normal;">
                                    <div class="p-3 bg-light rounded-circle me-3 text-primary flex-shrink-0">
                                        <i class="fa-solid fa-truck-moving fs-24"></i>
                                    </div>
                                    <h3 class="mb-0"><?php echo $lang['srv_page_s1_title']; ?></h3>
                                </div>
                                <p class="mb-4">
                                    <?php echo $lang['srv_page_s1_desc']; ?>
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2 border-bottom pb-2"><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s1_li1']; ?></li>
                                    <li class="mb-2 border-bottom pb-2"><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s1_li2']; ?></li>
                                    <li><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s1_li3']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row g-5 align-items-center mb-5">
                        <div class="col-lg-6 order-2 order-lg-1 wow fadeInLeft">
                            <div class="pe-lg-4">
                                <div class="d-flex align-items-center mb-3" style="white-space: normal;">
                                    <div class="p-3 bg-light rounded-circle me-3 text-primary flex-shrink-0">
                                        <i class="fa-solid fa-globe-americas fs-24"></i>
                                    </div>
                                    <h3 class="mb-0"><?php echo $lang['srv_page_s2_title']; ?></h3>
                                </div>
                                <p class="mb-4">
                                    <?php echo $lang['srv_page_s2_desc']; ?>
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2 border-bottom pb-2"><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s2_li1']; ?></li>
                                    <li class="mb-2 border-bottom pb-2"><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s2_li2']; ?></li>
                                    <li><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s2_li3']; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 wow fadeInRight">
                            <div class="relative rounded-1 overflow-hidden shadow-lg border-light group">
                                <div class="abs w-100 h-100 bg-color op-1 z-1 group-hover-op-0 transition-all"></div>
                                <img src="images/servicios-2_v2.jpg" class="w-100 object-cover hover-scale-1-1 transition-all" alt="<?php echo strip_tags($lang['srv_page_s2_title']); ?>" style="min-height: 300px;">
                            </div>
                        </div>
                    </div>

                    <div class="row g-5 align-items-center mb-5"> 
                        <div class="col-lg-6 wow fadeInLeft"> 
                            <div class="relative rounded-1 overflow-hidden shadow-lg border-light group">
                                <div class="abs w-100 h-100 bg-color op-1 z-1 group-hover-op-0 transition-all"></div>
                                <img src="images/servicios-3.jpg" 
                                    class="w-100 h-100 object-cover hover-scale-1-1 transition-all" 
                                    alt="<?php echo strip_tags($lang['srv_page_s3_title']); ?>" 
                                    style="aspect-ratio: 1 / 1; object-fit: cover; object-position: 50% center;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInRight">
                            <div class="ps-lg-4">
                                <div class="d-flex align-items-center mb-3" style="white-space: normal;">
                                    <div class="p-3 bg-light rounded-circle me-3 text-primary flex-shrink-0">
                                        <i class="fa-solid fa-headset fs-24"></i>
                                    </div>
                                    <h3 class="mb-0"><?php echo $lang['srv_page_s3_title']; ?></h3>
                                </div>
                                <p class="mb-4">
                                    <?php echo $lang['srv_page_s3_desc']; ?>
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2 border-bottom pb-2"><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s3_li1']; ?></li>
                                    <li class="mb-2 border-bottom pb-2"><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s3_li2']; ?></li>
                                    <li><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s3_li3']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1 wow fadeInLeft">
                            <div class="pe-lg-4">
                                <div class="d-flex align-items-center mb-3" style="white-space: normal;">
                                    <div class="p-3 bg-light rounded-circle me-3 text-primary flex-shrink-0">
                                        <i class="fa-solid fa-stopwatch fs-24"></i>
                                    </div>
                                    <h3 class="mb-0"><?php echo $lang['srv_page_s4_title']; ?></h3>
                                </div>
                                <p class="mb-4">
                                    <?php echo $lang['srv_page_s4_desc']; ?>
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2 border-bottom pb-2"><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s4_li1']; ?></li>
                                    <li class="mb-2 border-bottom pb-2"><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s4_li2']; ?></li>
                                    <li><i class="fa-solid fa-check id-color me-2"></i><?php echo $lang['srv_page_s4_li3']; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 wow fadeInRight">
                            <div class="relative rounded-1 overflow-hidden shadow-lg border-light group">
                                <div class="abs w-100 h-100 bg-color op-1 z-1 group-hover-op-0 transition-all"></div>
                                <img src="images/servicios-4.jpg" class="w-100 object-cover hover-scale-1-1 transition-all" alt="<?php echo strip_tags($lang['srv_page_s4_title']); ?>" style="min-height: 300px;">
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="bg-color text-light pt-50 pb-50">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-9">
                            <h3 class="mb-0 fs-32 split"><?php echo $lang['srv_page_cta_title']; ?></h3>
                        </div>
                        <div class="col-lg-3 text-lg-end">
                            <a class="btn-main bg-white text-dark fx-slide btn-line wow fadeInRight" data-wow-delay=".2s" href="contact.php"><span><?php echo $lang['srv_page_cta_btn']; ?></span></a>
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