<?php
        

    //Se obtienen los datos de la peticion REST
    $name = $_GET['name'];
    $link = $_GET['link'];
    $description = $_GET['description'];
    $address = $_GET['address'];

    //Instancia la conexion con la base de datos
    $mysqli = new mysqli("163.178.173.144", "multi-paraiso", "multimedios.rp.2017", "TURISMORURALCR");
    
    $result = "select * from Sitio";

    if (mysqli_query($mysqli, $result)) {

        echo json_encode($mysqli);
  
      } else {
        echo json_encode(mysqli_error($mysqli)); 
      }   


?>