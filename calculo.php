<?php

class calculadora{

    public function obtenerDatos($num1,$num2,$opc){
        switch ($opc){
            case 'Suma':
                return $num1 + $num2;
                break;
            case 'Resta':
                return $num1 - $num2;
                break;
            case 'Multiplicacion':
                return $num1 * $num2;
                break;
            case 'Division':
                return $num1 / $num2;
                break;
            case 'Modulo':
                return $num1 % $num2;
                break;
            default;

                break;
        }

    }

}
