<header class="header-static transparent mt-lg-4 pt-lg-2">
    <style>
        /* --- DESKTOP (Pantallas Grandes) --- */
        @media (min-width: 992px) {
            .logo-mobile { display: none !important; }
            .logo-main { display: block !important; }
            #btn-mobile-custom { display: none !important; } /* Ocultar hamburguesa custom */
        }

        /* --- MOBILE (Celulares y Tablets) --- */
        @media (max-width: 991px) {
            /* Header Sólido Negro */
            header.header-static.transparent {
                position: relative !important;
                background-color: #111 !important;
                margin-top: 0 !important;
                padding: 15px 0 !important;
                height: auto !important;
            }

            /* Ocultar elementos originales que estorben */
            #btn-extra { display: none !important; } /* Ocultamos el botón original del template */

            /* Logo Mobile */
            .logo-main, .logo-scroll { display: none !important; }
            .logo-mobile { 
                display: block !important;
                max-height: 40px !important; 
                width: auto !important;
            }

            /* El Menú Desplegable */
            #mainmenu {
                display: none; /* Oculto por defecto */
                width: 100%;
                margin: 20px 0 0 0;
                padding: 0;
                list-style: none;
                background: #111;
                border-top: 1px solid #333;
                float: none !important;
            }

            #mainmenu li {
                display: block;
                width: 100%;
                border-bottom: 1px solid #222;
                margin: 0 !important;
            }

            #mainmenu li a {
                display: block;
                padding: 15px 0;
                color: #fff !important;
                text-align: center;
                font-size: 16px;
                text-decoration: none;
            }
            
            /* Submenús en móvil (Opcional: mostrarlos siempre o simplificar) */
            #mainmenu ul {
                display: block !important; /* Mostrar submenús abiertos por defecto en móvil para facilitar */
                position: static !important;
                background: #1a1a1a;
                box-shadow: none !important;
                width: 100% !important;
                padding: 0;
                opacity: 1 !important;
                visibility: visible !important;
                border: none;
            }
            
            #mainmenu ul li {
                border-bottom: 1px solid #333;
            }
            
            #mainmenu ul li a {
                padding: 10px 0;
                font-size: 14px;
                opacity: 0.8;
            }

            /* NUESTRO BOTÓN HAMBURGUESA CUSTOM */
            #btn-mobile-custom {
                display: block !important;
                cursor: pointer;
                width: 30px;
                height: 25px;
                position: relative;
                z-index: 9999;
                background: transparent;
                border: none;
            }

            #btn-mobile-custom span {
                display: block;
                width: 100%;
                height: 2px;
                background-color: #fff;
                margin-bottom: 6px;
                border-radius: 2px;
                transition: all 0.3s;
            }
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10 justify-content-between align-items-center">
                    
                    <div class="de-flex-col">
                        <div id="logo">
                            <a href="index.php">
                                <img class="logo-main" src="images/IMA_logo_white.png" style="max-height: 85px; width: auto;" alt="IMA Express">
                                <img class="logo-scroll" src="images/IMA_logo_white.png" style="max-height: 50px; width: auto;" alt="">
                                <img class="logo-mobile" src="images/IMA_logo_white.png" alt="IMA Express">
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
                        <button id="btn-mobile-custom" onclick="toggleCustomMenu()">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleCustomMenu() {
            var menu = document.getElementById("mainmenu");
            
            // Usamos una lógica simple y forzosa
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        }
    </script>
</header>