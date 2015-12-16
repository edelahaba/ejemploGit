<?php
spl_autoload_register(function ($clase) {
    include 'clases/' . $clase . '.php';
});

session_start();
if (!isset($_SESSION['empleados'])) {
    echo "La cookie no ha sido creada..";
    header("refresh:2;url=index.php");
}

$departamentos = $_SESSION['departamentos'];

if (isset($_REQUEST['enviar'])) {
    $acumulador = 0;
    $tipoEmp = $_REQUEST['tipo'];
    $empleados = $_SESSION['empleados'];
    for ($i = 0; $i < count($empleados); $i++) {
        if ($empleados[$i]->getDepartamento() == $tipoEmp) {
            echo " <b>" . get_class($empleados[$i]) . "</b> " . $empleados[$i] . "<br>";
            $acumulador += $empleados[$i]->getSalario();
        }
    }
    echo "<br><b>Gatos de personal: " . $acumulador . "</b><br><br>";
} 
    ?>
    <html>
        <head>
            <title>Listado empleados</title>
        </head>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Tipo <select name="tipo">
                <?php for ($i = 0; $i < count($departamentos); $i++) { ?>
                    <option value="<?php echo $departamentos[$i] ?>"><?php echo$departamentos[$i] ?></option>
                <?php } ?>
            </select>
            <input type="submit" name="enviar" value="Crear">
        </form>
        <a href="index.php">Volver</a>
    </html>
<br>