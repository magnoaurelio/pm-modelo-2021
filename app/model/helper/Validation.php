<?php
/**
 * Created by PhpStorm.
 * User: MAGNUSOFT-PC
 * Date: 6/11/2018
 * Time: 9:03 AM
 */

class Validation
{
      static function validateMes($mes){
           return $mes ? $mes : date('m');
      }

      static function validateAno($ano){
           return $ano ? $ano : date('Y');
      }

      static function validateMesAno($mes,$ano){
         return ["mes"=>self::validateMes($mes), "ano"=>self::validateAno($ano)];

      }



}