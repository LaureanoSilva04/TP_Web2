<?php
//TODO: falta que herede de View.php para que tenga toda la parte de seguridad implementada,
// ademas de cosas como el nombre de la pagina
class CountryView {

    function viewCountries($countries) {
        require_once ("templates/paises.phtml");
    }
}