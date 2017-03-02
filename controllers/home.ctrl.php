<?php
// controllers/home.ctrl.php

function home_controller($lang){
include '../functions/html.lib.php';
//navi.view.php
$menu_lang = include '../lang/' .$lang. '/menu.lang.php';
$menu_cfg = include '../config/menu.config.php';
$langs_cfg = include '../config/lang.config.php';
//head.view.php
$head_lang = include '../lang/' .$lang. '/head.lang.php';
//
//...
//
//head.view.php
$contact_lang = include '../lang/' .$lang. '/contact.lang.php';
//
include '../views/layouts/_htm.view.php';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
include '../functions/dataValidate.lib.php';
include '../functions/dataSave.lib.php';
dataSave(dataValidating($_POST), $lang, false, true);
}
?>
