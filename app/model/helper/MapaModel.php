<?php
/**
 * Created by PhpStorm.
 * User: MAGNUSOFT-PC
 * Date: 5/22/2018
 * Time: 11:06 AM
 */

class MapaModel
{
    public static function getContabil(){
        $path = "app/model/transparencia/contabil/";
        $diretorio = dir($path);
        $models = array();
        while($arquivo = $diretorio -> read()) {
            if (!in_array($arquivo, array(".", ".."))){
                $models[] =  explode(".",$arquivo)[0];
               }
        }
        $diretorio -> close();
        return $models;
    }

    public static function getFolha(){
        $path = "app/model/transparencia/folha/";
        $diretorio = dir($path);
        $models = array();
        while($arquivo = $diretorio -> read()) {
            if (!in_array($arquivo, array(".", ".."))){
                $models[] =  explode(".",$arquivo)[0];
            }
        }
        $diretorio -> close();
        return $models;
    }
}