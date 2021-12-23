<?php
    //verficar informacion
    /*$paises = array(
        "1" => array(
            "Nombre" => "Juan",
            "Apellido" => "Mendez"
        ),
        "2" => array(
            "Nombre" => "Maria"
        )
    );
    $info = $_POST['paises'];
    if(isset($info)){
        switch($info){
            case "1":
                $vuelo = $paises["1"];
                break;
            case "2":
                $vuelo = $paises["2"];
                break;
        }

        $imprimir = "";
        foreach($vuelo as $vuelos => $indice){
            $imprimir = $vuelos.$indice;
        }
        echo $imprimir;
         onchange= this.form. ---select
    }*/
   
   $nombre = array("rodrigo","kenya");
   $apellido = array("Grande","paiz");
   $imprimir="";
   $pais = $_POST['paises'];
   if($pais == "1")
     $imprimir = $nombre[0].$apellido[0];
   if($pais == "2")
     $imprimir = $nombre[1].$apellido[1];
    echo $imprimir;
    
?>