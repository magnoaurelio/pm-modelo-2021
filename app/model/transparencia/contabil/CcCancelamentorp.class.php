<?php
class CcCancelamentorp extends TRecord implements  ContaCorrentable
{
const TABLENAME = 'cc_cancelamentorp';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('anoEmisEmpenho');
			parent::addAttribute('numeroEmpenho');
			parent::addAttribute('tipoRestPagar');
			parent::addAttribute('dataCancelamento');
			parent::addAttribute('codigoContContabil');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
            parent::addAttribute('codigoContabilItem');
	}

}