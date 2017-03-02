<?php
// controllers/admin.ctrl.php

function admin_controller(){
    include '../functions/html.lib.php';
    include '../functions/dataGet.lib.php';
    $dataMsg = dataGet('../database/contact/contact_message.txt', true);
    include '../views/admin/admin.view.php';
}
