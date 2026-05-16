<?php

require_once ("app/view/CityView.php");

class CityController {

    private $model;
    private $view;

    function __construct() {
        $this->$model = new CityModel();
        $this->$view = new CityView();
    }

    function showCities() {
        $ciudades = $this->$model->getAll();
        $this->$view->viewCities($ciudades);
    }
}