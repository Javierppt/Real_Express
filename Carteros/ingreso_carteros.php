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
        
<p><a href="../"><button type="button" >Volver</button></a></p>
	<form method="post" action="carga_carteros.php">
  Nombre y Apellido:<input type="text" name="nombre_apellido" size="50" required><br>
  DNI:<input type="text" name="dni" size="10" required><br>
  Telefono:<input type="text" name="telefono" size="10" required><br>
  <br><br>

  <input type="submit" value="Guardar">
  </form> 
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