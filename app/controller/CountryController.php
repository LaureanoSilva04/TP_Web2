<?php
require_once ("app/model/CountryModel.php");
require_once ("app/view/CountryView.php");

class CountryController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new CountryModel();
        $this->view = new CountryView();
    }

    function showCountries() {
        $countries = $this->model->getAll();
        $this->view->viewCountries($countries);
    }
}