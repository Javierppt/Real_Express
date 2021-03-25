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
		

		<h1>Modificacion de Carteros</h1>
		<form action=modificacion.php method=post>
		 		<?php
			require('../conexion.php');
			$ident=$_GET['id'];
			
			$consulta = "SELECT * FROM cartero WHERE idcartero like '$ident'";
			$res = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

			if(!$res){
				echo"Error al seleccionar".mysql_errno();
			}
			else{
				While($row=mysqli_fetch_array($res))  // los datos los pedimos de una tabla en forma de array, usamos esta sentencia
				{
					$dni=$row['dni'];
					$nombre_cart=$row['nombre_apellido'];
					$tel_cart=$row['telefono'];
					$id=$row['idcartero'];
				
				echo "
					<input type='hidden' id='id' name='id' value='".$id."' >
					<table>
					<tr>
					<td>Nombre</td>
					<td><input type=text name=nombre_apellido value='".$nombre_cart."'></td>
					</tr>
					<tr>
					<td>dni</td>
					<td><input type=text name=dni value=".$dni."></td>
					</tr>
					<tr>
					<td>telefono</td>
					<td><input type=text name=telefono value=".$tel_cart."></td>
					</tr>
					</table>";
			}
		}	
		?>
	</form>
		<br>
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