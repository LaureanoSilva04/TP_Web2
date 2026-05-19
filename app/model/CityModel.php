<?php
require_once ("app/model/Conexion.php");
class CityModel extends Conexion{

    function getAll() {
        $pdo = $this->crearConexion();
        $query = $pdo->prepare("select * from ciudad");
        $query->execute();
        $ciudades = $query->fetchAll(PDO::FETCH_OBJ);
        return $ciudades;
    }

    function get($id) {
        $pdo = $this->crearConexion();
        $query = $pdo->prepare("select ciudad.*, pais.nombre as nombre_pais 
                                from ciudad 
                                inner join pais on ciudad.id_pais = pais.id_pais 
                                where ciudad.id_ciudad = ?");
        $query->execute([$id]);
        $ciudad = $query->fetch(PDO::FETCH_OBJ);
        return $ciudad;
    }
}