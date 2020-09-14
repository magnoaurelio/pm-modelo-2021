<?php
class Retencao extends TRecord
{
const TABLENAME = 'retencao';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('numeroEmpenho');
			parent::addAttribute('numeroDocuLiquidacao');
			parent::addAttribute('numeroDocuPagamento');
			parent::addAttribute('tipoOrigRetencao');
			parent::addAttribute('tipoRetencao');
			parent::addAttribute('valorRetencao');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}