<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<?php
	require('../navegador_Top.php');
	require('../conexion.php');
	$fecha=$_GET['fech'];
	$consulta="DELETE FROM base WHERE fecha_llegada like '$fecha' and estado like 'Distrib.'";
$res=mysqli_query($conexion,$consulta);

if(!$res){
 echo ("<h1>No se ha realizado correctamente</h1> <br>".mysqli_errno($conexion));
}
else{
  echo "<h1>Eliminación de tarjetas entregadas exitosa</h1>";
}

?>
<br>
<a href="../index.html"><button type="button">Volver al index</button></a>
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