<?php

    require_once "calculo.php";
    $calcular= new calculadora();

    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $opc= $_POST['opc'];

    echo $calcular->obtenerDatos($num1,$num2,$opc);