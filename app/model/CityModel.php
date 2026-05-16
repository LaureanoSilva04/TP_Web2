<?php
require_once ("app/model/Conexion.php");
class CityModel extends Conexion{

    function getAll() {
        $pdo = $this->crearConexion();
        $query = $pdo->prepare("select * from ciudad");
        $ciudades = $query->fetchAll(PDO::FETCH_OBJ);
        return $ciudades;
    }
}