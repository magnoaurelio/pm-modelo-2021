<?php
class Programa extends TRecord
{
const TABLENAME = 'programa';
const PRIMARYKEY= 'codigoPrograma';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('denominacaoPrograma');
			parent::addAttribute('descricaoObjePrograma');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}