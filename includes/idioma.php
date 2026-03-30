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