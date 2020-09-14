<?php
class Cadastrocontabancaria extends TRecord
{
const TABLENAME = 'cadastrocontabancaria';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoBanco');
			parent::addAttribute('codigoAgencia');
			parent::addAttribute('numeroContBancaria');
			parent::addAttribute('tipoContBancaria');
			parent::addAttribute('descricaoContBancaria');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}