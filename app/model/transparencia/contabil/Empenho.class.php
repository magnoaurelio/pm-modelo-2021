<?php
class Empenho extends TRecord
{
const TABLENAME = 'empenho';
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
			parent::addAttribute('codigoSubeDespesa');
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
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

	function get_UnidadeOrcamentaria(){
	    return new Unidadeorcamentaria($this->codigoUnidOrcamentaria);
    }

    function get_Credor(){
        return new Fornecedor($this->cpfCnpjCredor);
    }

    function get_ModaLicitacao(){

        return new tipoModaLicitacao($this->tipoModaLicitacao);
    }

    function getTipoFuncao(){
        $object = tipoFuncao::find($this->codigoFuncao);
        return $object ? $object : new tipoFuncao();
    }

    function getTipoSubFuncao(){
        $object = tipoSubFuncao::find($this->codigoSubFuncao);
        return $object ? $object : new tipoSubFuncao();
    }

    function getPrograma()
    {
        $object = Programa::find($this->codigoPrograma);
        return $object ? $object : new Programa();
    }

    function getAcao()
    {
        $object = tipoAcao::find($this->codigoAcao);
        return $object ? $object : new tipoAcao();
    }

    function getCateEconomica()
    {
        $object = tipoCateEconomica::find($this->codigoCateEconomica);
        return $object ? $object : new tipoCateEconomica();
    }

    function getNatuDespesa()
    {
        $object = tipoNatuDespesa::find($this->codigoNatuDespesa);
        return $object ? $object : new tipoNatuDespesa();
    }

    function getModaAplicacao()
    {
        $object = tipoModaAplicacao::find($this->codigoModaAplicacao);
        return $object ? $object : new tipoModaAplicacao();
    }

    function getElemDespesa()
    {
        $object = tipoElemDespesa::find($this->codigoElemDespesa);
        return $object ? $object :new tipoModaAplicacao();
    }

    function getFontRecurso()
    {
        $object = tipoFontRecurso::find($this->fonteRecurso);
        return $object ? $object : new tipoFontRecurso();
    }

    function getSubeDespesa()
    {
        $object = tipoSubeDespesa::find($this->codigoSubeDespesa);
        return $object ? $object : new tipoSubeDespesa();
    }


    static function getEmpenho($numero,$unidade, $prestacaoCodigo){
        $repository = new \Adianti\Database\TRepository('Empenho');
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new \Adianti\Database\TFilter("numeroEmpenho","=", $numero));
        $criteria->add(new \Adianti\Database\TFilter("codigoUnidOrcamentaria","=", $unidade));
        $criteria->add(new \Adianti\Database\TFilter("prestacaoConta","=", $prestacaoCodigo));
        $empenhos =  $repository->load($criteria);
        if ($empenhos){
            return $empenhos[0];
        }

        return new Empenho();
    }

}