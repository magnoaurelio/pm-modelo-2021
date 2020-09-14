<?php
class CcCredorfornecedor extends TRecord implements  ContaCorrentable
{
const TABLENAME = 'cc_credorfornecedor';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('cpfCnpjCredor');
			parent::addAttribute('atributoSupeFinanceiro');
			parent::addAttribute('tipoIDCL');
			parent::addAttribute('codigoContContabil');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
            parent::addAttribute('codigoContabilItem');
	}

}