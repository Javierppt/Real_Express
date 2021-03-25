<!DOCTYPE html>
<html>
	<?php

	require('../navegador_Top.php');
	require("../conexion.php");

	$filan=$_POST['filan'];
	print(" Número de registros = $filan <br>");
				for($i=0;$i<$filan;$i++){
					$motivos=$_POST['motivos'][$i];
					print("Motivo = $motivos  <br>");
					$dosvisit=$_POST['dosvist'][$i];
					print(" dosivistas = $dosvisit<br>");
					$obser=$_POST['obser'][$i];
					print("Observaciones = $obser <br>");
					$nro_tarj=$_POST['nro_tarj'][$i];
					print("Numero de tarjeta = $nro_tarj <br>");
					$fecha=$_POST['fecha'][$i];
					print("Fecha = $fecha <br>");
					
																				
	                $con ="INSERT INTO devoluciones (sucursal, fecha, nro_tarj, motivo, dos_visitas, observaciones) VALUES ('1','$fecha','$nro_tarj','$motivos','$dosvisit','$obser')";
	                if ( mysqli_query($conexion, $con)) {
	                	echo "Carga ";
	                	echo $i + 1;
	                	echo " exitosa";
	                	echo "<br>";
	                }
	                else {
	                	echo "Carga ";
	                	echo $i + 1;
	                	echo " fallida";
	                	echo "<br>";
	                }
				}			
	?>
	<br>
<a href="../"><button type="button">Volver al index</button></a>
</div>

</body>
</html>
	