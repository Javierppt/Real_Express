<?php
    
    $db_host="localhost";
    $db_name="real_express";
    $db_user="root";
    $db_pass="";
    include 'simplexlsx.class.php';
    $xlsx = new SimpleXLSX( 'base_telefonica.xlsx' );
    ini_set('max_execution_time', '300');
    try {
       $conn = new PDO( "mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_pass");
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
      
    $stmt = $conn->prepare( "INSERT INTO datos_cliente (nro_tarj, nombre_apellido, direccion, cod_pos, localidad, telefono, estado) VALUES (?, ?, ?, ?, ?, ?, ?) ");
    $stmt->bindParam( 1, $nro_tarj);
    $stmt->bindParam( 2, $nombre_apellido);
    $stmt->bindParam( 3, $direccion);
    $stmt->bindParam( 4, $cod_pos);
    $stmt->bindParam( 5, $localidad);
    $stmt->bindParam( 6, $telefono);
    $stmt->bindParam( 7, $estado);
    foreach ($xlsx->rows() as $fields)
    {
        echo $fields[0];
        $nro_tarj = $fields[0];
        $nombre_apellido = $fields[5];
        $direccion = $fields[7];
        $cod_pos = $fields[6];
        $localidad = $fields[10];
        $telefono = $fields[124];
        $estado = $fields[12];
        $stmt->execute();
    }
