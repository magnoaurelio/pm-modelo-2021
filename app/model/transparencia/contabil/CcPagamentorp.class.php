<?php
class CcPagamentorp extends TRecord implements  ContaCorrentable
{
const TABLENAME = 'cc_pagamentorp';
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
			parent::addAttribute('fonteRecurso');
			parent::addAttribute('codigoBanco');
			parent::addAttribute('dataPagamento');
			parent::addAttribute('numeroContBancaria');
			parent::addAttribute('codigoAgencia');
			parent::addAttribute('tipoContBancaria');
			parent::addAttribute('dadosPagamento');
			parent::addAttribute('codigoContContabil');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
            parent::addAttribute('codigoContabilItem');
	}

	function getLancamentoContabilItem(){
	    new Lancamentocontabilitem($this->codigoContabilItem);
    }

}