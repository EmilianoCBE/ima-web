<?php include 'includes/idioma.php'; ?>
<!DOCTYPE html>
<html lang="es">

<?php 
    $page_title = $lang['cob_header_title'] . " - IMA EXPRESS";
    include 'includes/head.php'; 
?>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <div id="de-loader"></div>
        <?php include 'includes/header.php'; ?>
        
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="text-light sm-mt-90 relative rounded-1 overflow-hidden m-3" data-bgimage="url(images/cobertura.jpeg) center 55%">
                <div class="container relative z-2">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-12">
                            <h1 class="split"><?php echo $lang['cob_header_title']; ?></h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php"><?php echo $lang['nav_home']; ?></a></li>
                                <li class="active"><?php echo $lang['cob_header_breadcrumb']; ?></li>
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
                            <div class="subtitle id-color"><?php echo $lang['cob_subtitle']; ?></div>
                            <h2 class="mb-3"><?php echo $lang['cob_title']; ?></h2>
                            <p class="lead">
                                <?php echo $lang['cob_desc']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft">
                            <div class="pe-lg-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/icons-color/estados-unidos.png" alt="USA" class="w-50px me-3 shadow-sm rounded">
                                    <h2 class="mb-0"><?php echo $lang['cob_usa_title']; ?></h2>
                                </div>
                                
                                <h4 class="mb-3 id-color"><?php echo $lang['cob_usa_subtitle']; ?></h4>
                                <p class="lead mb-4">
                                    <?php echo $lang['cob_usa_desc']; ?>
                                </p>
                                
                                <div class="row g-3 mb-4">
                                    <div class="col-12">
                                        <div class="p-3 bg-light rounded-1 border d-flex align-items-center" style="white-space: normal;">
                                            <div class="me-3 icon-circle-box bg-white shadow-sm flex-shrink-0">
                                                <i class="fa-solid fa-map fs-18 id-color"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-0"><?php echo $lang['cob_usa_li1_title']; ?></h5>
                                                <small class="text-muted"><?php echo $lang['cob_usa_li1_desc']; ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="p-3 bg-light rounded-1 border d-flex align-items-center" style="white-space: normal;">
                                            <div class="me-3 icon-circle-box bg-white shadow-sm flex-shrink-0">
                                                <i class="fa-solid fa-road fs-18 id-color"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-0"><?php echo $lang['cob_usa_li2_title']; ?></h5>
                                                <small class="text-muted"><?php echo $lang['cob_usa_li2_desc']; ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0 op-8 fs-14">
                                    <?php echo $lang['cob_usa_note']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 wow fadeInRight">
                            <div class="relative rounded-1 overflow-hidden shadow-lg bg-light border group" style="min-height: 350px;">
                                <img src="images/usa-map.png" class="w-100 h-100 object-cover group-hover-color transition-all" alt="Cobertura Total USA" 
                                    style="min-height: 350px; background-color: #e9ecef;">
                                
                                <div class="abs top-0 end-0 m-4">
                                    <div class="p-3 id-color rounded-circle shadow-lg text-center" 
                                        style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa; border: 1px solid #dee2e6;">
                                        <div style="line-height: 1.1;">
                                            <span class="d-block fw-bold fs-18">100%</span>
                                            <span class="fs-10">USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-dark text-light py-5 mx-3 rounded-1 relative overflow-hidden">
                <div class="abs w-100 h-100 top-0 start-0" style="background: url('images/transfronteriza.jpg') center/cover; opacity: 0.3;"></div>
                
                <div class="container relative z-2">
                    <div class="row align-items-center" style="white-space: normal;">
                        <div class="col-lg-2 text-center text-lg-start mb-4 mb-lg-0">
                            <i class="fa-solid fa-right-left fs-60 id-color"></i>
                        </div>
                        <div class="col-lg-7 text-center text-lg-start mb-4 mb-lg-0">
                            <h3 class="mb-1 text-white"><?php echo $lang['cob_border_title']; ?></h3>
                            <p class="mb-0 op-8 fs-18"><?php echo $lang['cob_border_desc']; ?></p>
                        </div>
                        <div class="col-lg-3 text-end text-lg-end">
                            <div class="px-4 py-2 border border-light rounded-1 d-inline-block text-end">
                                <span class="text-uppercase ls-1 fs-12 op-7 d-block mb-1"><?php echo $lang['cob_border_hub']; ?></span>
                                
                                <div class="fw-bold fs-16 lh-sm">
                                    Laredo, Texas<br>
                                    Nuevo Laredo, Tamps.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1 wow fadeInLeft">
                            <div class="relative rounded-1 overflow-hidden shadow-lg bg-light border group" style="min-height: 350px;">
                                <img src="images/mexico-map.png" class="w-100 h-100 object-cover group-hover-color transition-all" alt="Cobertura Total México" 
                                    style="min-height: 350px; background-color: #e9ecef;">
                                
                                <div class="abs top-0 start-0 m-4">
                                    <div class="p-3 id-color rounded-circle shadow-lg text-center" 
                                            style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa; border: 1px solid #dee2e6;">
                                        <div style="line-height: 1.1;">
                                            <span class="d-block fw-bold fs-18">32</span>
                                            <span class="fs-10"><?php echo $lang['cob_mex_badge']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-1 order-lg-2 wow fadeInRight">
                            <div class="ps-lg-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/icons-color/mexico.png" alt="México" class="w-50px me-3 shadow-sm rounded">
                                    <h2 class="mb-0"><?php echo $lang['cob_mex_title']; ?></h2>
                                </div>

                                <h4 class="mb-3 id-color"><?php echo $lang['cob_mex_subtitle']; ?></h4>
                                <p class="lead mb-4">
                                    <?php echo $lang['cob_mex_desc']; ?>
                                </p>

                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="p-3 bg-light rounded-1 border d-flex align-items-center" style="white-space: normal;">
                                            <div class="me-3 icon-circle-box bg-white text-success shadow-sm flex-shrink-0">
                                                <i class="fa-solid fa-check fs-18 id-color"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-0"><?php echo $lang['cob_mex_li1_title']; ?></h5>
                                                <small class="text-muted"><?php echo $lang['cob_mex_li1_desc']; ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-3 bg-light rounded-1 border d-flex align-items-center" style="white-space: normal;">
                                            <div class="me-3 icon-circle-box bg-white text-success shadow-sm flex-shrink-0">
                                                <i class="fa-solid fa-city fs-18 id-color"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-0"><?php echo $lang['cob_mex_li2_title']; ?></h5>
                                                <small class="text-muted"><?php echo $lang['cob_mex_li2_desc']; ?></small>
                                            </div>
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
                            <h3 class="mb-0 fs-32 split"><?php echo $lang['cob_cta_title']; ?></h3>
                            <p class="mb-0 mt-2 op-8"><?php echo $lang['cob_cta_desc']; ?></p>
                        </div>
                        <div class="col-lg-3 text-center text-lg-end">
                            <a class="btn-main bg-white text-dark fx-slide btn-line wow fadeInRight" data-wow-delay=".2s" href="contact.php"><span><?php echo $lang['cob_cta_btn']; ?></span></a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php include 'includes/footer.php'; ?>
    </div>

    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

    <style>
    @media (max-width: 720px) {
        .group[style*="min-height: 350px"] {
            min-height: 220px !important; 
            height: 220px !important;
        }
        .group[style*="min-height: 350px"] img {
            min-height: 220px !important;
            object-fit: contain !important;
            object-position: center !important;
        }
        .group[style*="min-height: 350px"] .abs {
            margin: 10px !important; 
            transform: scale(0.8);   
            transform-origin: top right; 
        }
        .col-lg-6.order-2 .abs {
            transform-origin: top left !important;
        }
    }
</style>
</body>
</html>