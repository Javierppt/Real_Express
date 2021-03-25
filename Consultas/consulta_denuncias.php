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
		$consulta = "SELECT * FROM base WHERE nro_tarj like '81%'";
		$res = mysqli_query($conexion,$consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");
		$filan=mysqli_num_rows($res);
		if(!$res){
				echo"Error al seleccionar".mysql_errno();
			}
			else{
				print"
					<table border=1 >
					<tr>
					<th>Número de tarjeta</th>
					<td>Titular</td>
					<td>Teléfono</td>
					<td>Dirección</td>
					<td>Código postal</td>
					<td>Localidad</td>
					<td>Estado</td>
					</tr>";
				for ($i=0;$i<$filan;$i++){

                    $fila=mysqli_fetch_array($res);
                    $nro_tarj=$fila['nro_tarj'];
					$nombre=$fila['nombre_apellido'];
					$tel_cart=$fila['telefono'];
					$id=$fila['idBase'];
					$dir=$fila['calle'];
					$cod=$fila['cod_pos'];
					$loc=$fila['localidad'];
					$est=$fila['estado'];
					
					print("
					<tr>
					<td style='padding:10px;'>".$nro_tarj."</td>
					<td style='padding:10px;'>".$nombre."</td>
					<td >".$tel_cart."</td>
					<td>".$dir."</td>
					<td >".$cod."</td>
					<td>".$loc."</td>
					<td>".$est."</td>
					</tr>
					
					")
					;
					
		}
		print("</table>");
	}
?>
<a href="../"><button type="button" >Volver</button></a>
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