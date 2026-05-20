<?php
require_once ("app/model/CityModel.php");
require_once ("app/view/CityView.php");

class CityController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new CityModel();
        $this->view = new CityView();
    }

    function showCities() {
        $cities = $this->model->getAll();
        $this->view->viewCities($cities);
    }

    function showCity($id) {
        $city = $this->model->get($id);
        $this->view->viewCity($city);
    }
}