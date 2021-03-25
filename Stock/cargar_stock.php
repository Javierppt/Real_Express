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
	
	$fecha_hoy= date("Y-m-d");
    $fecha_ayer= date("Y-m-d", strtotime( '-1 days' ) );
    

    $consulta ="SELECT idBase FROM base WHERE fecha_llegada LIKE '$fecha_ayer'"; //Tarjetas al inicio del dia
	$res = mysqli_query($conexion, $consulta);
	$filan = mysqli_num_rows($res);

	$suma = $filan;

    $consulta2 ="SELECT idrendiciones FROM rendiciones WHERE fecha LIKE '$fecha_hoy'"; //Tarjetas acuses
	$res2 = mysqli_query($conexion, $consulta2);
	$filan2 = mysqli_num_rows($res2);

	$resta =$filan2;


	$consulta3 ="SELECT idBase FROM base WHERE estado LIKE 'Distrib.' AND fecha_llegada LIKE '$fecha_hoy'"; //Tarjetas distribuidas
	$res3 = mysqli_query($conexion, $consulta3);
	$filan3 = mysqli_num_rows($res3);

	$resta = $resta + $filan3;

	$consulta4 ="SELECT idBase FROM base WHERE estado LIKE 'EN SUCURSAL' AND fecha_llegada LIKE '$fecha_hoy'"; //Tarjetas en ingreso
	$res4 = mysqli_query($conexion, $consulta4);
	$filan4 = mysqli_num_rows($res4);

	$suma = $suma + $filan4;

	$consulta5 ="SELECT iddevoluciones FROM devoluciones WHERE fecha LIKE '$fecha_hoy'"; //Tarjetas devoluciones
	$res5 = mysqli_query($conexion, $consulta5);
	$filan5 = mysqli_num_rows($res5);

	$suma = $suma + $filan5;



	$suma = $suma + $filan4;



	$total = $suma - $resta;

	

	$consulta6 ="INSERT INTO stock (fecha, tarj_inicio_dia, tarj_distr, acuses_entr, devol, ingres, total_tarj) VALUES('$fecha_hoy', '$filan', '$filan2', '$filan3', '$filan4', '$filan5', '$total')";
	$res6=mysqli_query($conexion, $consulta6);
	

		
		if ($filan==0) {
			echo "No se encontraron registros de ayer <br>";
			
		}
		else
			print $filan;
		if ($filan2==0) {
			echo "No se encontraron registros de tarjetas acuses <br>";
			
		}
		else
			print $filan2;
		if ($filan3==0) {
			echo "No se encontraron registros de tarjetas en distribuidas <br>";
			
		}
		else
			print $filan3;
		if ($filan4==0) {
			echo "No se encontraron registros de tarjetas en ingreso <br>";
			
		}
		else
			print $filan4;
		if ($filan5==0) {
			echo "No se encontraron registros de tarjetas en devoluciones <br>";
		}
		else
			print $filan5;

		
	?>
	
	


	<form action="../Index.html">
		<input type="submit" value="Volver al index">
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