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
                            <li><a class="menu-item" href="cobertura.php">Cobertura</a></li>
                            <li>
                                <a class="menu-item" href="#">Quiénes somos</a>
                                <ul>
                                    <li><a href="servicios.php">Servicios</a></li>
                                    <li><a href="about.php">Nuestra historia</a></li>
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
    <button class="close-menu-btn" onclick="toggleFullScreenMenu()">
        <i class="fa fa-times"></i>
    </button>

    <div class="menu-inner">
        
        <div class="menu-logo-container">
            <img src="images/IMA_logo_white.png" alt="IMA Logo" style="max-width: 140px;">
        </div>

        <nav class="mobile-nav-links">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sectores.php">Sectores</a></li>
                <li><a href="cobertura.php">Cobertura</a></li>
                
                <li class="has-children" onclick="toggleMobileSubmenu(this)">
                    <div class="d-flex justify-content-between align-items-center" style="cursor: pointer;">
                        <span>Quiénes Somos</span>
                        <i class="fa fa-chevron-down arrow-indicator"></i>
                    </div>
                    
                    <ul class="sub-nav">
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="about.php">Nuestra Historia</a></li>
                    </ul>
                </li>
                
                <li><a href="contact.php" class="btn-highlight">Contacto</a></li>
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

    .header-mobile-bar {
        background-color: #111;
        height: 70px;
        position: relative;
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

    .fullscreen-menu {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: #000;
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

    .close-menu-btn {
        position: absolute;
        top: 20px;
        right: 25px;
        background: none;
        border: none;
        color: #fff;
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

    .mobile-nav-links ul li {
        margin-bottom: 0;
        border-bottom: 1px solid #222;
    }
    
    .mobile-nav-links ul li:last-child {
        border-bottom: none;
    }

    .mobile-nav-links ul li a, 
    .mobile-nav-links ul li span {
        color: #fff;
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
        max-height: 0;
        overflow: hidden;
        background-color: #111;
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

    .sub-nav li a {
        font-size: 16px !important;
        padding: 8px 0 !important;
        color: #aaa !important;
        font-weight: normal !important;
    }

    .arrow-indicator {
        color: #666;
        font-size: 14px;
        transition: transform 0.3s;
    }
    
    .has-children.open .arrow-indicator {
        transform: rotate(180deg);
        color: #FFC107;
    }

    .btn-highlight {
        color: #FFC107 !important;
        border: 1px solid #FFC107;
        padding: 12px 30px !important;
        display: inline-block !important;
        border-radius: 50px;
        margin-top: 30px;
        margin-bottom: 20px;
    }
    
    .menu-footer-info {
        position: absolute;
        bottom: 20px;
        left: 0;
        width: 100%;
        text-align: center;
        color: #444;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
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