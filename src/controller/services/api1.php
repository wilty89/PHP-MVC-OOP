<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: *");
    header('Content-Type: application/json');
    $the_name = $_POST['name'];
    // NOTE: we must use double quotes because PHP checks
    // for variables. It does not do this with single quotes
    echo '$#' . " " . $the_name;
 ?>