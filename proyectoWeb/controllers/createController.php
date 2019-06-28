<?php

    //Se obtienen los datos de la peticion REST
    $name = $_GET['name'];
    $link = $_GET['link'];
    $description = $_GET['description'];
    $address = $_GET['address'];

    //Instancia la conexion con la base de datos
    $mysqli = new mysqli("163.178.173.144", "multi-paraiso", "multimedios.rp.2017", "TURISMORURALCR");
    
    $result = $mysqli->query("select Max(idSitio) from Sitio");
    
    while ($currentRow = $result->fetch_row()) {
        $result2 = $currentRow[0]+1;
    }

    //Se traen los datos del resultSet
    $sql = "insert into Sitio values (".$result2.",'".$name."','".$description."','".$address."','".$link."','imagen.jpg')";
    if (mysqli_query($mysqli, $sql)) {
        echo json_encode("listo");
  } else {
    echo json_encode(mysqli_error($mysqli)); 
  }   
?>