<?php

/*
 * El FrontEnd controller se encarga de configurar la aplicación
 */
require "BaseController.php";
// llamar al controlador indicado
$ctr= new BaseController();
$ctr->controller($_GET['url']);