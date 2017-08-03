<?php

/**
 * Created by PhpStorm.
 * User: Pavez
 * Date: 03-08-2017
 * Time: 9:57
 */
class Calculadora
{


    public function sumar($x,$y){
        return $x + $y;
    }

    public function restar($x,$y){
        return $x - $y;
    }

    public function validarNombre($nombre){
        if (is_numeric($nombre)) {
            return false;
        }else if (strlen($nombre) > 0){
            return true;
        }else if(ctype_alnum($nombre)){
            return true;
        }else{
            return false;
        }
    }
}