<header class="header-static transparent mt-lg-4 pt-lg-2">
    <style>
        /* --- ESTILOS DESKTOP (Pantallas Grandes) --- */
        @media (min-width: 992px) {
            .logo-mobile { display: none !important; }
            .logo-main { display: block !important; }
            #btn-extra { display: none !important; } /* Ocultar hamburguesa en desktop */
        }

        /* --- ESTILOS MOBILE (Celulares y Tablets) --- */
        @media (max-width: 991px) {
            /* 1. Header Sólido y Seguro */
            header.header-static.transparent {
                position: relative !important; /* Deja de flotar para no tapar nada */
                background-color: #111 !important; /* Fondo negro elegante */
                margin-top: 0 !important;
                padding: 15px 0 !important;
                height: auto !important;
            }

            /* 2. Logo Controlado */
            .logo-main, .logo-scroll { display: none !important; }
            .logo-mobile { 
                display: block !important;
                max-height: 40px !important; 
                width: auto !important;
            }

            /* 3. Menú (Lista de links) */
            #mainmenu {
                display: none; /* Oculto por defecto */
                width: 100%;
                float: none;
                margin: 20px 0 0 0;
                padding: 0;
                list-style: none;
                background: #111; /* Fondo oscuro para el dropdown */
                border-top: 1px solid #333;
            }

            #mainmenu li {
                display: block;
                width: 100%;
                border-bottom: 1px solid #222;
            }

            #mainmenu li a {
                display: block;
                padding: 12px 0;
                color: #fff !important;
                text-align: center; /* Centrado para estilo app */
            }

            /* 4. Botón Hamburguesa Visible y Clickable */
            #btn-extra {
                display: block !important;
                cursor: pointer;
                width: 28px;
                height: 20px;
                position: relative;
                z-index: 9999; /* ¡Muy importante! Encima de todo */
            }

            #btn-extra span {
                display: block;
                width: 100%;
                height: 2px;
                background-color: #fff;
                margin-bottom: 6px;
                transition: all 0.3s;
            }
            
            /* Separación extrema para evitar toques fantasma */
            .de-flex {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    
                    <div class="de-flex-col">
                        <div id="logo">
                            <a href="index.php">
                                <img class="logo-main" 
                                     src="images/IMA_logo_white.png" 
                                     style="max-height: 85px; width: auto;" 
                                     alt="IMA Express">
                                
                                <img class="logo-scroll" 
                                     src="images/IMA_logo_white.png" 
                                     style="max-height: 50px; width: auto;" 
                                     alt="">
                                
                                <img class="logo-mobile" 
                                     src="images/IMA_logo_white.png" 
                                     alt="IMA Express">
                            </a>
                        </div>
                        </div>
                    
                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="index.php">Inicio</a></li>
                            <li><a class="menu-item" href="sectores.php">Sectores</a></li>
                            <li>
                                <a class="menu-item" href="#">Quiénes somos</a>
                                <ul>
                                    <li><a href="servicios.php">Servicios</a></li>
                                    <li><a href="about.php">Nuestra historia</a></li>
                                    <li><a href="cobertura.php">Cobertura</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="contact.php">Contacto</a></li>
                        </ul>
                    </div>
                    
                    <div class="de-flex-col">
                        <div id="btn-extra" onclick="toggleMobileMenu()">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            var menu = document.getElementById("mainmenu");
            var btn = document.getElementById("btn-extra");
            
            // Lógica simple: Si está oculto o no tiene estilo display, muéstralo.
            if (menu.style.display === "block") {
                menu.style.display = "none";
                // Opcional: Volver a estado original el icono
                btn.style.opacity = "1"; 
            } else {
                menu.style.display = "block";
                // Opcional: Efecto visual de "activo"
                btn.style.opacity = "0.7";
            }
        }
    </script>
</header>