<?php
class Agentepolitico extends TRecord
{
const TABLENAME = 'agentepolitico';
const PRIMARYKEY= 'cpfAgenPolitico';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('numeroRgAgenPolitico');
			parent::addAttribute('orgaoExpedidor');
			parent::addAttribute('nome');
			parent::addAttribute('email');
			parent::addAttribute('tipoAgenPolitico');
			parent::addAttribute('codigoUnidGestora');
	}

}