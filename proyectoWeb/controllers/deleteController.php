<?php

    //Se obtienen los datos de la peticion REST
    $ID = intval($_GET['ID']);

    //Instancia la conexion con la base de datos
    $mysqli = new mysqli("163.178.173.144", "multi-paraiso", "multimedios.rp.2017", "TURISMORURALCR");


    //Se traen los datos del resultSet
    $sql = "delete from Sitio where idSitio = ".$ID;
    if (mysqli_query($mysqli, $sql)) {
        echo json_encode($ID);
  } else {
    echo json_encode(mysqli_error($mysqli)); 
  } 
?>