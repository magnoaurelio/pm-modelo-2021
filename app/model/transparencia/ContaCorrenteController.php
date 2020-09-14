<?php
/**
 * Created by PhpStorm.
 * User: MAGNUSOFT-PC
 * Date: 6/12/2018
 * Time: 11:46 AM
 */

class ContaCorrenteController
{
   function getContaContabilItem(Lancamentocontabilitem $lancamentocontabilitem){
       $conta =  $lancamentocontabilitem->contaCorrente;
       $conta =  ucfirst(strtolower(substr($conta,0,2))).ucfirst(strtolower(substr($conta,2)));
       $repository = new \Adianti\Database\TRepository($conta);
       $criteria = new \Adianti\Database\TCriteria();
       $criteria->add(new \Adianti\Database\TFilter("codigoContabilItem","=",$lancamentocontabilitem->codigo));
       $contas = $repository->load($criteria);
       if ($contas){
            return  $contas[0];
       }
       $conta = new stdClass();
       return $conta;
   }
}