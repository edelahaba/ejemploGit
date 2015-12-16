<?php

/**
 * Created by PhpStorm.
 * User: Nesto
 * Date: 07/12/2015
 * Time: 10:31
 */
class programador extends empleado
{
    public $lenguaje;
    
    function getLenguaje() {
        return $this->lenguaje;
    }

    function setLenguaje($lenguaje) {
        $this->lenguaje = $lenguaje;
    }

}