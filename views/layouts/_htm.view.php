<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>MOOD</title>
<link rel="stylesheet" href="css/normalize.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/index_main.css">
<script src="js/main_functions.js"></script>
<script src="js/index_before.js"></script>
</head>

<body>



<?php
//Peldošā izvēlne (navi)
include '../views/navi.view.php';
//Sarkanais 1.bloks (head)
include '../views/head.view.php';
//Sarkanais 2.bloks (services)
include '../views/services.view.php';
//Zaļais 1.bloks (works)
//Zaļais 2.bloks - fotogalerija
include '../views/works.view.php';
//JūrasZaļais 1.bloks (price)
//JūrasZaļais 2.bloks - cenu tabulas
include '../views/price.view.php';
//Zaļais 3.bloks (team)
include '../views/team.view.php';
//Zilais 1.bloks (contact)
include '../views/contact.view.php';
?>


<script src="js/index_lang_change.js"></script>
<script src="js/index_scroll.js"></script>
<script src="js/index_form_valid.js"></script>
<script src="js/index_slide.js"></script>
<script src="js/index_sort.js"></script>
<script>
//galerijas ielāde
ItemsSort(-1, $('#galerija .box-slide-all'), $('#darbi .box-buttons-ring'));
</script>

</body>

</html>
