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
	<?php
	require('../conexion.php');
	$fecha=$_POST['fecha_devolucion'];

	$consulta = "SELECT * FROM base WHERE estado like 'Devuelto.' AND fecha_llegada like '$fecha'";
	$res = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");
		$filan=mysqli_num_rows($res);
		
		if ($filan==0) {
			echo "No se encontraron registros";
			
		}

		if(!$res){
				echo"Error al seleccionar".mysql_errno();
			}
			else{
				for($i=0;$i<$filan;$i++){
					print("
					<table border=1 >
					<tr>
					<th>Número de tarjeta</th>
					<td>Nombre</td>
					<td>Fecha</td>
					</tr>");
					$fila=mysqli_fetch_array($res);
                    $nro_tarj=$fila['nro_tarj'];
					$nombre=$fila['nombre_apellido'];
					$fech=$fila['fecha_llegada'];
					$idBase=$fila['idBase'];
					print("
					<tr>
					<td>".$nro_tarj."</td>
					<td>".$nombre."</td>
					<td>".$fech."</td>
					<td style=>
						<form method='post' action='act_devoluciones.php'>
						Motivos
							<select name='motivos[]' required>
								<option value=''>SELECCIONE MOTIVO</option>
								<option value=1>FALTAN DATOS</option>
								<option value=2>ZONA NO ATENDIDA</option>
								<option value=3>NO EXISTE NUMERO</option>
								<option value=4>NO EXISTE CALLE</option>
								<option value=5>SE MUDO</option>
								<option VALUE=6>TIT.DESCONOCIDO</option>
								<option VALUE=7>SE NEGO A RECIBIR</option>
								<option VALUE=8>FALLECIO TITULAR</option>
								<option VALUE=9>ZONA INACCESIBLE</option>
							</select>
						¿Dos visitas?
							<select name='dosvist[]' required>
							<option value=''>---</option>
							<option>Si</option>
							<option>No</option>
							</select>
							<br>
						Observaciones
						<input type='text' name='obser[]'></input>
						<input type='hidden' name='nro_tarj[]' value='$nro_tarj'>
						
						<input type='hidden' name='fecha[]' value='$fech'>
						<input type='hidden' name='filan' value='$filan'>

						
					</td>
					</tr>
					</table>
					"
					);
				}
			
					
				print("</table>");
			}	
	?>
<form method="post" action="act_devoluciones.php">
		<input type="submit" value="Actualizar datos">
		 <input type="hidden" name="array" value="<?php echo $array; ?>"/> 
		
	</form>

<br>	
<a href="consulta_fecha_devoluciones.php"><button type="button" >Volver</button></a>
<a href="../"><button type="button" >Volver al index</button></a>
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