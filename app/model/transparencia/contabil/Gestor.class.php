<?php
class Gestor extends TRecord
{
const TABLENAME = 'gestor';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('cpfAgenPolitico');
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('numeroAtoQueNomeGestor');
			parent::addAttribute('tipoDataVigencia');
			parent::addAttribute('dataInicOuFimVigencia');
			parent::addAttribute('codigoUnidGestora');
	}

}