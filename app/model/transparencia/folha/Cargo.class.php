<?php
class Cargo extends TRecord
{
const TABLENAME = 'cargo';
const PRIMARYKEY= 'codigoCargo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('nomeDoCargo');
			parent::addAttribute('cargaHoraria');
			parent::addAttribute('tipoEscolaridade');
			parent::addAttribute('tipoCargo');
			parent::addAttribute('codigoCargoRhWeb');
			parent::addAttribute('vecimentoBaseOuSalario');
			parent::addAttribute('codigoUnidGestora');
	}

}