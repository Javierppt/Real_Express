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

				
	<h1>Rendiciones</h1>
	<?php
	require('../conexion.php');
	$fecha=$_POST['fecha_rendicion'];
	$consulta = "SELECT * FROM base WHERE estado like 'Distrib.' AND fecha_llegada like '$fecha'";
	$res = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");
		$filan=mysqli_num_rows($res);
		
		if ($filan==0) {
			echo "No se encontraron registros";
			
		}

		if(!$res){
				echo"Error al seleccionar".mysql_errno();
			}
			else{
					print("
					<table border=1 >
					<tr>
					<th>Número de tarjeta</th>
					<td>Titular</td>
					<td>Fecha</td>
					<td>Télefono</td>
					<td>Dirección</td>
					<td>Código postal</td>
					<td>Localidad</td>
					<td>Estado</td>
					<td>Número de cartero</td>
					</tr>");
					for($i=0;$i<$filan;$i++){
					$fila=mysqli_fetch_array($res);
                    $nro_tarj=$fila['nro_tarj'];
					$nombre=$fila['nombre_apellido'];
					$fech=$fila['fecha_llegada'];
					$tel_cart=$fila['telefono'];
					$idBase=$fila['idBase'];
					$dir=$fila['calle'];
					$cod=$fila['cod_pos'];
					$loc=$fila['localidad'];
					$est=$fila['estado'];
					$car=$fila['cartero'];
					print("
					<tr>
					<td style='padding:10px;'>".$nro_tarj."</td>
					<td style='padding:10px;'>".$nombre."</td>
					<td>".$fech."</td>
					<td >".$tel_cart."</td>
					<td>".$dir."</td>
					<td >".$cod."</td>
					<td>".$loc."</td>
					<td>".$est."</td>
					<td>".$car."</td>
					</tr>");
					
					
					
				
				}
				print("</table>");
			}

			 
				
			
		
	?>
	<a href="consulta_rendiciones.php"><button type="button" >Volver</button></a>
    <form action="act_rendiciones.php" method="POST">
        <input type="hidden" name="fecha" value="<?php echo $fecha; ?>" /> 
        <input type="hidden" name="valores" value="<?php echo $array; ?>" /> 
		<input type="submit" value="Actualizar rendiciones" name="act_ren"></input>

	</form>
	<form action="../">
		<input type="submit" name="volver" value="Volver al index">
	</form>
	<form method="GET" action="eliminar_tarj.php">
		<input type="submit" value="Eliminar tarjetas entregadas de la base" name="elim"></input>
		<input type="hidden" name="fech" value="<?php echo $fech; ?>" /> 
	</form>
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