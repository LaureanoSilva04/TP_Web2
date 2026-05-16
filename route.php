<?php

require_once ("app/controller/CityController.php");

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (empty($_GET['action'])) {
    $_GET['action'] = 'ciudades';
}

$action = $_GET['action'];

$parametros = explode('/', $action);

switch($parametros[0]) {
    case 'ciudades':
        $controller = new CityController();
        $controller->showCities();
        break;
}