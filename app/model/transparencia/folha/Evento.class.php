<?php
class Evento extends TRecord
{
const TABLENAME = 'evento';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('tipoEvento');
			parent::addAttribute('codigoEvento');
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('numeroEmpenho');
			parent::addAttribute('numeroDocuLiquidacao');
			parent::addAttribute('valor');
			parent::addAttribute('incidePrevidencia');
			parent::addAttribute('incideIR');
			parent::addAttribute('incideFGTS');
			parent::addAttribute('descricaoEvenUnidGestora');
			parent::addAttribute('codigoFolha');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}


	function getTipoEvento(){
	    return  tipoEvento::find($this->tipoEvento);
    }
    

    function getCodigoEvento(){
        return  codigoEvento::find($this->codigoEvento);
    }

}