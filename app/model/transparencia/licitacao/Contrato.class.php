<?php
/**
 * Contrato Active Record
 * @author  <your-name-here>
 */
class Contrato extends \Adianti\Database\TRecord implements Direcionavel
{
    const TABLENAME = 'contrato';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'max'; // {max, serial}

    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('numero');
        parent::addAttribute('ano');
        parent::addAttribute('cpfCnpjCredor');
        parent::addAttribute('tipoCredor');
        parent::addAttribute('assinatura');
        parent::addAttribute('vencimento');
        parent::addAttribute('extrato');
        parent::addAttribute('contrato');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('licitacaoCodigo');
        parent::addAttribute('detalhes');
        parent::addAttribute('valor');
    }


    function getDiretorio()
    {
        $path = 'files/transparencia/contrato/';
        if (!file_exists($path))
            mkdir($path,755,true);
        return $path;
    }

    public function getTipoCredor(){
        return new tipoCredor($this->tipoCredor);
    }

    function get_Credor(){
        return new Fornecedor($this->cpfCnpjCredor);
    }

    public function get_Licitacao()
    {
        return new Licitacao($this->licitacaoCodigo);
    }


    function getAditivos( $array = false ){
        $aditivos = array();
        $repository = new TRepository('Aditivo');
        $criteria = new TCriteria;
        $criteria->add(new TFilter('contratoCodigo', '=', $this->codigo));
        $aditivos_contratos = $repository->load($criteria);
        if ($aditivos_contratos)
        {
            foreach ($aditivos_contratos as $aditivo)
            {
               $aditivos[] = $aditivo;
            }
        }

        if($array){
            array_walk($aditivos, function(&$object, $key){
                $object->aditivo =  PDFController::getLinkPDF($object->aditivo, $object);
                $object->assinatura = \Adianti\Widget\Form\TDate::date2br($object->assinatura);
                $object->tipoAditivo =  $object::getTipoAditivo($object->tipoAditivo);
                $object = $object->toArray();

            });
        }

        return $aditivos;
    }
}
