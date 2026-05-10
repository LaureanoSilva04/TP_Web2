<?php

require_once ("app/controller/HomeController.php");

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (empty($_GET['action'])) {
    $_GET['action'] = 'home';
}

$action = $_GET['action'];

$parametros = explode('/', $action);

switch($parametros[0]) {
    case 'home':
        $controller = new HomeController();
        $controller->mostrarHome();
        break;
}