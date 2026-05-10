<?php

require_once ("app/view/HomeView.php");

class HomeController {

    private $model;
    private $view;

    function __construct() {
        $this->$model = new HomeModel();
        $this->$view = new HomeView();
    }

    function mostrarHome() {
        $this->$view->viewHome();
    }
}