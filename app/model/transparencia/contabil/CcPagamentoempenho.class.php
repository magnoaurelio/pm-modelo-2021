<?php
class CcPagamentoempenho extends TRecord implements  ContaCorrentable
{
const TABLENAME = 'cc_pagamentoempenho';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoUnidOrcamentaria');
			parent::addAttribute('numeroEmpenho');
			parent::addAttribute('numeroDocuLiquidacao');
			parent::addAttribute('numeroDocuPagamento');
			parent::addAttribute('fonteRecurso');
			parent::addAttribute('codigoAplicacao');
			parent::addAttribute('dataPagamento');
			parent::addAttribute('codigoBanco');
			parent::addAttribute('codigoAgencia');
			parent::addAttribute('numeroContBancaria');
			parent::addAttribute('tipoContBancaria');
			parent::addAttribute('codigoContContabil');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
            parent::addAttribute('codigoContabilItem');
            parent::addAttribute('cpfCnpjCredor');
            parent::addAttribute('numeroChequedocumento');
            parent::addAttribute('transferenciaBancaria');
	}

    function getLancamentoContabilItem(){
        return new Lancamentocontabilitem($this->codigoContabilItem);
    }

	function get_UnidadeOrcamentaria(){
	    return new Unidadeorcamentaria($this->codigoUnidOrcamentaria);
    }

    function  getBanco(){
	    return new tipoBanco(str_pad($this->codigoBanco,3,0,STR_PAD_LEFT));
	}

	function  getTipoConta(){
        return new tipoContBancaria($this->tipoContBancaria);
    }

    function get_Credor(){

	    if($this->cpfCnpjCredor)
            return new Fornecedor($this->cpfCnpjCredor);
	   $cnpj =  Empenho::getEmpenho($this->numeroEmpenho, $this->codigoUnidOrcamentaria)->get_Credor();
	    return $cnpj;
    }

    function getEmpenho(){
        return Empenho::getEmpenho($this->numeroEmpenho,$this->codigoUnidOrcamentaria, $this->prestacaoConta);
    }

    function getFonteRecurso(){
        $dados = explode(';',   $this->fonteRecurso);
        if(sizeof($dados) > 1) return new tipoFontRecurso(intval($dados[1]));
        return new tipoFontRecurso();
    }

}