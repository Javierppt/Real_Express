<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	
<?php 
    require('../navegador_Top.php');
    require("../conexion.php");
$ident=$_GET['id'];
$consulta="DELETE FROM cartero WHERE idcartero = '$ident'";
$res=mysqli_query($conexion,$consulta);

if(!$res){
 echo ("No se ha realizado correctamente".mysqli_errno($db));
}
else{
  echo "Baja Correcta";
}

?>
<br>
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
