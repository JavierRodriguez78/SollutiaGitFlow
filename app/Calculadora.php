<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 12/02/18
 * Time: 17:49
 */

namespace App;


class Calculadora
{

        public static function suma($valor1, $valor2){
            return $valor1+$valor2;
        }

        public static function resta($valor1, $valor2) {
            return $valor1-$valor2;
        }
}