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
	

	<form method="post" action="consulta_devoluciones.php">
		Ingrese la fecha de la planilla de devoluciones:
		<input type="date" name="fecha_devolucion">
		<input type="submit" value="buscar">
	</form>
<p><a href="../"><button type="button" >Volver al index</button></a></p>
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