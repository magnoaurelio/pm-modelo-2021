<?php
class Ordenador extends TRecord
{
const TABLENAME = 'ordenador';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('cpfAgenPolitico');
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('numeroAtoQueNomeOrdenador');
			parent::addAttribute('dataInicOuFimVigencia');
			parent::addAttribute('tipoDataVigencia');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}