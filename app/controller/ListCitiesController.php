<?php

require_once ("app/view/ListCitiesView.php");

class HomeController {

    private $model;
    private $view;

    function __construct() {
        $this->$model = new ListCitiesModel();
        $this->$view = new ListCitiesView();
    }

    function mostrarListadoCiudades() {
        $ciudades = $this->$model->getAll();
        $this->$view->viewListaCiudades($ciudades);
    }
}