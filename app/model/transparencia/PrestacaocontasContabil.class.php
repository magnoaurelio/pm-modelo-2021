<?php
/**
 * PrestacaocontasContabil Active Record
 * @author  <your-name-here>
 */
class PrestacaocontasContabil extends TRecord implements PrestacaoConta
{
    const TABLENAME = 'prestacaocontas_contabil';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'serial'; // {max, serial}


    /**
     * Constructor method
     */
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


    function getCodigo()
    {
        return $this->codigo;
    }

   function tipoPrestacao()
    {
        return "contabil";
    }


    static function getPrestacoes($unidadeGestora){
        $repository = new \Adianti\Database\TRepository('PrestacaocontasContabil');
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new \Adianti\Database\TFilter('codigoUnidGestora','=',$unidadeGestora));
        return $repository->load($criteria);
    }

}
