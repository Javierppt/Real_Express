<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

						<?php
							require('../navegador_Top.php');
							require('botones_nav_adicionales.php');
							require('../conexion.php');
							$consulta = "SELECT * FROM devoluciones WHERE motivo IN(SELECT motivos from motivos_devolucion where motivos like 'FALTAN DATOS') ";
							$res = mysqli_query($conexion,$consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");
							$filan=mysqli_num_rows($res);
		
							if(!$res){
								echo"Error al seleccionar".mysql_errno();
									 }
			else{
				print"
					<table border=1 >
					<tr>
					<th>Id devoluciones</th>
					<td>Fecha</td>
					<td>Número de tarjeta</td>
					<td>Dos vistas</td>
					<td>Observaciones</td>
					<td>Motivos</td>
					
					</tr>";
				for ($i=0;$i<$filan;$i++){

                    $fila=mysqli_fetch_array($res);
                    $id_devoluciones=$fila['iddevoluciones'];
					$fecha=$fila['fecha'];
					$nro_tarj=$fila['nro_tarj'];
					$motivo=$fila['motivos'];
					$dos_visitas=$fila['dos_visitas'];
					$observaciones=$fila['observaciones'];
				
					print("
					<tr>
					<td style='padding:10px;'>".$id_devoluciones."</td>
					<td style='padding:10px;'>".$sucursal."</td>
					<td >".$fecha."</td>
					<td>".$nro_tarj."</td>
					<td >".$dos_visitas."</td>
					<td>".$observaciones."</td>
					<td>".$motivo."</td>
					
					</tr>

				
					")
					;
					
		}
		print("</table>");
	}
?>
							<p><a href="index_consultas.html"><button type="button" >Volver</button></a></p>
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