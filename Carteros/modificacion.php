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
		
		<h1>Modificacion de Cartero </h1>
		<?php
			require('../conexion.php');

			$nombre_cart=$_POST['nombre_apellido'];
			$tel_cart=$_POST["telefono"];
			$dni=$_POST["dni"];
			$id=$_POST["id"];
  
			$sql="UPDATE cartero SET nombre_apellido='".$nombre_cart."', telefono='".$tel_cart."', dni='".$dni."' WHERE idcartero='".$id."'";
		
			$res = mysqli_query( $conexion, $sql );
			if(!$res)
			 echo "No se ha realizado correctamente".mysqli_errno($conexion);
			else
			  echo "Modificacion Realizada";

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