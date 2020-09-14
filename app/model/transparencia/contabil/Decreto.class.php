<?php
class Decreto extends TRecord
{
const TABLENAME = 'decreto';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('numeroDecreto');
			parent::addAttribute('numeroLeiQueAutorizou');
			parent::addAttribute('dataDecreto');
			parent::addAttribute('dataPublDecreto');
			parent::addAttribute('tipoPublicacao');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}