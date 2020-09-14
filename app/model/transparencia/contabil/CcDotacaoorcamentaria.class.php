<?php
class CcDotacaoorcamentaria extends TRecord implements  ContaCorrentable
{
const TABLENAME = 'cc_dotacaoorcamentaria';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('codigoFuncao');
			parent::addAttribute('codigoSubFuncao');
			parent::addAttribute('codigoPrograma');
			parent::addAttribute('codigoAcao');
			parent::addAttribute('codigoCateEconomica');
			parent::addAttribute('codigoNatuDespesa');
			parent::addAttribute('codigoModaAplicacao');
			parent::addAttribute('codigoElemDespesa');
			parent::addAttribute('fonteRecurso');
			parent::addAttribute('codigoContContabil');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
            parent::addAttribute('codigoContabilItem');
	}

}