<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<?php
	require('../conexion.php');
	require('../navegador_Top.php');
	$nro_tarj=$_GET['ident'];
	echo ('
		<form action="modificar_estado_nrotarj.php" method="post">
		<select name="estado">
			<option value="EN TRANSITO" >EN TRANSITO</option>
			<option value="EN SUCURSAL" >EN SUCURSAL</option>
			<option value="Distrib." >Distrib.</option>
			<option value="Devuelto." >Devuelto.</option>
		</select>
		<select name="numero">
			<option value="'.$nro_tarj.'">'.$nro_tarj.' </option>
		</select>
		
		<input type="submit" value="Modificar">
	</form>');
	if ("estado"=="Devuelto.") {

		header('location: modificar_estado_nrotarj_devuelto.php ? echo estado');
	}
	?>
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