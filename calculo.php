<?php

class calculadora{

    public function obtenerDatos($num1,$num2,$opc){
        switch ($opc){
            case 1:
                return $num1 + $num2;
                break;
            case 2:
                return $num1 - $num2;
                break;
            case 3:
                return $num1 * $num2;
                break;
            case 4:
                return $num1 / $num2;
                break;
            case 5:
                return $num1 % $num2;
                break;
            default;

                break;
        }

    }

}
