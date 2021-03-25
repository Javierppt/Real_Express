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
	$fecha=$_POST['fecha'];
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
				for($i=0;$i<$filan;$i++){
					$fila=mysqli_fetch_array($res);
                    $con ="INSERT INTO rendiciones (sucursal, fecha, nro_tarj) VALUES ('Bahía Blanca','$fecha',".$fila['nro_tarj'].")";
                    mysqli_query($conexion, $con);
				}
				echo "<h1>Actualizacion de tarjetas con exito</h1>";
			}
			 
				
			
		
	?>
	<br>
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