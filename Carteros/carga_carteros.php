<!DOCTYPE HTML>
<!--
    Arcana by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    
        
<?php
require('../navegador_Top.php');
require('conexion.php');

    $nombreapellido_cartero = $_POST["nombre_apellido"];
    echo $nombreapellido_cartero;
    $dni_cartero = $_POST["dni"];
    echo $dni_cartero;
    $telefono_cartero =  $_POST["telefono"];
    echo $telefono_cartero;

    $insert_carteros = "INSERT INTO cartero (idcartero , nombre_apellido, dni, telefono)
            VALUES ('', '$nombreapellido_cartero', '$dni_cartero', '$telefono_cartero')";

    $datos=mysqli_query($conexion,$insert_carteros) or die (
        "<h3>Error no se ha pododido ejecutar la consulta</h3><br>
        <a href='ingreso_carteros.html'>Volver a la carga de datos</a>"
    );

    // Ejecutar y validar el comando SQL 
    if ($datos == TRUE) {
        echo "Nuevo registro creado exitosamente";
    } 
    else {
        echo "Error: " . $insert_carteros . "<br>" . $link->error;
        
    }


    echo "<BR><BR>";
    echo "<center><a href='ingreso_carteros.html'>Volver a la carga de datos</a></center>";
     echo "<center><a href='index_carteros.php'>Volver al menu de cartero</a></center>";
?>
<a href="index_carteros.php"><button type="button">Volver</button></a>
<a href="../"><button type="button">Volver al index</button></a>
</div>
<!-- Scripts -->
            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.dropotron.min.js"></script>
            <script src="../assets/js/browser.min.js"></script>
            <script src="../assets/js/breakpoints.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
</body>
</html>