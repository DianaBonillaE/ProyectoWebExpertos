<?php

    //Se obtienen los datos de la peticion REST
    $type = intval($_GET['type']);
    $services = intval($_GET['services']);
    $stay = $_GET['stay'];
    $transport = $_GET['transport'];

    //Se cambian los valores entrantes de string a int para realizar una resta
    if ($stay == 'EC') {
        $stayInt = 1;
    } else {
        $stayInt= 2;
    }

    //Se cambian los valores entrantes de string a int para realizar una resta
    if ($transport == 'A') {
        $transportInt = 1;
    } else {
        $transportInt= 2;
    }

    //Instancia la conexion con la base de datos
    $mysqli = new mysqli("163.178.173.144", "multi-paraiso", "multimedios.rp.2017", "TURISMORURALCR");
    //Se traen los datos del resultSet
    $result = $mysqli->query("SELECT * FROM DATOS");

    //Variable de sitio final
    $finalSite       = "";
    //Menor distancia encontrada
    $distance    = 0;
    //Primera iteracion de el data set
    $isFirst     = true;
    
    while ($currentRow = $result->fetch_row()) {

        //Se cambian los string por valores numericos
        if ($currentRow[3] == 'EC') {
            $stayRow = 1;
        } else {
            $stayRow = 2;
        }
   
        if ($currentRow[4] == 'A') {
            $transportRow = 1;
        } else
        if ($currentRow[4] == 'B') {
            $transportRow = 2;
        } else {
            $transportRow = 3;
        }

        //Calcula la resta de los datos ingresados comparado a los de la base de datos
        $typeCalc = intval($currentRow[2]) - $type; 
        $servicesCalc = intval($currentRow[5]) - $services;
        $stayCalc = $stayRow - $stayInt;
        $transportCalc = $transportRow - $transportInt;
   
        //Aplica la formula de euclides
        $distanceAux = intval(sqrt(pow($typeCalc, 2) + pow($servicesCalc, 2) + pow($stayCalc, 2) + pow($transportCalc, 2)));
       
        //Establece el sitio para esa distancia
        //En la primera iteracion guarda los datos de inicio
        if($isFirst){
            $finalSite = $currentRow[0];
            $isFirst = false;
            $distance = $distanceAux;
        }else{
            //En las siguientes iteraciones actualiza los datos por default si la nueva distancia es menor a la encontrada
            if ($distanceAux <= $distance) {
                $distance  = $distanceAux;
                $finalSite = $currentRow[0];
            }  
        } 
        
    }
    //Finaliza la conexion
    $result -> close();
    //retorna el genero con menor distacia
    echo json_encode($finalSite);
?>
   