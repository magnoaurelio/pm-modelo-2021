<?php

//<fileHeader>
  
//</fileHeader>

class Aquisicao extends TRecord
{
    const TABLENAME  = 'aquisicao';
    const PRIMARYKEY = 'aqusicao_id';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('aqu_nome');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getCovid19s
     */
    public function getCovid19s()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('aquisicao_id', '=', $this->aqusicao_id));
        return Covid19::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}


