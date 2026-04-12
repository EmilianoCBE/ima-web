<?php include 'includes/idioma.php'; ?>
<!DOCTYPE html>
<html lang="es">

<?php 
    $page_title = $lang['cnt_header_title'] . " - IMA EXPRESS";
    include 'includes/head.php'; 
?>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <?php include 'includes/header.php'; ?>
        
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="text-light sm-mt-90 relative rounded-1 overflow-hidden m-3" data-bgimage="url(images/contacto.jpg) center 30%">
                <div class="container relative z-2">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-12">
                            <h1 class="split"><?php echo $lang['cnt_header_title']; ?></h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php"><?php echo $lang['nav_home']; ?></a></li>
                                <li class="active"><?php echo $lang['cnt_header_breadcrumb']; ?></li>
                            </ul>   
                        </div>
                    </div>
                </div>
                <div class="gradient-edge-bottom color op-7 h-80"></div>
                <div class="sw-overlay op-7"></div>
            </section>

            <section class="relative">
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    
                    <div class="col-lg-6">
                        <div class="subtitle"><?php echo $lang['cnt_subtitle']; ?></div>
                        <h2 class="wow fadeInUp"><?php echo $lang['cnt_title']; ?></h2>

                        <p class="col-lg-8"><?php echo $lang['cnt_desc']; ?></p>

                        <div class="spacer-single"></div>

                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="relative mb-4">
                                    <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-location-pin"></i>
                                    <div class="ms-80px">
                                        <h4 class="mb-0"><?php echo $lang['cnt_loc_title']; ?></h4>
                                        Laredo, Texas
                                    </div>
                                </div>

                                <div class="relative mb-4">
                                    <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-envelope"></i>
                                    <div class="ms-80px">
                                        <h4 class="mb-0"><?php echo $lang['cnt_msg_title']; ?></h4>
                                        admin@imaexpressllc.com
                                    </div>
                                </div>

                                <div class="relative mb-4">
                                    <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-phone"></i>
                                    <div class="ms-80px">
                                        <h4 class="mb-0"><?php echo $lang['cnt_call_title']; ?></h4>
                                        +1 (956) 771-9884<br>
                                        +1 (956) 757-2302
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="bg-light rounded-1 p-60 relative">
                            <form name="contactForm" id="mi_formulario_real" method="post" action="enviar_correo.php">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <h3><?php echo $lang['cnt_form_title']; ?></h3>
                                    <p><?php echo $lang['cnt_form_desc']; ?></p>

                                    <div class="field-set">
                                        <input type="text" name="name" id="name" class="form-control mb-4" placeholder="<?php echo $lang['cnt_ph_name']; ?>" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="email" name="email" id="email" class="form-control mb-4" placeholder="<?php echo $lang['cnt_ph_email']; ?>" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="phone" id="phone" class="form-control mb-4" placeholder="<?php echo $lang['cnt_ph_phone']; ?>" required>
                                    </div>

                                    <div class="field-set">
                                        <textarea name="message" id="message" class="form-control mb-4 h-100px" placeholder="<?php echo $lang['cnt_ph_msg']; ?>" required></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div id='submit' class="mt-3">
                                <input type='submit' id='btn_enviar_php' value='<?php echo $lang['cnt_btn_send']; ?>' class="btn-main border-0">
                            </div>

                            <?php if(isset($_GET['estado']) && $_GET['estado'] == 'exito'): ?>
                                <div class="alert alert-success mt-4 p-3 rounded-1" style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb;">
                                    <?php echo $lang['cnt_alert_success']; ?>
                                </div>
                            <?php endif; ?>

                            <?php if(isset($_GET['estado']) && $_GET['estado'] == 'error'): ?>
                                <div class="alert alert-danger mt-4 p-3 rounded-1" style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb;">
                                    <?php echo $lang['cnt_alert_error']; ?>
                                </div>
                            <?php endif; ?>
                        </form>
                        </div>
                    </div>
                  </div>
                </div>
            </section>

            <section class="bg-color text-light pt-50 pb-50">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-9 text-center text-md-start">
                            <h3 class="mb-0 fs-32 split"><?php echo $lang['cnt_cta_title']; ?></h3>
                        </div>
                        <div class="col-lg-3 text-center text-lg-end mt-4 mt-lg-0">
                            <a class="btn-main bg-white text-dark fx-slide btn-line wow fadeInRight" data-wow-delay=".2s" href="contact.php"><span><?php echo $lang['cnt_cta_btn']; ?></span></a>
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