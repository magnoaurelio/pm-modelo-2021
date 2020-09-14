<?php
class CcLiquidacaorp extends TRecord implements  ContaCorrentable
{
const TABLENAME = 'cc_liquidacaorp';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('anoEmisEmpenho');
			parent::addAttribute('numeroEmpenho');
			parent::addAttribute('tipoRestPagar');
			parent::addAttribute('numeroDocuLiquidacao');
			parent::addAttribute('dataLiquidacao');
			parent::addAttribute('tipoDocumento');
			parent::addAttribute('codigoContContabil');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
            parent::addAttribute('codigoContabilItem');
	}

    function getLancamentoContabilItem(){
        new Lancamentocontabilitem($this->codigoContabilItem);
    }

}