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
			echo ("
			<form name='motivo'>
				ingrese el motivo de la devolucion:
				<select>
					<option value=1 >FALTAN DATOS</option>
					<option value=2 >ZONA NO ATENDIDA</option>
					<option value=3 >NO EXISTE NÚMERO</option>
					<option value=4 >NO EXISTE CALLE</option>
					<option value=5 >SE MUDO</option>
					<option value=6 >TIT. DESCONOCIDO</option>
					<option value=7 >SE NEGÓ A RECIBIR</option>
					<option value=8 >FALLECIO TITULAR</option>
					<option value=9 >ZONA INACCESIBLE</option>
				</select>
			</form>
			<form name='visitas'>
				se hicieron 2 visitas?:
				<input type=checkbox></input>
			</form>
			<form name='obser'>
				observaciones:
				<input type=text></input>
			</form>");
			$sql2="INSERT INTO devoluciones(sucursal, fecha, nro_tarj, motivo, dos visitas?, observaciones) VALUES Bahia blanca', 'date(today)', $nro_tarj, 'motivo', 'visitas', 'obser'"
  
			$sql="UPDATE base SET estado='".$ident."' where nro_tarj like '".$nro_tarj."' ";

			
			$res = mysqli_query( $conexion, $sql ) or die ("error en la actualizacion");
			if(!$res)
			 echo "No se ha realizado correctamente".mysqli_errno($conexion);
			else
			  echo "Modificacion Realizada";

		?>
		<br>
		<a href="index.html">Volver al index</a>
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