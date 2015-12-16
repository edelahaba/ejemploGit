<?php

/**
 * Created by PhpStorm.
 * User: Nesto
 * Date: 07/12/2015
 * Time: 10:30
 */
abstract class empleado {

    public $nombre;
    public $salario;
    public $departamento;

    function __construct($nombre, $salario, $departamento) {
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->departamento = $departamento;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDepartamento() {
        return $this->departamento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getSalario() {
        return $this->salario;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    /**
     * @return mixed Calcula el interes dependiendo del tipo de cuenta que pertenezca.
     */
    function __toString(){
        return $this->getNombre() . " Salary: " . $this->getSalario() . " Department: " . $this->getDepartamento();
    }
    
}
