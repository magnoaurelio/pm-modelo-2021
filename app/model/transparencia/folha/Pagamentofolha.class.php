<?php
class Pagamentofolha extends TRecord
{
const TABLENAME = 'pagamentofolha';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('tipoFolha');
			parent::addAttribute('matricula');
			parent::addAttribute('cpfServidor');
			parent::addAttribute('mesCompPagaFolha');
			parent::addAttribute('dataCredContServidor');
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('numeroEmpenho');
			parent::addAttribute('numeroDocuLiquidacao');
			parent::addAttribute('numeroDocuPagamento');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}



}