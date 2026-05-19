<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
    case 'ciudad':
        $controller = new CityController();
        $controller->showCity($parametros[1]);
}