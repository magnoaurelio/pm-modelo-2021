<?php
class Lancamentocontabil extends TRecord
{
const TABLENAME = 'lancamentocontabil';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('numeroRegiOuLancamento');
			parent::addAttribute('dataRegiOuLancamento');
			parent::addAttribute('tipoLancContabil');
			parent::addAttribute('tipoMoviContabil');
			parent::addAttribute('historicoRegiContabil');
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('LancamentoContabilItem');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}


	function getUnidadeOrcamentaria(){
	    return new Unidadeorcamentaria($this->codigoUnidOrcamentaria);
    }

    function getTipoLancContabil(){
	    return new tipoLancContabil($this->tipoLancContabil);
    }

    function getTipoMoviContabil(){
        return new tipoMoviContabil($this->tipoMoviContabil);
    }

}