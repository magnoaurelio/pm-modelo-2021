<?php
class CcUnidorcamentariarecebedor extends TRecord implements  ContaCorrentable
{
const TABLENAME = 'cc_unidorcamentariarecebedor';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoUnidOrcaRecebedora');
			parent::addAttribute('codigoContContabil');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
            parent::addAttribute('codigoContabilItem');
	}

}