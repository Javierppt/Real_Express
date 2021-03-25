<!DOCTYPE HTML>
<!--
    Arcana by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <?php
   require('../navegador_Top.php');
    ?>
        

            <form action="inicio.html"  method="post">
                <table border=1>
                    <th colspan="5"> Consulta de todas los carteros</th>
                    <tr>
                    <th>Nombre del cartero</th><th>DNI</th><th>Tel&eacute;fono</th>
                     
                    </tr>
                    <?php

                        require("../conexion.php");

                        $consulta="select * from cartero";
                        $datos=mysqli_query($conexion,$consulta) or die ("<h3>Error no se ha pododido ejecutar la consulta</h3><br>");

                        $filan=mysqli_num_rows($datos);

                        for ($i=0;$i<$filan;$i++){
                            $fila=mysqli_fetch_array($datos);
                            $nombre=$fila['nombre_apellido'];
                            $DNI=$fila['dni'];
                            $telefono=$fila['telefono'];
                            $id=$fila['idcartero'];
                            print"
                            <tr border='1'>
                            <td>".$nombre."</td>
                            <td>".$DNI."</td>
                            <td> ".$telefono." </td>
                            <td><a href='bajas_carteros.php?id=$id' codigo=".$DNI."> Borrar </a></td>
                            <td><a href='modificar.php?id=$id' > Modificar </a></td>
                            </tr>";
                        }
                        print"<tr><td colspan='5' align='center' > <a href='ingreso_carteros.html'>Cargar nuevo </td></tr>";
                        echo"<p>";
                        echo"</table>";
                    
                    ?>

                </table>
               
            </form>

<a href="../"><button type="button"  >Volver al index</button></a>
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