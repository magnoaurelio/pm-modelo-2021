<?php
class CcDomiciliobancario extends TRecord implements  ContaCorrentable
{
const TABLENAME = 'cc_domiciliobancario';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoBanco');
			parent::addAttribute('codigoAgencia');
			parent::addAttribute('numeroContBancaria');
			parent::addAttribute('tipoContBancaria');
			parent::addAttribute('atributoSupeFinanceiro');
			parent::addAttribute('fonteRecurso');
			parent::addAttribute('codigoContContabil');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
            parent::addAttribute('codigoContabilItem');
	}

}