<?php
/**
 * Created by PhpStorm.
 * User: MAGNUSOFT-PC
 * Date: 8/29/2018
 * Time: 11:14 AM
 */

class VereadorTipo
{
    const PRESIDENTE = 1;
    const PRIVICE = 2;
    const SEGVICE = 3;
    const PRISECRETARIO = 4;
    const SEGSECRETARIO = 5;
    const SUPLENTE = 6;
    const VEREADOR = 7;
    const TESOUREIRO = 8;
    const MEMBRO = 9;
    const OUTROS = 10;


    static function getTipos(){
        return [
            self::PRESIDENTE => "PRESIDENTE",
            self::PRIVICE => "1º VICE-PRESIDENTE",
            self::SEGVICE => "2º VICE-PRESIDENTE",
            self::PRISECRETARIO => "1º SECRETÁRIO(A)",
            self::SEGSECRETARIO => "2º SECRETÁRIO(A)",
            self::SUPLENTE => "SUPLENTE",
            self::VEREADOR => "VEREADOR(a)",
            self::TESOUREIRO => "TESOUREIRO(a)",
            self::MEMBRO => "MEMBRO",
            self::OUTROS => "OUTROS",
        ];
    }
}