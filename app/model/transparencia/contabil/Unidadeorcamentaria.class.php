<?php
class Unidadeorcamentaria extends TRecord
{
const TABLENAME = 'unidadeorcamentaria';
const PRIMARYKEY= 'codigoUnidOrcamentaria';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('nomeUnidOrcamentaria');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}