<?php
session_start();
$empleados = $_SESSION['empleados'];
$departamentos = $_SESSION['departamentos'];
echo var_dump($empleados);
echo var_dump($departamentos);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

