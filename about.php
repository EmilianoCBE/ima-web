<?php include 'includes/idioma.php'; ?>
<!DOCTYPE html>
<html lang="es">

<?php 
    $page_title = $lang['abt_header_title'] . " - IMA EXPRESS";
    include 'includes/head.php'; 
?>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <?php include 'includes/header.php'; ?>
        
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="text-light sm-mt-90 relative rounded-1 overflow-hidden m-3" data-bgimage="url(images/story.jpeg) center">
                <div class="container relative z-2">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-12">
                            <h1 class="split"><?php echo $lang['abt_header_title']; ?></h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php"><?php echo $lang['nav_home']; ?></a></li>
                                <li class="active"><?php echo $lang['abt_header_breadcrumb']; ?></li>
                            </ul>   
                        </div>
                    </div>
                </div>
                <div class="gradient-edge-bottom color op-7 h-80"></div>
                <div class="sw-overlay op-7"></div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6 wow scaleIn">
                            <div class="relative">
                                <div class="w-100 pe-5 pb-5">
                                    <img src="images/story.jpg" class="w-100 rounded-1 shadow-lg" alt="Logística IMA EXPRESS">
                                </div>
                                <div class="abs end-0 bottom-0 z-2 mb-5 me-5 p-4 bg-white text-light rounded-1 text-center shadow-lg wow fadeInUp" data-wow-delay=".2s">
                                    <h4 class="mb-0 id-color"><?php echo $lang['abt_badge_year']; ?></h4>
                                    <span class="fs-14 id-color"><?php echo $lang['abt_badge_text']; ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="ps-lg-4">
                                <div class="subtitle id-color wow fadeInUp"><?php echo $lang['abt_subtitle']; ?></div>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s"><?php echo $lang['abt_title']; ?></h2>
                                <p class="lead wow fadeInUp" data-wow-delay=".4s">
                                    <?php echo $lang['abt_p1']; ?>
                                </p>
                                <p class="wow fadeInUp" data-wow-delay=".6s">
                                    <?php echo $lang['abt_p2']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="rounded-1 mx-3 overflow-hidden" style="background-color: #3C48E1;">
                <div class="container">
                    <div class="row g-4">
                        
                        <div class="col-lg-6 wow fadeInLeft">
                            <div class="p-5 bg-white rounded-1 h-100 border-hover shadow-sm-hover transition-all">
                                
                                <div class="d-flex align-items-center mb-4">
                                    <div class="p-3 bg-light rounded-circle me-3 flex-shrink-0">
                                        <i class="fa-solid fa-bullseye fs-32 id-color"></i>
                                    </div>
                                    <h3 class="mb-0 text-dark"><?php echo $lang['abt_mission_title']; ?></h3>
                                </div>
                                
                                <p class="mb-0 text-muted fs-18">
                                    <?php echo $lang['abt_mission_desc']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 wow fadeInRight" data-wow-delay=".2s">
                            <div class="p-5 bg-white rounded-1 h-100 border-hover shadow-sm-hover transition-all">
                                
                                <div class="d-flex align-items-center mb-4">
                                    <div class="p-3 bg-light rounded-circle me-3 flex-shrink-0">
                                        <i class="fa-solid fa-eye fs-32 id-color"></i>
                                    </div>
                                    <h3 class="mb-0 text-dark"><?php echo $lang['abt_vision_title']; ?></h3>
                                </div>
                                
                                <p class="mb-0 text-muted fs-18">
                                    <?php echo $lang['abt_vision_desc']; ?>
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-lg-8">
                            <div class="subtitle id-color wow fadeInUp"><?php echo $lang['abt_srv_subtitle']; ?></div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><?php echo $lang['abt_srv_title']; ?></h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                <?php echo $lang['abt_srv_desc']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <div class="text-center p-4 rounded-1 hover-scale-effect">
                                <div class="p-3 bg-light rounded-circle d-inline-block mb-3">
                                    <i class="fa-solid fa-location-crosshairs fs-36 id-color"></i>
                                </div>
                                <h4><?php echo $lang['abt_srv_1_title']; ?></h4>
                                <p><?php echo $lang['abt_srv_1_desc']; ?></p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="text-center p-4 rounded-1 hover-scale-effect">
                                <div class="p-3 bg-light rounded-circle d-inline-block mb-3">
                                    <i class="fa-solid fa-route fs-36 id-color"></i>
                                </div>
                                <h4><?php echo $lang['abt_srv_2_title']; ?></h4>
                                <p><?php echo $lang['abt_srv_2_desc']; ?></p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="text-center p-4 rounded-1 hover-scale-effect">
                                <div class="p-3 bg-light rounded-circle d-inline-block mb-3">
                                    <i class="fa-solid fa-comments fs-36 id-color"></i>
                                </div>
                                <h4><?php echo $lang['abt_srv_3_title']; ?></h4>
                                <p><?php echo $lang['abt_srv_3_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-dark text-light mx-3 rounded-1 overflow-hidden relative mb-5">
                <div class="abs w-100 h-100 top-0 start-0" style="background: url('images/partnership.jpg') center/cover; opacity: 0.3;"></div>
                
                <div class="container relative z-2">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="subtitle id-color wow fadeInUp"><?php echo $lang['abt_prom_subtitle']; ?></div>
                            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".2s"><?php echo $lang['abt_prom_title']; ?></h2>
                            <p class="lead mb-4 wow fadeInUp" data-wow-delay=".4s">
                                <?php echo $lang['abt_prom_desc']; ?>
                            </p>
                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                <i class="fa-solid fa-check-circle id-color me-2"></i> <?php echo $lang['abt_prom_li1']; ?><br>
                                <i class="fa-solid fa-check-circle id-color me-2"></i> <?php echo $lang['abt_prom_li2']; ?>
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0 wow fadeInRight" data-wow-delay=".4s">
                            <a href="contact.php" class="btn-main btn-line"><span><?php echo $lang['abt_prom_btn']; ?></span></a>
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

    <style>
    @media (max-width: 991px) {
        #subheader h1 {
            font-size: 32px !important; 
            line-height: 1.2 !important;
        }
        .col-lg-6 .relative .w-100.pe-5.pb-5 {
            padding-right: 0 !important;
            padding-bottom: 0 !important;
        }
        .col-lg-6 .relative .abs {
            margin-right: 0 !important;
            margin-bottom: 0 !important;
            right: 15px !important;
            bottom: 15px !important;
            padding: 12px 15px !important;
        }
        .col-lg-6 .relative .abs h2 {
            font-size: 20px !important;
            line-height: 1.1 !important;
            margin-bottom: 3px !important;
        }
        .col-lg-6 .relative .abs small {
            font-size: 11px !important;
            display: block; 
        }
    }
</style>
</body>
</html>