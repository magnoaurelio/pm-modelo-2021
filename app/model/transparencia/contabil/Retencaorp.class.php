<?php
class Retencaorp extends TRecord
{
const TABLENAME = 'retencaorp';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('anoEmisEmpenho');
			parent::addAttribute('numeroEmpenho');
			parent::addAttribute('tipoRestPagar');
			parent::addAttribute('numeroDocuLiquidacao');
			parent::addAttribute('numeroDocuPagamento');
			parent::addAttribute('tipoRetencao');
			parent::addAttribute('tipoOrigRetencao');
			parent::addAttribute('valorRetencao');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}