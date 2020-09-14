<?php
class Lancamentocontabilitem extends TRecord
{
    const TABLENAME = 'lancamentocontabilitem';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'max'; // {max, serial}

    public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
            parent::addAttribute('codigoLancamento');
            parent::addAttribute('tipoNatuLancamento');
			parent::addAttribute('valorLancado');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
			parent::addAttribute('contaCorrente');
	}

	function getTipoNatuLancamento(){
	    return new tipoNatuLancamento($this->tipoNatuLancamento);
    }


    function getContaCorrente(){
	    $contaCorrenteController =  new ContaCorrenteController();
	    return $contaCorrenteController->getContaContabilItem($this);
    }

    static function getQuery($tabela){
       return "(SELECT prestacaoConta FROM lancamentocontabilitem WHERE lancamentocontabilitem.codigo = ".$tabela.".codigoContabilItem)";

    }



}