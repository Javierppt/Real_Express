<!DOCTYPE html>
<html>

	<?php
		require('../navegador_Top');
		require('../conexion.php');
		$consulta = "INSERT * FROM base WHERE estado like 'Distrib.'";
		$res = mysqli_query($conexion,$consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");
?>
</div>

</body>
</html>
