<?php
/**
 * Created by PhpStorm.
 * User: MAGNUSOFT-PC
 * Date: 5/22/2018
 * Time: 10:45 AM
 */

class DeletarPrestacaoConta
{

    private $prestacaoConta;


    public function __construct(PrestacaoConta $prestacaoconta)
    {
        $this->prestacaoConta = $prestacaoconta;
        if($prestacaoconta->tipoPrestacao() == "contabil") $this->deletePrestacaoContaContabil();
        else $this->deletePrestacaoContaFolha();

        $this->prestacaoConta->delete();

    }

    public  function deletePrestacaoContaContabil(){
        foreach (MapaModel::getContabil() as $model){
            $this->delete($model);
        }
    }

    public  function deletePrestacaoContaFolha(){
        foreach (MapaModel::getFolha() as $model){
            $this->delete($model);
        }
    }

    private function delete($model){
        $repo = new \Adianti\Database\TRepository($model);
        $criterio = new \Adianti\Database\TCriteria();
        $model = new $model();
        if(!in_array("prestacaoConta",$model->getAttributes())) return;
        $criterio->add(new \Adianti\Database\TFilter("prestacaoConta","=",$this->prestacaoConta->getCodigo()));
        $repo->delete($criterio);
    }


}