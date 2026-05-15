<?php

class ListCitiesModel extends Conexion{

    function getAll() {
        $pdo = $this->crearConecion();
        $respuesta = $pdo->prepare("select * from ciudad");
        $ciudades = $respuesta->fetchAll(PDO::FETCH_OBJ);
        return $ciudades;
    }
}