<?php
class Acao extends TRecord
{
const TABLENAME = 'acao';
const PRIMARYKEY= 'codigoAcao';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('denominacaoAcao');
			parent::addAttribute('tipoAcao');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}