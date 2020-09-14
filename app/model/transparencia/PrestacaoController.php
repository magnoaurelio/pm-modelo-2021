<?php
/**
 * Created by PhpStorm.
 * User: MAGNUSOFT-PC
 * Date: 6/11/2018
 * Time: 9:33 AM
 */

class PrestacaoController
{
    static function getPrestacaoContabil($mes,$ano,$unidade){
        $reposository = new \Adianti\Database\TRepository("PrestacaocontasContabil");
            $criteria = new \Adianti\Database\TCriteria();
            $criteria->add(new \Adianti\Database\TFilter("mesReferencia","=",$mes));
            $criteria->add(new \Adianti\Database\TFilter("anoReferencia","=",$ano));
            $criteria->add(new \Adianti\Database\TFilter("codigoUnidGestora","=",$unidade));
            $collection  = $reposository->load($criteria);
            if($collection){
                if(sizeof($collection) > 1){
                    throw  new Exception("Prestacao de $mes/$ano duplicada!1");
                }
                foreach ($collection as $prestacao){
                    return $prestacao;
                }
            }

    }

    static function getPrestacaoFolha($mes,$ano,$unidade){
        $reposository = new \Adianti\Database\TRepository("PrestacaocontasFolha");
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new \Adianti\Database\TFilter("mesReferencia","=",$mes));
        $criteria->add(new \Adianti\Database\TFilter("anoReferencia","=",$ano));
        $criteria->add(new \Adianti\Database\TFilter("codigoUnidGestora","=",$unidade));
        $collection  = $reposository->load($criteria);
        if($collection){
            if(sizeof($collection) > 1){
                throw  new Exception("Prestacao de $mes/$ano duplicada!1");
            }

            if(sizeof($collection) == 0){
                throw  new Exception("Prestacao de conta nao encontrada!");
            }

            foreach ($collection as $prestacao){
                return $prestacao;
            }
        }

    }
}