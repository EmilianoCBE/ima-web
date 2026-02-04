<header class="header-desktop header-static transparent mt-lg-4 pt-lg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10 justify-content-between">
                    
                    <div class="de-flex-col">
                        <div id="logo">
                            <a href="index.php">
                                <img class="logo-main" src="images/IMA_logo_white.png" style="max-height: 85px; width: auto;" alt="IMA Express">
                                <img class="logo-scroll" src="images/IMA_logo_white.png" style="max-height: 50px; width: auto;" alt="">
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
                    <div class="de-flex-col"></div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="header-mobile-bar">
    <div class="container h-100">
        <div class="d-flex justify-content-between align-items-center h-100">
            <a href="index.php" class="mobile-logo-link">
                <img src="images/IMA_logo_white.png" alt="IMA Express" style="max-height: 40px;">
            </a>

            <button class="mobile-burger-btn" onclick="toggleFullScreenMenu()">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</div>

<div id="fullscreen-menu-overlay" class="fullscreen-menu">
    <div class="menu-inner">
        <button class="close-menu-btn" onclick="toggleFullScreenMenu()">
            <i class="fa fa-times"></i>
        </button>

        <div class="menu-logo-container">
            <img src="images/IMA_logo_white.png" alt="IMA Logo" style="max-width: 150px;">
        </div>

        <nav class="mobile-nav-links">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sectores.php">Sectores</a></li>
                
                <li class="has-children">
                    <span>Quiénes Somos</span>
                    <ul class="sub-nav">
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="about.php">Nuestra Historia</a></li>
                        <li><a href="cobertura.php">Cobertura</a></li>
                    </ul>
                </li>
                
                <li><a href="contact.php" class="btn-highlight">Contacto</a></li>
            </ul>
        </nav>
        
        <div class="menu-footer-info">
            <p>Laredo, TX | México</p>
        </div>
    </div>
</div>


<style>
    /* 1. LOGICA DE VISUALIZACIÓN */
    .header-desktop { display: none !important; }
    .header-mobile-bar { display: block !important; }
    
    @media (min-width: 992px) {
        .header-desktop { display: block !important; }
        .header-mobile-bar { display: none !important; }
        .fullscreen-menu { display: none !important; } /* Aseguramos que no moleste en PC */
    }

    /* 2. BARRA MÓVIL SUPERIOR (Siempre visible) */
    .header-mobile-bar {
        background-color: #111;
        height: 70px;
        position: relative; /* OJO: relative para que empuje contenido */
        z-index: 999;
        border-bottom: 1px solid #222;
    }

    .mobile-burger-btn {
        background: transparent;
        border: none;
        width: 30px;
        height: 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 5px 0;
        cursor: pointer;
    }

    .mobile-burger-btn span {
        display: block;
        width: 100%;
        height: 2px;
        background: #fff;
        border-radius: 2px;
    }

    /* 3. MENÚ PANTALLA COMPLETA (El Overlay) */
    .fullscreen-menu {
        position: fixed; /* FIJO: Rompe cualquier restricción del template */
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: #000; /* Fondo negro sólido */
        z-index: 999999; /* Z-Index extremo para estar encima de todo */
        
        /* Animación de entrada: Viene de arriba */
        transform: translateY(-100%); 
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s cubic-bezier(0.77, 0, 0.175, 1);
        
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow-y: auto; /* Permite scroll si el celular es pequeño */
    }

    /* Estado ABIERTO */
    .fullscreen-menu.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    /* Contenido interno */
    .menu-inner {
        width: 100%;
        text-align: center;
        padding: 20px;
    }

    .close-menu-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        background: none;
        border: none;
        color: #fff;
        font-size: 30px;
        cursor: pointer;
    }

    .menu-logo-container {
        margin-bottom: 40px;
    }

    .mobile-nav-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mobile-nav-links ul li {
        margin-bottom: 15px;
    }

    .mobile-nav-links ul li a {
        color: #fff;
        font-size: 22px;
        text-decoration: none;
        font-weight: 600;
        display: block;
        transition: color 0.3s;
    }
    
    .mobile-nav-links ul li a:hover {
        color: #FFC107;
    }

    /* Estilos del Submenú visual */
    .has-children span {
        display: block;
        font-size: 14px;
        color: #666;
        text-transform: uppercase;
        margin-bottom: 10px;
        margin-top: 20px;
        letter-spacing: 2px;
    }

    .sub-nav {
        background: #111;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .sub-nav li {
        margin-bottom: 10px !important;
        border-bottom: 1px solid #222;
        padding-bottom: 10px;
    }
    
    .sub-nav li:last-child {
        border-bottom: none;
        margin-bottom: 0 !important;
        padding-bottom: 0;
    }

    .sub-nav li a {
        font-size: 16px !important;
        font-weight: normal !important;
        color: #ccc !important;
    }

    .btn-highlight {
        color: #FFC107 !important;
        border: 2px solid #FFC107;
        padding: 10px 30px !important;
        display: inline-block !important;
        border-radius: 5px;
        margin-top: 20px;
    }
    
    .menu-footer-info {
        margin-top: 40px;
        color: #555;
        font-size: 12px;
    }
</style>

<script>
    function toggleFullScreenMenu() {
        var menu = document.getElementById("fullscreen-menu-overlay");
        // Simple toggle de clase 'active'
        menu.classList.toggle("active");
        
        // Bloquear scroll del body cuando el menú está abierto para mejor experiencia
        if(menu.classList.contains("active")) {
            document.body.style.overflow = "hidden";
        } else {
            document.body.style.overflow = "auto";
        }
    }
</script>