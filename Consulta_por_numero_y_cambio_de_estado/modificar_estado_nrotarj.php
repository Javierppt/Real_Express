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
			echo "<h1>Modificacion de estado</h1>";
			$nro_tarj=$_POST['numero'];
			$ident=$_POST['estado'];
			
  
			$sql="UPDATE base SET estado='".$ident."' where nro_tarj like '".$nro_tarj."' ";
		
			$res = mysqli_query( $conexion, $sql ) or die ("error en la actualizacion");
			if(!$res)
			 echo "No se ha realizado correctamente".mysqli_errno($conexion);
			else
			  echo "Modificacion Realizada";

		?>

		<br>
		<a href="../index.html">Volver al index</a>
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