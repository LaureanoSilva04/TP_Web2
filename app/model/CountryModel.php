<?php
require_once ("app/model/Conexion.php");
class CountryModel extends Conexion{

    function getAll() {
        $pdo = $this->crearConexion();
        $query = $pdo->prepare("select * from pais");
        $query->execute();
        $countries = $query->fetchAll(PDO::FETCH_OBJ);
        return $countries;
    }
}