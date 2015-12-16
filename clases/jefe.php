<?php

/**
 * Created by PhpStorm.
 * User: Nesto
 * Date: 07/12/2015
 * Time: 10:30
 */
class jefe extends empleado
{
    private $plus;
    
    function getPlus() {
        return $this->plus;
    }

    function setPlus($plus) {
        $this->plus = $plus;
        $this->salario += $plus;
    }

}