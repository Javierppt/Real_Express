<?php
print('<head>
		<title>Real Express</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="../index.html" id="logo"><img src="../images/real-express.png"> </a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="../index.html">Inicio</a></li>
								<li>
									<a>Consultas</a>
									<ul>
										<li><a href="../Consultas/consulta_apertura.php">Aperturas</a></li>
										<li><a href="../Consultas/consulta_renovaciones.php">Renovaciones</a></li>
										<li><a href="../Consultas/consulta_denuncias.php">Denuncias</a></li>
										
											
									</ul>
								</li>
								<li><a href="../Carteros/index_carteros.php">Carteros</a></li>
								<li>
								<a>Consultas de base</a>
									<ul>
										<li><a href="../Consulta_por_numero_y_cambio_de_estado/consulta_nrotarj.php">Consultas por numero de tarjeta</a></li>
										<li><a href="../Consulta_por_numero_y_cambio_de_estado/consulta_fecha.php">Consultas por fecha de llegada</a></li>
										<li><a href="../Simple_xlsx/import_xlsx.php">Importar datos</a></li>
									</ul>
								</li>
								<li><a href="../Rendiciones/consulta_rendiciones.php">Rendiciones</a></li>
								<li><a href="../Devoluciones/consulta_fecha_devoluciones.php">Devoluciones</a></li>
								<li><a href="../Stock/cargar_stock.php">Actualizar stock</a></li>
								<li><a href="../Consultas_adicionales/index_consultas.php">Consultas Adicionales</a></li>
							</ul>
						</nav>');
?>