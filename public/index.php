<?php
// public/index.php

include '../functions/core.lib.php';
run_controller($_SERVER['REQUEST_URI'], GetLang());
?>
