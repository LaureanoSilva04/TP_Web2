<?php
//TODO: falta que herede de View.php para que tenga toda la parte de seguridad implementada,
// ademas de cosas como el nombre de la pagina
class ListCitiesView {



    function viewListaCiudades($ciudades) {
        require_once "templates/ciudades.phtml";
    }
}