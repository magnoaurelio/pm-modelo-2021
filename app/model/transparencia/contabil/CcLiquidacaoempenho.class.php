<?php
class CcLiquidacaoempenho extends TRecord implements  ContaCorrentable
{
const TABLENAME = 'cc_liquidacaoempenho';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('numeroEmpenho');
			parent::addAttribute('numeroDocuLiquidacao');
			parent::addAttribute('dataLiquidacao');
			parent::addAttribute('tipoDocumento');
			parent::addAttribute('numeroDocuHabil');
			parent::addAttribute('codigoContContabil');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
            parent::addAttribute('codigoContabilItem');
	}

    function getLancamentoContabilItem(){
        $lancamento = new Lancamentocontabilitem($this->codigoContabilItem);
        return $lancamento;
    }

    function get_UnidadeOrcamentaria(){
        return new Unidadeorcamentaria($this->codigoUnidOrcamentaria);
    }

    function getTipoDocumento(){
        return new tipoDocumento($this->tipoDocumento);
    }

}