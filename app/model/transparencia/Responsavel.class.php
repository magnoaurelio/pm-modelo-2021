<?php

//<fileHeader>
  
//</fileHeader>

class Responsavel extends TRecord
{
    const TABLENAME  = 'responsavel';
    const PRIMARYKEY = 'responsavel_id';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('res_orgao');
        parent::addAttribute('res_cnpj');
        parent::addAttribute('res_secretario');
        parent::addAttribute('res_fone');
        parent::addAttribute('res_site');
        parent::addAttribute('res_gestor');
        parent::addAttribute('res_logo');
        parent::addAttribute('unidadeGestora');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getCovid19s
     */
    public function getCovid19s()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('responsavel_id', '=', $this->responsavel_id));
        return Covid19::getObjects( $criteria );
    }
    /**
     * Method getDecreto19s
     */
    public function getDecreto19s()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('responsavel_id', '=', $this->responsavel_id));
        return Decreto19::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}