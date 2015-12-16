<?php
session_start();
if (!isset($_SESSION['empleados'])) {
    $_SESSION['empleados'] = Array();
    $_SESSION['departamentos'] = Array();
}
?>
<html>
    <a href="nuevoEmpleado.php">Crear clientes</a>
    <br><br>
    <a href="listadoDepartamento.php">Visualizar clientes</a>
</html>