<?php
spl_autoload_register(function ($clase) {
    include 'clases/' . $clase . '.php';
});

session_start();

if (isset($_REQUEST['enviar'])) {
    if (!isset($_SESSION['empleados'])) {
        echo "La cookie no ha sido creada..";
        header("refresh:2;url=index.php");
    } else {
        $e;
        $departamentos = $_SESSION['departamentos'];
        $empleados = $_SESSION['empleados'];
        $nombreEmp = $_REQUEST['nombre'];
        $salarEmp = $_REQUEST['salario'];
        $deptEmp = $_REQUEST['departamento'];
        $lengEmp = $_REQUEST['lenguaje'];
        $plusEmp = $_REQUEST['plus'];
        $tipoEmp = $_REQUEST['tipo'];
        if ($tipoEmp == 0) {
            $e = new programador($nombreEmp, $salarEmp, $deptEmp);
            $e->setLenguaje($lengEmp);
        } else {
            $e = new jefe($nombreEmp, $salarEmp, $deptEmp);
            $e->setPlus($plusEmp);
        }

        if (!in_array($deptEmp, $departamentos)) {
            array_unshift($departamentos, $deptEmp);
        }

        array_unshift($empleados, $e);

        $_SESSION['empleados'] = $empleados;
        $_SESSION['departamentos'] = $departamentos;
        echo "Se ha creado un nuevo empleado";
        echo $e;
        echo "<a href=\"index.php\">Volver al inicio</a>";
    }
} else {
    ?>
    <html>
        <head>
            <title>Crear empleado</title>
            <script>
             /*   window.onload = function () {
                    document.getElementById("tipoempleado").addEventListener("blur", elegir);
                    function elegir() {
                        var valor = document.getElementById("lengua").value;
                        alert(valor);
                        if (valor == 0) {
                            document.getElementById("lengua").style.display = "";
                        } else {
                            document.getElementById("plus").value;
                        }
                    }
                }*/
            </script>
        </head>
        <p style="background-color: red; color: white;">No se ha implementado el script para ocultar los campos de texto dependiendo del tipo de empleado</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Tipo <select id="tipoempleado" name="tipo">
                <option value="0">Programador</option>
                <option value="1">Jefe de Deparmento</option>
            </select><br><br>
            Nombre <input type="text" name="nombre"><br><br>
            Salario <input type="text" name="salario"><br><br>
            Departamento <input type="text" name="departamento"><br><br>
            Lenguaje <input type="text" id="lengua" name="lenguaje"><br><br>
            Plus <input type="text" id="plus" name="plus"><br><br>
            <input type="submit" name="enviar" value="Crear">
        </form>
       <a href="index.php">Volver</a>
    </html>
<?php } ?>
<br>
