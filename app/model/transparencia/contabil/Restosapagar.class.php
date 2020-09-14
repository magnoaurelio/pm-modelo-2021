<?php
class Restosapagar extends TRecord
{
const TABLENAME = 'restosapagar';
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
			parent::addAttribute('codigoSubeDespesa');
			parent::addAttribute('fonteRecurso');
			parent::addAttribute('anoEmisEmpenho');
			parent::addAttribute('numeroEmpenho');
			parent::addAttribute('dataEmisEmpenho');
			parent::addAttribute('tipoModaLicitacao');
			parent::addAttribute('naProcLicitatorio');
			parent::addAttribute('historicoEmpenho');
			parent::addAttribute('cpfOrdeDespesa');
			parent::addAttribute('cpfCnpjCredor');
			parent::addAttribute('codigoAplicacao');
			parent::addAttribute('tipoEmpenho');
			parent::addAttribute('valorEmpenho');
			parent::addAttribute('tipoRestPagar');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}