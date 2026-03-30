<?php
session_start();

if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es' || $_GET['lang'] == 'en') {
        $_SESSION['lang'] = $_GET['lang'];
    }
}

$active_lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';

include "lang/{$active_lang}.php";
?>
<head>
    <title><?php echo isset($page_title) ? $page_title : 'IMA EXPRESS'; ?></title>
    
    <link rel="icon" href="images/IMA_logo_black.png?v=2" type="image/png">
    <link rel="shortcut icon" href="images/IMA_logo_black.png?v=2" type="image/png">

    <link rel="icon" href="images/IMA_logo_white.png?v=2" type="image/png" media="(prefers-color-scheme: dark)">

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="IMA EXPRESS LLC: Expertos en logística binacional, transporte de carga y soluciones integrales de cruce fronterizo entre México y Estados Unidos." name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
      id="bootstrap"
    />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/swiper-custom-1.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
    <link
      id="colors"
      href="css/colors/scheme-01.css"
      rel="stylesheet"
      type="text/css"
    />
</head>