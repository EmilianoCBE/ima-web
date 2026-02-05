<!DOCTYPE html>
<html lang="es">

<?php 
    $page_title = "Contacto - IMA Express";
    include 'includes/head.php'; 
?>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <div id="de-loader"></div>
        <?php include 'includes/header.php'; ?>
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="text-light sm-mt-90 relative rounded-1 overflow-hidden m-3" data-bgimage="url(images/contact-banner.jpg) center">
                <div class="container relative z-2">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-12">
                            <h1 class="split">Contacto</h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php">Inicio</a></li>
                                <li class="active">Contacto</li>
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
                        <div class="subtitle">Contáctanos ahora</div>
                        <h2 class="wow fadeInUp">Estamos aquí para responder tus dudas.</h2>

                        <p class="col-lg-8">¿Tienes una pregunta sobre tu carga, una cotización o simplemente quieres saludar? ¡Estamos listos para escucharte!</p>

                        <div class="spacer-single"></div>

                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="relative mb-4">
                                    <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-location-pin"></i>
                                    <div class="ms-80px">
                                        <h4 class="mb-0">Ubicación</h4>
                                        Laredo, Texas
                                    </div>
                                </div>

                                <div class="relative mb-4">
                                    <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-envelope"></i>
                                    <div class="ms-80px">
                                        <h4 class="mb-0">Envíanos un mensaje</h4>
                                        admin@imaexpressllc.com
                                    </div>
                                </div>

                                <div class="relative mb-4">
                                    <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-phone"></i>
                                    <div class="ms-80px">
                                        <h4 class="mb-0">Llámanos</h4>
                                        +1 (956) 771-9884<br>
                                        +1 (956) 757-2302
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="bg-light rounded-1 p-60 relative">
                            <form name="contactForm" id="contact_form" method="post" action="#">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <h3>Ponte en contacto</h3>
                                    <p>Llena el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>

                                    <div class="field-set">
                                        <input type="text" name="name" id="name" class="form-control mb-4" placeholder="Tu Nombre" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="email" id="email" class="form-control mb-4" placeholder="Tu Email" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="phone" id="phone" class="form-control mb-4" placeholder="Tu Teléfono" required>
                                    </div>

                                    <div class="field-set">
                                        <textarea name="message" id="message" class="form-control mb-4 h-100px" placeholder="Tu Mensaje" required></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div id='submit' class="mt-3">
                                <input type='submit' id='send_message' value='Enviar Mensaje' class="btn-main">
                            </div>

                            <div id="success_message" class='success'>
                                Tu mensaje ha sido enviado exitosamente. Actualiza la página si deseas enviar otro.
                            </div>
                            <div id="error_message" class='error'>
                                Lo sentimos, hubo un error al enviar el formulario.
                            </div>
                        </form>
                        </div>
                    </div>
                  </div>
                </div>
            </section>

            <section class="bg-color text-light pt-50 pb-50">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-9">
                            <h3 class="mb-0 fs-32 split">¿Listo para mover tu carga por el mundo?</h3>
                        </div>
                        <div class="col-lg-3 text-lg-end">
                            <a class="btn-main fx-slide btn-line wow fadeInRight" data-wow-delay=".2s" href="#contact_form"><span>Cotizar Ahora</span></a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php include 'includes/footer.php'; ?>
        </div>

    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/validation-contact.js"></script> 

</body>
</html>