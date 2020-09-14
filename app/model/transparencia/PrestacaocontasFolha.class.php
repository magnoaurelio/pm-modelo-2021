<?php
class PrestacaocontasFolha extends \Adianti\Database\TRecord implements PrestacaoConta
{
const TABLENAME = 'prestacaocontas_folha';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('nomeUnidGestora');
			parent::addAttribute('cpfContador');
			parent::addAttribute('cpfGestor');
			parent::addAttribute('anoReferencia');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('versaoXml');
			parent::addAttribute('diaInicPresContas');
			parent::addAttribute('diaFinaPresContas');
	}

    public static function getPrestacoes($unidadeGestora)
    {
        $repository = new \Adianti\Database\TRepository('PrestacaocontasFolha');
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new \Adianti\Database\TFilter('codigoUnidGestora','=',$unidadeGestora));
        return $repository->load($criteria);
    }


    function getCodigo()
    {
        return $this->codigo;
    }

    function tipoPrestacao()
    {
        return "folha";
    }

}