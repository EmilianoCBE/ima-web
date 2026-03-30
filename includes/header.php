<header class="header-desktop header-static transparent mt-lg-4 pt-lg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10 justify-content-between">
                    
                    <div class="de-flex-col">
                        <div id="logo">
                            <a href="index.php">
                                <img class="logo-main" src="images/IMA_logo_white.png" style="max-height: 85px; width: auto;" alt="IMA EXPRESS">
                                <img class="logo-scroll" src="images/IMA_logo_white.png" style="max-height: 50px; width: auto;" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="index.php"><?php echo $lang['nav_home']; ?></a></li>
                            <li><a class="menu-item" href="sectores.php"><?php echo $lang['nav_sectors']; ?></a></li>
                            <li><a class="menu-item" href="cobertura.php"><?php echo $lang['nav_coverage']; ?></a></li>
                            <li>
                                <a class="menu-item" href="#"><?php echo $lang['nav_about']; ?></a>
                                <ul>
                                    <li><a href="servicios.php"><?php echo $lang['nav_services']; ?></a></li>
                                    <li><a href="about.php"><?php echo $lang['nav_history']; ?></a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="contact.php"><?php echo $lang['nav_contact']; ?></a></li>
                        </ul>
                    </div>
                    
                    <div class="de-flex-col d-flex align-items-center">
                        <div class="lang-selector-desktop" style="font-weight: 600; font-size: 14px;">
                            <a href="?lang=en" style="padding: 5px; color: #fff; text-decoration: none; opacity: <?php echo $active_lang == 'en' ? '1' : '0.5'; ?>;">EN</a>
                            <span style="color: #fff; opacity: 0.5;">|</span>
                            <a href="?lang=es" style="padding: 5px; color: #fff; text-decoration: none; opacity: <?php echo $active_lang == 'es' ? '1' : '0.5'; ?>;">ES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="header-mobile-bar">
    <div class="container h-100">
        <div class="d-flex justify-content-between align-items-center h-100">
            <a href="index.php" class="mobile-logo-link">
                <img src="images/IMA_logo.png" alt="IMA EXPRESS" style="max-height: 40px;">
            </a>

            <div class="d-flex align-items-center">
                <div class="lang-selector-mobile me-3" style="font-weight: 600; font-size: 14px;">
                    <a href="?lang=en" style="color: var(--primary-color, #3C48E1); text-decoration: none; opacity: <?php echo $active_lang == 'en' ? '1' : '0.5'; ?>;">EN</a>
                    <span style="color: var(--primary-color, #3C48E1); margin: 0 4px; opacity: 0.5;">|</span>
                    <a href="?lang=es" style="color: var(--primary-color, #3C48E1); text-decoration: none; opacity: <?php echo $active_lang == 'es' ? '1' : '0.5'; ?>;">ES</a>
                </div>

                <button class="mobile-burger-btn" onclick="toggleFullScreenMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            
        </div>
    </div>
</div>

<div class="mobile-header-spacer"></div> 

<div id="fullscreen-menu-overlay" class="fullscreen-menu">
    <button class="close-menu-btn" onclick="toggleFullScreenMenu()">
        <i class="fa fa-times"></i>
    </button>

    <div class="menu-inner">
        
        <div class="menu-logo-container">
            <img src="images/IMA_logo.png" alt="IMA Logo" style="max-width: 140px;">
        </div>

        <nav class="mobile-nav-links">
            <ul>
                <li><a href="index.php"><?php echo $lang['nav_home']; ?></a></li>
                <li><a href="sectores.php"><?php echo $lang['nav_sectors']; ?></a></li>
                <li><a href="cobertura.php"><?php echo $lang['nav_coverage']; ?></a></li>
                
                <li class="has-children" onclick="toggleMobileSubmenu(this)">
                    <div class="d-flex justify-content-center align-items-center" style="cursor: pointer;">
                        <span style="padding: 15px 0; margin-right: 8px;"><?php echo $lang['nav_about']; ?></span>
                        <i class="fa fa-chevron-down arrow-indicator"></i>
                    </div>
                    
                    <ul class="sub-nav">
                        <li><a href="servicios.php"><?php echo $lang['nav_services']; ?></a></li>
                        <li><a href="about.php"><?php echo $lang['nav_history']; ?></a></li>
                    </ul>
                </li>
                
                <li><a href="contact.php" class="btn-highlight"><?php echo $lang['nav_contact']; ?></a></li>
            </ul>
        </nav>
    </div>

    <div class="menu-footer-info">
        <p>Laredo, TX | México</p>
    </div>
</div>

<style>
    .header-desktop { display: none !important; }
    .header-mobile-bar { display: block !important; }
    
    @media (min-width: 992px) {
        .header-desktop { display: block !important; }
        .header-mobile-bar { display: none !important; }
        .fullscreen-menu { display: none !important; } 
    }

    /* BARRA SUPERIOR BLANCA */
    .header-mobile-bar {
        background-color: #ffffff;
        height: 70px;
        position: fixed;
        top: 0;          
        left: 0;         
        width: 100%;    
        z-index: 999;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    /* BOTÓN HAMBURGUESA AZUL */
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
        background: var(--primary-color, #3C48E1);
        border-radius: 2px;
    }

    /* FONDO DEL MENÚ BLANCO */
    .fullscreen-menu {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: #ffffff;
        z-index: 999999;
        
        transform: translateY(-100%); 
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s cubic-bezier(0.77, 0, 0.175, 1);
        
        display: flex;
        flex-direction: column;
        justify-content: flex-start; 
        align-items: center;
        overflow-y: auto; 
        padding-top: 80px; 
        padding-bottom: 60px; 
    }

    .fullscreen-menu.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    .menu-inner {
        width: 100%;
        max-width: 400px;
        text-align: center;
        padding: 0 20px;
    }

    /* TACHITA AZUL */
    .close-menu-btn {
        position: absolute;
        top: 20px;
        right: 25px;
        background: none;
        border: none;
        color: var(--primary-color, #3C48E1);
        font-size: 32px;
        cursor: pointer;
        z-index: 1000000;
    }

    .menu-logo-container {
        margin-bottom: 30px;
    }

    .mobile-nav-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    /* BORDES AZULES CLAROS */
    .mobile-nav-links ul li {
        margin-bottom: 0;
        border-bottom: 1px solid rgba(60, 72, 225, 0.15);
    }
    
    .mobile-nav-links ul li:last-child {
        border-bottom: none;
    }

    /* LETRAS AZULES */
    .mobile-nav-links ul li a, 
    .mobile-nav-links ul li span {
        color: var(--primary-color, #3C48E1);
        font-size: 20px;
        text-decoration: none;
        font-weight: 600;
        display: block;
        padding: 15px 0;
        transition: color 0.3s;
    }
    
    .mobile-nav-links ul li a:hover {
        color: #FFC107;
    }

    /* SUBMENÚ AZUL CLARITO */
    .sub-nav {
        max-height: 0;
        overflow: hidden;
        background-color: rgba(60, 72, 225, 0.05);
        border-radius: 5px;
        transition: max-height 0.4s ease, opacity 0.4s ease;
        opacity: 0;
        margin: 0;
    }
    
    .has-children.open .sub-nav {
        max-height: 500px;
        opacity: 1;
        margin-bottom: 15px;
        padding-bottom: 10px;
    }

    .sub-nav li {
        border-bottom: none !important;
    }

    /* FLECHA AZUL */
    .arrow-indicator {
        color: var(--primary-color, #3C48E1); 
        font-size: 14px;
        transition: transform 0.3s;
    }
    
    .has-children.open .arrow-indicator {
        transform: rotate(180deg);
        color: var(--primary-color, #3C48E1);
    }

    /* TEXTO DEL SUBMENÚ AZUL CON OPACIDAD */
    .sub-nav li a {
        font-size: 16px !important;
        padding: 8px 0 !important;
        color: rgba(60, 72, 225, 0.8) !important;
        font-weight: normal !important;
    }

    /* BOTÓN INVERTIDO: FONDO AZUL, LETRA BLANCA */
    .btn-highlight {
        color: #ffffff !important;
        background-color: var(--primary-color, #3C48E1) !important;
        border: none !important;
        padding: 12px 35px !important;
        display: inline-block !important;
        border-radius: 50px;
        margin-top: 30px;
        margin-bottom: 20px;
        font-weight: 700 !important;
        box-shadow: 0 4px 10px rgba(60, 72, 225, 0.2);
    }
    
    .menu-footer-info {
        position: absolute;
        bottom: 20px;
        left: 0;
        width: 100%;
        text-align: center;
        color: #888;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .mobile-header-spacer {
        display: none;
        height: 10px; 
        width: 100%;
        background: transparent;
    }

    @media (max-width: 991px) {
        .mobile-header-spacer {
            display: block !important;
        }
    }
</style>

<script>
    function toggleFullScreenMenu() {
        var menu = document.getElementById("fullscreen-menu-overlay");
        menu.classList.toggle("active");
        
        if(menu.classList.contains("active")) {
            document.body.style.overflow = "hidden";
        } else {
            document.body.style.overflow = "auto";
        }
    }

    function toggleMobileSubmenu(element) {
        element.classList.toggle("open");
    }
</script>